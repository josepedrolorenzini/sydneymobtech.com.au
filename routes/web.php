<?php

use App\Http\Controllers\ContactFormController;
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
