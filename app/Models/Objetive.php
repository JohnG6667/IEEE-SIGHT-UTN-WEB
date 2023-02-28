<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Objetive extends Model
{
    use HasFactory;


    protected $guarded = ['id', 'created_at', 'updated_at'];

    //Relación uno a muchos inversa

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
