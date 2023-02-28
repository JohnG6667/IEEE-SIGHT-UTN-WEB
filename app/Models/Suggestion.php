<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suggestion extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    //Relación uno a muchos inversa

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function project()
    {
        return $this->belongsTo(Project::class);
    }


    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
