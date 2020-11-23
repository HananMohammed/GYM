<?php

namespace App\Models\Admin;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ClassCategory extends Model
{
    use HasFactory ,SoftDeletes;

    protected $fillable = ["name_en", "name_ar"];

    public function user()
    {
        return $this->belongsTo(User::class , 'created_by');
    }
}
