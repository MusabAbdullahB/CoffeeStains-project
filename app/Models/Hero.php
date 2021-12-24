<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    use HasFactory;
    protected $fillable = [
        'profile_photo_path',
        'slider_title_1',
        'slider_title_2',
        'slider_title_3',
    ];
}
