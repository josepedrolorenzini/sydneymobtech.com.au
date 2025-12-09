<?php

use App\Http\Controllers\ContactFormController;
<<<<<<< HEAD
use App\Http\Controllers\ProfileController;
use App\Models\Service;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::get("/home" , function(){
//    $bannerImage = public_path('img/Website-Banner-Photo-scaled.jpg');
    $bannerImage = asset('./img/Website-Banner-Photo-scaled.jpg');
    $services = new Service() ;
    $allServices =  $services->all() ;
    return Inertia::render('Home' , compact('bannerImage' , 'allServices' ));
})->name("home");


Route::get('/about', function(){
    
    $services = new Service() ;
    $allServices = $services->all() ;

    $bannerImage = asset('./img/Website-Banner-Photo-scaled.jpg');

    return Inertia::render('AboutUs' , [
        'bannerImage' => $bannerImage , 
        'allServices' => $allServices,
    ]);
})->name("about");


// contact form routes
Route::get("/contact" ,[ ContactFormController::class , 'index'])->name("contact.index");
Route::post("/contact" ,[ ContactFormController::class , 'contactFormSubmit'] )->name('contact.submitted') ;

// Route::get("/contact" , function(){
//     return Inertia::render('ContactUs');
// })->name("contact");

// contact form routes


require __DIR__.'/auth.php';
=======
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
>>>>>>> master
