<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;

    // Define the table name explicitly (optional, but good practice)
    protected $table = 'services';

    // Define the custom primary key name
    protected $primaryKey = 'services_id';

    // Specify the columns that are safe to be mass-assigned
    protected $fillable = [
        'services_name',
        'services_icon',
        'services_description',
    ];

    // Disable timestamps since your table doesn't have 'created_at' and 'updated_at'
    public $timestamps = false;
}