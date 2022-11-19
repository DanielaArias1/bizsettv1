<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ciudade extends Model
{
    use HasFactory;

    public function user(){
        return $this->hasMany('App\Models\User');
    }

    public function departamento(){
        return $this->belongsTo('App\Models\Departamento');
    }
}