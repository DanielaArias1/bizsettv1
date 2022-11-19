<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inversionista extends Model
{
    protected $guarded = [];

    use HasFactory;
    public function emprendimiento(){
        return $this->belongsTo('App\Models\Emprendimiento');
    }

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
