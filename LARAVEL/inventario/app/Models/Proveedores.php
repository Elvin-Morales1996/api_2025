<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Proveedores extends Model
{
     //name, email, phone
     use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'phone'
    ];

}
