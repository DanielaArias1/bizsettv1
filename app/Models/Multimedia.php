<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Multimedia extends Model
{
    // use HasFactory;
    // public function publicacion(){
    //     return $this->belongsTo('App\Models\Publicaione');
    // }
    protected $guarded = [];

    public function multimediaable(){
        return $this->morphTo();
    }
}
