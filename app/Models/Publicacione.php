<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publicacione extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function emprendimiento(){
        return $this->belongsTo('App\Models\Emprendimiento');
    }

    // public function multimedia(){
    //     return $this->hasMany('App\Models\Multimedia');
    // }

    public function multimedias(){
        return $this->morphMany('App\Models\Multimedia', 'multimediaable');
    }

    

    

}
