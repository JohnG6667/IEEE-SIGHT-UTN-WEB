<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'color'];

    public function getRouteKeyName()
    {
        return 'slug';
    }


    //Relación muchos a muchos

    public function projects()
    {
        return $this->belongsToMany(Project::class);
    }

    public function events()
    {
        return $this->belongsToMany(Event::class);
    }
}
