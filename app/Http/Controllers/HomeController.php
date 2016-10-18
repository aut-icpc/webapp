<?php

namespace App\Http\Controllers;

use App\LivePost;
use App\OnlineRegistration;
use App\OnsiteRegistration;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
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
        if (\Auth::user()->access_level == User::$SUPER_ADMIN)
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
        return view('admin.live', ['posts' => $posts]);
    }

    public function saveLivePost(Request $request) {
        $post = new LivePost();
        $post->fill($request->all());
        $now = new Carbon();
        $user = \Auth::user();
        $post->author()->associate($user);
        $post->published_at = $now->getTimestamp();

        if ($request->has('RTL'))
            $post->RTL = true;
        else
            $post->RTL = false;
        $this->storeMedia($request, $post);
        $post->save();
        return redirect()->route('app::admin.live');
    }

    public function storeMedia(Request $request, LivePost $post) {
        $now = $now = new Carbon();
        if ($request->hasFile('picture')){
            $fileName = 'AUT-ACM-ICPC' . $now->getTimestamp() . '.' . $request->picture->getClientOriginalExtension();
            $request->picture->move('storage/live', $fileName);
            $post->picture = 'storage/live/' . $fileName;
            $post->save();
        }
    }

    public function newLivePost () {
        return view('live.new');
    }

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
        if ($request->has('RTL'))
            $LivePost->RTL = true;
        else
            $LivePost->RTL = false;

        $LivePost->save();
        return redirect()->route('app::admin.live');
    }

    /** List all the registrations
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showRegistrations () {
        $data = OnsiteRegistration::all()->sortBy('status.status');
        return view('admin.registrations', ['data' => $data]);
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
}
