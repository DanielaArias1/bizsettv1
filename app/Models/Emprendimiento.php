<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emprendimiento extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function inversionista(){
        return $this->hasMany('App\Models\Inversionista');
    }

    public function empleo(){
        return $this->hasMany('App\Models\Empleo');
    }

    public function publicacion(){
        return $this->hasMany('App\Models\Publicacione');
    }
    
    public function follower(){
        return $this->hasMany('App\Models\Follower');
    }
}
