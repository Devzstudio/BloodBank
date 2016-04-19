<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'gender', 'address' ,'city', 'district','state' , 'age' ,'weight' , 'phone','group' , 'social' ,'whatsapp' , 'is_donor', 'is_admin' ,'last_donated'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token' , 'is_admin' , 'is_donor'
    ];
}
