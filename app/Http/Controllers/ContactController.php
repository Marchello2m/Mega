<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class ContactController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    protected $contact=[];
    public function saveContact(Request $request)
    {
        $contact = new Contact();

        $contact->nameContact= $request->nameContact;
        $contact->emailContact=$request->emailContact;
        $contact->phoneContact=$request->phoneContact;
        $contact->webContact=$request->webContact;
        $contact->textContact=$request->textContact;
        $contact->created_at=Carbon::now();
        $contact->save();

        return redirect('/')->with('message', 'Your message sent!');

    }
    public function showContact()
    {
        $data = DB::table('contact')
            ->get();
        return view('faq',compact('data'));
    }
}
