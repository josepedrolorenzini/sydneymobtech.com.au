<?php

use App\Http\Controllers\ContactFormController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use \App\Http\Controllers\aboutUsController ;
use \App\Http\Controllers\RepairsController ;
use \App\Http\Controllers\ServicesController;

Route::get('/', function () {
    return view('home');
})->name("home");

Route::get('/about', [ aboutUsController::class , "showAbout" ])->name("about");
Route::get('/services', [ServicesController::class, 'index'])->name('services');
// #Route::get('/services', function () { return view('services'); })->name("services");

Route::get("/repairs" , [RepairsController::class , "showIndex"])->name("repairs");

Route::get('/contact', function () {
   // return json_encode(['laravel'=> "hell world"]);
   return view('contact' , [
    "message" => "Contact Form"
   ]);
})->name("contact");

Route::post("/contact" ,  [ContactFormController::class , 'contactFormSubmit'])->name("contact.send") ;

Route::get("/terms-and-conditions" , function(){
    return view("terms-and-conditions") ;
})->name("terms-and-conditions");
 
 
 Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    echo  "Cache cleared!";
    return redirect()->route("home") ;
});


 Route::get("/send-email" ,function (){
     $data = [
         'name' => 'Tester jose route send email',
         'email' => 'tester@example.com',
         'subject' => 'Test Subject',
         'message' => 'This is a test message.'
     ];

     Mail::to('info@sydneymobtech.com.au')->send(new ContactFormMail($data));

     return 'Test email sent!';
 });