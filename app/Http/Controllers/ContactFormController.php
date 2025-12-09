<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use App\Mail\ContactFormMail;

class ContactFormController extends Controller{

    public function contactFormSubmit(Request $request){
        try {
      //  var_dump($request->all());
        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string'
        ]);

        var_dump($validated);
        Mail::to('info@sydneymobtech.com.au')->send(new ContactFormMail($validated));
       // return 'Email sent successfully!';
        return back()->with('success', 'Your message was sent successfully!');

        }catch (\Exception $e){
            Log::error('Email sending failed: ' . $e->getMessage());
            return back()->with('error', 'Failed to send email: ' . $e->getMessage());
        }


    }
}