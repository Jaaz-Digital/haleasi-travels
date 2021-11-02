<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Carbon\Carbon;
use Agent;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function thankYou() 
    {
        return view('thank-you');
    }

    public function contact(Request $request) {
        $this->validate($request, 
            [
                'name' => 'required',
                'email' => 'required|email',
                'phone' => 'required|numeric|digits_between:10,15',
                'duration' => 'required',
                'destination' => 'required',
                'description' => 'required'
            ],
            [
                'phone.digits_between' => 'Please enter a valid moblie number'
            ]
        );

        // Browser Details Ref: https://www.nicesnippets.com/blog/laravel-get-browser-info-example
        $browser = Agent::browser();
        $version = Agent::version($browser);
        $platform = Agent::platform();
        $contactDetails = new Contact;

        $contactDetails->name = $request->name;
        $contactDetails->email = $request->email;
        $contactDetails->phone = $request->phone;
        $contactDetails->duration = $request->duration;
        $contactDetails->destination = $request->destination;
        $contactDetails->description = $request->description;
        $contactDetails->created_at = Carbon::now('Asia/Kolkata');
        $contactDetails->utm_source = $request->USOURCE;
        $contactDetails->utm_medium = $request->UMEDIUM;
        $contactDetails->utm_campaign = $request->UCAMPAIGN;
        $contactDetails->utm_content = $request->UCONTENT;
        $contactDetails->utm_term = $request->UTERM;
        $contactDetails->utm_initial_referrer = $request->IREFERRER;
        $contactDetails->utm_last_referrer = $request->LREFERRER;
        $contactDetails->utm_landing_page = $request->ILANDPAGE;
        $contactDetails->utm_visite = $request->VISITS;
        $contactDetails->browsername = $browser;
        $contactDetails->browserversion = $version;
        $contactDetails->browserplatform = $platform;
        $contactDetails->ip_address = $request->ip();

        $contactDetails->save();
        
        // Contact us mail
        // $emailData = [
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'phone' => $request->phone,
        //     'subject' => $request->subject,
        //     'description' => $request->message,
        //     'isAdminMail' => false,
        //     'mailmessage' => 'We have received your request, and one of our representative shall get back to you.',
        //     'copyrightname' => 'Jaaz Digital',
        // ];

        // $adminEmailData = [
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'subject' => $request->subject,
        //     'phone' => $request->phone,
        //     'description' => $request->message,
        //     'utm_source' => $request->USOURCE,
        //     'utm_medium' => $request->UMEDIUM,
        //     'utm_campaign' => $request->UCAMPAIGN,
        //     'utm_content' => $request->UCONTENT,
        //     'utm_term' => $request->UTERM,
        //     'utm_initial_referrer' => $request->IREFERRER,
        //     'utm_last_referrer' => $request->LREFERRER,
        //     'utm_landing_page' => $request->ILANDPAGE,
        //     'utm_visite' => $request->VISITS,
        //     'ip_address' => $request->ip(),
        //     'isAdminMail' => true,
        //     'copyrightname' => 'Jaaz Digital',
        //     'mailmessage' => 'We have received your request, and one of our representative shall get back to you.'
        // ];

        // Mail::send('templates.email.contact-email', $emailData, function($message) use($request) {
        //     $message->to($request['email'])
        //         ->subject('We have received your request | A1 Unique Construction');
        //     $message->from(config('mail.from.address'), config('mail.from.name'));
        // });

        // Mail::send('templates.email.contact-email', $adminEmailData, function($message) use($request) {
        //     $message->to(config('mail.from.cc_mail'))
        //         ->subject('You have received an enquiry | A1 Unique Construction');
        //     $message->from(config('mail.from.address'), config('mail.from.name'));
        // });
        
        return redirect()->route('thankYou');
    }
}
