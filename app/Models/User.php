<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function user(){
        return $this->hasOne('App\Models\User');
    }

    public function notificaciones(){
        return $this->hasMany('App\Models\Notificacione');
    }

    public function chat(){
        return $this->hasMany('App\Models\Chat');
    }

    public function buzon(){
        return $this->hasMany('App\Models\Buzon');
    }

    public function emprendimiento(){
        return $this->hasOne('App\Models\Buzon');
    }

    public function comentario(){
        return $this->hasMany('App\Models\Comentario');
    }

    public function reaccion(){
        return $this->hasMany('App\Models\Reaccione');
    }

    public function tipodocumento(){
        return $this->belongsTo('App\Models\Tipodocumento');
    }

    public function ciudade(){
        return $this->belongsTo('App\Models\Ciudade');
    }

    public function tipopersona(){
        return $this->belongsTo('App\Models\Tipopersona');
    }

    public function genero(){
        return $this->belongsTo('App\Models\Genero');
    }

    public function inversionista(){
        return $this->hasMany('App\Models\Inversionista');
    }

    public function empleo(){
        return $this->hasMany('App\Models\Empleo');
    }

    public function follower(){
        return $this->hasMany('App\Models\Follower');
    }


    public function setPasswordAttribute($password){
        $this->attributes['password']= bcrypt($password);
    }

}
