<?php

namespace App\Http\Controllers;

use App\Events\CustomEmailSubmission;
use App\Events\GroupEmailSubmission;
use App\OnlineRegistration;
use App\OnsiteRegistration;
use Illuminate\Http\Request;

use App\Http\Requests;

class MailController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showCustomMailForm()
    {
        return view('admin.mail.custom', ['to' => '', 'cc' => '', 'bcc' => '']);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showGroupMailForm() {
        return view('admin.mail.group', ['to' => '', 'cc' => '', 'bcc' => '']);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function sendCustomEmail(Request $request){
        $raw_to = $request->get('to','');
        $raw_to = explode(';', $raw_to);
        $to = [['email' => 'ceit.ssc@aut.ac.ir']];
        foreach ($raw_to as $email){
            if ($email != '')
                array_push($to, ['email' => $email]);
        }
        $raw_cc = $request->get('cc','');
        $raw_cc = explode(';', $raw_cc);
        $cc = [['email' => 'ceit.ssc@aut.ac.ir']];
        foreach ($raw_cc as $email){
            if ($email != '')
                array_push($cc, ['email' => $email]);
        }
        $raw_bcc = $request->get('bcc','');
        $raw_bcc = explode(';', $raw_bcc);
        $bcc = [['email' => 'haghighati.amir@gmail.com']];
        foreach ($raw_bcc as $email){
            if ($email != '')
                array_push($bcc, ['email' => $email]);
        }
        $title = $request->get('title', '');
        $message = $request->get('body', '');
        event(new CustomEmailSubmission($to, $cc, $bcc, $title, $message));
        return redirect()->route('app::admin');
    }

    public function sendGroupEmail(Request $request)
    {
        $online_documents = collect([]);
        $onsite_documents = collect([]);
        $constraints = [
            'bcc_rejected',
            'bcc_approved',
            'bcc_pending',
            'bcc_reserved',
            'bcc_paid',
        ];
        foreach ($constraints as $constraint){
            if ($request->has($constraint)){
                switch ($constraint){
                    case 'bcc_rejected':
                        $online_documents->push(OnlineRegistration::where('status.status', 'Rejected')->get());
                        $onsite_documents->push(OnsiteRegistration::where('status.status', 'Rejected')->get());
                        break;
                    case 'bcc_approved':
                        $online_documents = (OnlineRegistration::where('status.status', 'Approved')->get());
                        $onsite_documents = (OnsiteRegistration::where('status.status', 'Approved')->get());
                        break;
                    case 'bcc_pending':
                        $online_documents->push(OnlineRegistration::where('status.status', 'Pending')->get());
                        $onsite_documents->push(OnsiteRegistration::where('status.status', 'Pending')->get());
                        break;
                    case 'bcc_reserved':
                        $online_documents->push(OnlineRegistration::where('status.status', 'Reserved')->get());
                        $onsite_documents->push(OnsiteRegistration::where('status.status', 'Reserved')->get());
                        break;
                    case 'bcc_paid':
                        $online_documents->push(OnlineRegistration::where('status.status', 'Paid')->get());
                        $onsite_documents->push(OnsiteRegistration::where('status.status', 'Paid')->get());
                        break;
                }
            }
        }
        if ($request->has('bcc_iranian_only')){
            $online_documents = $online_documents->where('site', 'Iran');
            $onsite_documents = $onsite_documents->where('site', 'Iran');
        }
        if ($request->has('bcc_main')){
            $this->sendMailToCollection($onsite_documents, $request->get('title'), $request->get('body'));
        }
        if ($request->has('bcc_online')){
            $this->sendMailToCollection($online_documents, $request->get('title'), $request->get('body'));
        }
        if ($request->has('bcc_online_old')){
            $collection = OnlineRegistration::where('team_name', 'exists', false)->get();
            $this->sendMailToCollection($collection, $request->get('title'), $request->get('body'));
        }
        return redirect()->route('app::admin');
    }


    public function sendMailToCollection($collection, $title, $body){
        $to = [['email' => 'ceit.ssc@aut.ac.ir']];
        $cc = [['email' => 'icpc@aut.ac.ir']];
        $bcc = [['email' => 'haghighati.amir@gmail.com']];
        foreach ($collection as $item){
            foreach ($item as $team){
                foreach ($team->members as $member){
                    if ($member['email'] != '')
                        array_push($bcc, ['email' => $member['email'], 'name' => $member['first_name'] . ' ' . $member['last_name']]);
                }
            }
        }
        event(new GroupEmailSubmission($to, $cc, $bcc, $title, $body));
    }
}
