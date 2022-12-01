<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Newsroom extends Model
{
    
    protected $fillable = [
        'title',
        'sub_title',
        'date',
        'month',
        'image',
    ];
    use HasFactory;
}
