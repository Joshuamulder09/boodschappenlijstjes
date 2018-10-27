<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
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
        'name', 'email', 'password', 'role_id', 'is_active',
    ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role()
    {
        return $this->belongsTo('App\Role');
    }

    public function isAdmin()
    {

        if ($this->role->name == 'administrator' && $this->is_active == 1) {
            return true;
        }

        return false;
    }

    public function isGebruiker()
    {

        if ($this->role->name == 'gebruiker' && $this->is_active == 1) {
            return true;
        }

        return false;
    }

    public function products()
    {
        return $this->hasMany('App\Product');
    }

    public function voorraadsProducts()
    {
        return $this->hasMany('App\Voorraad');
    }


}
