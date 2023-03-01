<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'created_at', 'updated_at'];

    //Relación uno a muchos inversa

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    //Relación uno a uno polimorfica

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
