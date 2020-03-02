<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'last_name', 'email', 'user', 'password', 'type', 'active', 'address', 'colonia', 'ciudad', 'estado', 'telefono', 'telefono_2', 'codigo_postal'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    //Relation with Orders

    public function orders()
    {
        return $this->hasMany('App\Order');

    }
}

