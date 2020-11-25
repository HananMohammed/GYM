<?php

namespace App\Models\Admin;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class ,'created_by') ;
    }

    public function image()
    {
        return $this->MorphOne('App\Models\Admin\Image' , 'imageable');
    }
    public function category()
    {
        return $this->belongsTo(ClassCategory::class ,'category') ;
    }
}
