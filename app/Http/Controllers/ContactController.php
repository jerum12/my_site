<?php

namespace App\Http\Controllers;

use App\Mail\ForMeEmail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    //
    public function index(){
        return view('contact')->with("active","contact");
    }

    public function index2(){
        return view('contactform')->with("active","contact");
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        $my_email = ['name' => $request->name,
                    'subject' => 'From:'. $request->email,
                    'email_sender' => $request->email,
                    'email' => 'jerumpgalang@gmail.com',
                    'message' =>  '' .$request->message];
  
        Contact::create($request->all());

        Mail::to('jerumpgalang@gmail.com')->send(new ForMeEmail($my_email));
  
        return redirect()->back()
                         ->with(['success' => 'Thank you for contacting us. we will contact you shortly.']);
    }

    public function store2(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'subject' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        $my_email = ['name' => $request->name,
                    'subject' => 'From:'. $request->email .$request->subject,
                    'email' => 'jerumpgalang@gmail.com',
                    'message' =>  '' .$request->message];
  
        Contact::create($request->all());

        Contact::create($my_email);
  
        return redirect()->back()
                         ->with(['success' => 'Thank you for contact us. we will contact you shortly.']);
    }
}
