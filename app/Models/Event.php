<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

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

    //Relación muchos a muchos

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    //Relación uno a uno polimorfica

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
