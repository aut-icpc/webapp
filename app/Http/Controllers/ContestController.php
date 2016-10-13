<?php

namespace App\Http\Controllers;

use App\OnlineRegistration;
use App\OnsiteRegistration;
use App\TeamRegistration;
use Illuminate\Http\Request;

use App\Http\Requests;

class ContestController extends Controller
{
    private static $G_SECRET = '6LfEJgkUAAAAADk7s0dcfa8QbC5UeD3h2gWQ9krq';
    public function showContestRegistrationForm(){
        return view('contest.register');
    }

    public function showOnLineRegistrationForm() {
        return view('contest.online_register');
    }

    public function showPreRegistrationPage() {
        return view('contest.pre-register');
    }

    public function saveOnSiteRegistration(Request $request){
        $gRecaptchaResponse = $request->get('g-recaptcha-response');
        $recaptcha = new \ReCaptcha\ReCaptcha(ContestController::$G_SECRET);
        $resp = $recaptcha->verify($gRecaptchaResponse);
        if ($resp->isSuccess()){
            $registration = new OnsiteRegistration($request->all());
            $registration->status = OnsiteRegistration::$PENDING;
            $saved = $registration->save();
            // TODO : add additional variables like email activation and so...
            if ($saved)
                return redirect()->route('app::contest.registered');
            else
                return redirect()->back();
        }
        else {
            return redirect()->back();
        }
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
