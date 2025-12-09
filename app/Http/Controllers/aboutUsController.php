<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;

class aboutUsController extends Controller
{
    //

    public function showAbout(){

        $about = About::all() ;

        return view('about' , [
            'quienesSomos' => "quienes somos",
            "testAbout"     => $about
        ]);
    }


    public function insertDataAbout(){
     #   INSERT INTO `about_us` (`id`, `name`, `description`, `date_added`) VALUES (NULL, 'sydney mob tech', 'sydney mobile mechanic', current_timestamp());
    }
}
