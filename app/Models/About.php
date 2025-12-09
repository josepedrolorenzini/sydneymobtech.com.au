<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Illuminate\Http\Request;

class About extends Model
{
    //
    use HasFactory ;

    protected $table = 'about_us'; // 👈 Add this line
    protected $fillable = [
        'id',
        'name',
        'description',
        'date_added',
    ] ;


}