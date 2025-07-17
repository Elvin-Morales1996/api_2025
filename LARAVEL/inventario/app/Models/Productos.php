<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Testing\Fluent\Concerns\Has;

class Productos extends Model
{
    //
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'unit_price',
        'stock'
    ];
}
