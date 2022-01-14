<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;
    protected $fillable = [
        'banner_title_1_en',
        'banner_title_2_en',
        'banner_title_3_en',
        'banner_title_1_ar',
        'banner_title_2_ar',
        'banner_title_3_ar',
    ];
}
