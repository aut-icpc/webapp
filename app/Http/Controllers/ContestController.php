<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ContestController extends Controller
{
    public function showContestRegistrationForm(){
        return view('contest.register');
    }
}
