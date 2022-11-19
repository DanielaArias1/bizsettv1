<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notificacione extends Model
{
    use HasFactory;
    public function tiponotificacione(){
        return $this->belongsTo('App\Models\Tiponotificacione');
    }

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
