<?php

namespace App\Http\Controllers;

use App\APLRegistration;
use App\Events\APLRegistered;
use App\Events\OnlineRegistered;
use App\Events\OnSiteRegistered;
use App\OnlineRegistration;
use App\OnsiteRegistration;
use App\TeamRegistration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
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
            $registration->register_is_ok = false;
            $saved = $registration->save();
            // TODO : add additional variables like email activation and so...
            if ($saved) {
                event(new OnSiteRegistered($registration));
                return redirect()->route('app::contest.registered');
            }
            else
                return redirect()->back();
        }
        else {
            return redirect()->back();
        }
    }

    public function showContestRegisteredTeams() {
        $data = OnsiteRegistration::all()->sortBy('created_at');
        LOG::info(OnsiteRegistration::all()->toArray()[0]['team_name']) ; 
        return view('contest.registered', ['data' => $data]);
    }

    public function showOnlineContestRegisteredTeams()
    {
        $data = OnlineRegistration::all()->sortBy('created_at');
        return view('contest.online_registered', ['data' => $data]);
    }

    public function saveOnlineContestSubmission(Request $request) {
        $gRecaptchaResponse = $request->get('g-recaptcha-response');
        $recaptcha = new \ReCaptcha\ReCaptcha(ContestController::$G_SECRET);
        $resp = $recaptcha->verify($gRecaptchaResponse);
        if ($resp->isSuccess()){
            $registration = new OnlineRegistration($request->all());
            $registration->status = OnsiteRegistration::$PENDING;
            $registration->register_is_ok = false;
            $saved = $registration->save();
            // TODO : add additional variables like email activation and so...
            if ($saved) {
                event(new OnlineRegistered($registration));
                return redirect()->route('app::online_contest.registered');
            }
            else
                return redirect()->back();
        }
        else {
            return redirect()->back();
        }
    }

    public function showAPLRegistrationForm(){
        return view('apl.register');
    }

    public function APLIndex(){
        return redirect()->route('app::apl.register');
    }

    public function saveAPLRegistration(Request $request){
        $gRecaptchaResponse = $request->get('g-recaptcha-response');
        $recaptcha = new \ReCaptcha\ReCaptcha(ContestController::$G_SECRET);
        $resp = $recaptcha->verify($gRecaptchaResponse);
        if ($resp->isSuccess()){
            $registration = new APLRegistration($request->all());
            $registration->status = OnsiteRegistration::$PENDING;
            $registration->register_is_ok = false;
            $saved = $registration->save();
            // TODO : add additional variables like email activation and so...
            if ($saved) {
                event(new APLRegistered($registration));
                return redirect()->route('app::apl.registered');
            }
            else
                return redirect()->back();
        }
        else {
            return redirect()->back();
        }
    }

    public function showAPLRegisteredPersons(){
        $data = APLRegistration::all()->sortBy('created_at');
        return view('apl.done', ['data' => $data]);
    }
}
