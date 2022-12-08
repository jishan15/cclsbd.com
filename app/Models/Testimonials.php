<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonials extends Model
{
    protected $fillable = [
        'name',
        'designation',
        'sub_title',
        'image',
    ];
    use HasFactory;
}
