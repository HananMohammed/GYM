<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = ["image" ,"imageable_type","imageable_id" ];

    public function imageable()
    {
        return $this->morphTo('image', 'imageable_type', 'imageable_id');
    }

}
