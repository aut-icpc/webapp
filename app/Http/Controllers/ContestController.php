<?php

namespace App\Http\Controllers;

use App\OnlineRegistration;
use App\OnsiteRegistration;
use App\TeamRegistration;
use Illuminate\Http\Request;

use App\Http\Requests;

class ContestController extends Controller
{
    public function showContestRegistrationForm(){
        return view('contest.register');
    }

    public function showOnLineRegistrationForm() {
        return view('contest.online_register');
    }

    public function saveOnSiteRegistration(Request $request){
        $registration = new OnsiteRegistration($request->all());
        $registration->status = OnsiteRegistration::$PENDING;
        $saved = $registration->save();
        // TODO : add additional variables like email activation and so...
        if ($saved)
            return redirect()->route('app::contest.registered');
        else
            return redirect()->back();
    }

    public function showContestRegisteredTeams() {
        $data = OnsiteRegistration::all()->sortBy('status.status');
        return view('contest.registered', ['data' => $data]);
    }

    public function saveOnlineContestSubmission(Request $request) {
        $registration = new OnlineRegistration();
        $registration->fill($request->all());
        $saved = $registration->save();
        // TODO : add additional variables like email activation and so...
        if ($saved)
            return view();
        else
            redirect()->back();
    }
}
