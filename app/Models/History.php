<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'id',
        'question',
        'difficulty',
        'rightAnswer',
        'distractionAnswer1',
        'distractionAnswer2',
        'distractionAnswer3',
        'img',
        'hint',
        'hintIMG',
    ];
}
