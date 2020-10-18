<?php

namespace App\Models\Admin;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallary extends Model
{
    use HasFactory;

    protected $table ='gallaries' ;

    public function image()
    {
        return $this->morphMany('App\Models\Admin\Image' ,'imageable');
    }
    public function user()
    {
        return $this->belongsTo(User::class , 'created_by');

    }
}
