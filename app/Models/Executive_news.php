<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Executive_news extends Model
{
    protected $fillable = [
        'date',
        'month',
        'title',
        'sub_title',
    ];
    use HasFactory;
}
