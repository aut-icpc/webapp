<?php

namespace App\Http\Controllers;

use App\LivePost;
use App\OnlineRegistration;
use App\OnsiteRegistration;
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
        return view('admin.home');
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

        // TODO: upload the photo and save it somewhere!

        $post->save();
        return redirect()->route('app::admin.live');
    }

    public function newLivePost () {
        return view('live.new');
    }

    public function showPostEditForm(LivePost $post) {

    }

    public function editPost (Request $request, LivePost $post) {
        $post->fill($request->all());
        $post->save();
        return redirect()->route('app::admin.live');
    }

    public function showRegistrations () {
        return view('admin.registrations');
    }
}
