<?php

namespace App\Http\Controllers;

use App\APLRegistration;
use App\Events\CustomEmailSubmission;
use App\LivePost;
use App\OnlineRegistration;
use App\OnsiteRegistration;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;

class HomeController extends Controller
{
    /**
     * HomeController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (\Auth::user()->access_level >= User::$ADMIN)
            return view('admin.home');
        else {
            \Auth::logout();
            return view('errors.404');
        }
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showLiveAdmin () {
        $now = new Carbon();
        $posts = LivePost::where('published_at','<',$now->getTimestamp())
            ->orderBy('published_at', 'desc')->get();
        return view('admin.live', ['posts' => $posts, 'preloader_off' => true]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function saveLivePost(Request $request) {
        $post = new LivePost();
        $post->fill($request->all());
        $now = new Carbon();
        $user = \Auth::user();
        $post->author()->associate($user);
        $post->published_at = $now->getTimestamp();
        $this->storeMedia($request, $post);
        $post->save();
        return redirect()->route('app::admin.live');
    }

    /**
     * @param Request $request
     * @param LivePost $post
     */
    public function storeMedia(Request $request, LivePost $post) {
        $now = (new Carbon())->getTimestamp();
        if ($request->hasFile('picture')){
            $fileName = LivePost::$IMAGE_NAME_PREFIX . $now . LivePost::$IMAGE_ORIGINAL_SUFFIX . '.' . $request->picture->getClientOriginalExtension();
            $manipulatedFile = LivePost::$IMAGE_NAME_PREFIX . $now . LivePost::$IMAGE_COMPRESSED_SUFFIX . '.jpg' ;
            $request->picture->move('storage/live', $fileName);
            $post->original_picture = 'storage/live/' . $fileName;
            $compressed_address = $this->compressMedia($post->original_picture, $manipulatedFile);
            $post->picture = $compressed_address;
            $post->save();
        }
    }

    /**
     * Compress the fresh uploaded media
     * @param $path
     * @param $fileName
     * @return string
     */
    private function compressMedia($path, $fileName){
        // Open the original image file
        $img = Image::make($path);

        // Resize the file to the desired compression
        $width = $img->width() / 5;
        $height = $img->height() / 5;
        $img->resize($width, $height);

        // Finally we save the image as a new file
        $directory = 'storage/live/';
        $img->save(public_path($directory) . $fileName);
        return $directory . $fileName;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function newLivePost () {
        return view('live.new');
    }

    /**
     * @param LivePost $LivePost
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showPostEditForm(LivePost $LivePost) {
        return view('live.edit', ['post' => $LivePost]);
    }

    /** Edit LiveBlog Post item
     *
     * @param Request $request
     * @param LivePost $LivePost
     * @return \Illuminate\Http\RedirectResponse
     */
    public function editPost (Request $request, LivePost $LivePost) {
        $LivePost->fill($request->all());
        $now = (new Carbon())->getTimestamp();
        if ($request->hasFile('picture')){
            $fileName = LivePost::$IMAGE_NAME_PREFIX . $now . LivePost::$IMAGE_ORIGINAL_SUFFIX . '.' . $request->picture->getClientOriginalExtension();
            $manipulatedFile = LivePost::$IMAGE_NAME_PREFIX . $now . LivePost::$IMAGE_COMPRESSED_SUFFIX . '.jpg' ;
            $request->picture->move('storage/live', $fileName);
            $LivePost->original_picture = 'storage/live/' . $fileName;
            $compressed_address = $this->compressMedia($LivePost->original_picture, $manipulatedFile);
            $LivePost->picture = $compressed_address;
        }
        $LivePost->save();
        return redirect()->route('app::admin.live');
    }

    /** List all the registrations
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showRegistrations () {
        $data = OnsiteRegistration::all()->sortBy('created_at');
        return view('admin.registrations', ['data' => $data]);
    }

    /** List all the registrations
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function exportRegistrations () {
        $onsite = OnsiteRegistration::all()->sortBy('created_at');
        $online = OnlineRegistration::all()->sortBy('created_at');
        return response()->json([
            'onsite' => $onsite,
            'online' => $online
        ]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showOnlineRegistrations()
    {
        $data = OnlineRegistration::all()->sortBy('created_at');
        return view('admin.online_registrations', ['data' => $data]);
    }

    /** Show the Registration edit form
     *
     * @param OnsiteRegistration $team
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showEditRegistrationForm(OnsiteRegistration $team) {
        return view('contest.edit', ['team' => $team]);
    }

    /** Edit and save the registration information and status
     *
     * @param Request $request
     * @param OnsiteRegistration $team
     * @return \Illuminate\Http\RedirectResponse
     */
    public function saveRegistration(Request $request, OnsiteRegistration $team) {
        $team->fill($request->all());
        $team->register_is_ok = true;
        $status = $request->get('status');
        switch ($status){
            case (OnsiteRegistration::$PENDING['status']) :
                $team->status = OnsiteRegistration::$PENDING;
                break;

            case (OnsiteRegistration::$PAID['status']) :
                $team->status = OnsiteRegistration::$PAID;
                break;

            case (OnsiteRegistration::$APPROVED['status']) :
                $team->status = OnsiteRegistration::$APPROVED;
                break;

            case (OnsiteRegistration::$REJECTED['status']) :
                $team->status = OnsiteRegistration::$REJECTED;
                break;
            case (OnsiteRegistration::$RESERVED['status']) :
                $team->status = OnsiteRegistration::$RESERVED;
                break;
        }
        $team->save();
        return redirect()->route('app::admin.registrations.show');
    }

    /**
     * @param OnsiteRegistration $team
     * @return \Illuminate\Http\RedirectResponse
     */
    public function removeRegistration(OnsiteRegistration $team) {
        $team->delete();
        return redirect()->route('app::admin.registrations.show');
    }

    /**
     * @param LivePost $LivePost
     * @return \Illuminate\Http\RedirectResponse
     */
    public function removeLivePost(LivePost $LivePost) {
        $LivePost->delete();
        return redirect()->route('app::admin.live');
    }

    /**
     * @param OnlineRegistration $team
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showEditOnlineRegistrationForm(OnlineRegistration $team) {
        return view('contest.online_edit', ['team' => $team]);
    }

    /**
     * @param Request $request
     * @param OnlineRegistration $team
     * @return \Illuminate\Http\RedirectResponse
     */
    public function saveOnlineRegistration(Request $request, OnlineRegistration $team) {
        $team->fill($request->all());
        $team->register_is_ok = true;
        $status = $request->get('status');
        switch ($status){
            case (OnsiteRegistration::$PENDING['status']) :
                $team->status = OnsiteRegistration::$PENDING;
                break;

            case (OnsiteRegistration::$PAID['status']) :
                $team->status = OnsiteRegistration::$PAID;
                break;

            case (OnsiteRegistration::$APPROVED['status']) :
                $team->status = OnsiteRegistration::$APPROVED;
                break;

            case (OnsiteRegistration::$REJECTED['status']) :
                $team->status = OnsiteRegistration::$REJECTED;
                break;
        }
        $team->save();
        return redirect()->route('app::admin.online_registrations.show');
    }

    /**
     * @param OnlineRegistration $team
     * @return \Illuminate\Http\RedirectResponse
     */
    public function removeOnlineRegistration(OnlineRegistration $team) {
        $team->delete();
        return redirect()->route('app::admin.online_registrations.show');
    }


    public function showAPLRegistrations()
    {
        $data = APLRegistration::all()->sortBy('created_at');
        return view('admin.APL_registrations', ['data' => $data]);
    }

}
