<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;

    protected $fillable = [
        "title_en" ,
        "title_ar" ,
        "image",
    ];

    public function image()
    {
        return $this->morphOne('App\Models\Admin\Image', 'imageable');
    }

}
