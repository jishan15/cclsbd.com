<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timeline extends Model
{
    protected $fillable = [
        'year',
        'date',
        'title',
        'sub_title',
    ];
    use HasFactory;
}
