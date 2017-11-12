<?php

namespace App\Http\Controllers;

use App\FAQ;
use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index() {
        return view('pages.index');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function about() {
        return view('pages.about');
    }
  /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showGalleryTeams() {
        return view('pages.galleryTeams');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function rules() {
        return view('pages.rules');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function faq() {
        $faqs = FAQ::$data;
        return view('pages.faq', ['faqs' => $faqs]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function contact() {
        return view('pages.contact');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function useful_links () {
        return view('pages.useful_links');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showHistoryOfContests () {
        return view('pages.history');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showLocalRules() {
        return view('pages.local_rules');
    }

    public function showPastContests() {
        return view('pages.past_contests');
    }
}
