<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ODS extends Model
{
    use HasFactory;
    protected $table = 'ods';
    protected $guarded = ['id', 'created_at', 'updated_at'];

    //Relación muchos a muchos

    public function projects()
    {
        return $this->belongsToMany(Tag::class);
    }
}
