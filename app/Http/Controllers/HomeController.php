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
        $files = $request->allFiles();
//        dd($files);
        if ($request->hasFile('picture')){
            $pic = $request->file('picture');
            $pic->storeAs('storage/', 'AUT-ACM-ICPC' . $now->getTimestamp() . $pic->getClientOriginalExtension());
            $post->picture = 'storage/AUT-ACM-ICPC' . $now->getTimestamp() . $pic->getClientOriginalExtension();
        }
        // TODO: upload the photo and save it somewhere!

        $post->save();
        return redirect()->route('app::admin.live');
    }

    public function newLivePost () {
        return view('live.new');
    }

    public function showPostEditForm(LivePost $post) {
        return view('live.edit', ['post' => $post]);
    }

    /** Edit LiveBlog Post item
     *
     * @param Request $request
     * @param LivePost $post
     * @return \Illuminate\Http\RedirectResponse
     */
    public function editPost (Request $request, LivePost $post) {
        $post->fill($request->all());
        $post->save();
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
}
