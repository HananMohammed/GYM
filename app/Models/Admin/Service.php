<?php

namespace App\Models\Admin;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class , 'created_by');
    }

    public function image()
    {
        return $this->morphOne('App\Models\Admin\Image' , 'imageable') ;
    }

    public function category()
    {
        return $this->belongsTo(ServicesCategory::class , 'category') ;
    }
}
