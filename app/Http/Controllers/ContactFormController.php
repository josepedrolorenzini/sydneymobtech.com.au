<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Models\ContactForm;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ContactFormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return Inertia::render('ContactUs', 
        [
            'message' => session("message") ,
            'allData' => session("allData")
        ]) ;
    }

    public function contactFormSubmit(Request $request){

        //object model contact form
        $contactForm = new ContactForm();

        // all data
        $allData = $request->all();
        sleep(1);
      //  dd($allData);

        $dataValidate = $request->validate([
            "name"    => "required|string|max:255" , 
            "email"   => "required|email|max:255" , 
            "phone"   => "required|string" , 
            "message" => "required|string|max:200" , 
        ]) ; 
            if($dataValidate){
              //  dd($dataValidate);
                ContactForm::updateOrCreate($dataValidate)  ; 
            }


        return to_route('contact.index')
        ->with('message', 'Form was Submitted')
        ->with('allData', $allData); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ContactForm $contactForm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ContactForm $contactForm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ContactForm $contactForm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ContactForm $contactForm)
    {
        //
    }
}
=======
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
>>>>>>> master
