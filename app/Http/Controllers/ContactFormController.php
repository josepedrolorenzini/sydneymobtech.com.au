<?php

namespace App\Http\Controllers;

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
