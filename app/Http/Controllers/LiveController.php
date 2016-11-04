<?php

namespace App\Http\Controllers;
use App\LivePost;
use Illuminate\Http\Request;
use App\Http\Requests;

class LiveController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showFeed(){
        $newsGroup = LivePost::all()->sortBy('created_at', SORT_REGULAR, true);
        return view('live.feed', ['newsGroup' => $newsGroup, 'preloader_off' => true]);
    }
}
