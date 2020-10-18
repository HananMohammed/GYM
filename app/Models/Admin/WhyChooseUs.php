<?php

namespace App\Models\Admin;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WhyChooseUs extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class , 'created_by');
    }

    public function icon()
    {
        return $this->belongsTo(IconFont::class , 'icon');
    }
}
