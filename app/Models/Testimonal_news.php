<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonal_news extends Model
{

    protected $fillable = [
        'date',
        'month',
        'title',
        'sub_title',
    ];
    use HasFactory;
}
