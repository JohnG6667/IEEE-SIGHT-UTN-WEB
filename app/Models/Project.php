<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug'];

    public function getRouteKeyName()
    {
        return 'slug';
    }


    //Relación uno a muchos inversa

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    //Relación uno a muchos

    public function suggestions()
    {
        return $this->hasMany(Suggestion::class);
    }

    public function objetives()
    {
        return $this->hasMany(Objetive::class);
    }

    public function testimonials()
    {
        return $this->hasMany(Testimonial::class);
    }


    //Relación muchos a muchos

    public function ods()
    {
        return $this->belongsToMany(ODS::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function knowledge()
    {
        return $this->belongsToMany(Knowledge::class);
    }

    //Relación uno a uno polimorfica

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
