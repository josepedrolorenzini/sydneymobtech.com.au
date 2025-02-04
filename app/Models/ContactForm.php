<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Illuminate\Http\Request;

class ContactForm extends Model
{
    //
    use HasFactory ; 
    protected $fillable = [
        'name',
        'email',
        'phone',
        'message',
    ] ;


}
