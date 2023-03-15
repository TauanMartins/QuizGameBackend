<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'question',
        'difficulty',
        'rightAnswer',
        'distractionAnswer1',
        'distractionAnswer2',
        'distractionAnswer3',
        'img',
        'theme_fk',
    ];
}
