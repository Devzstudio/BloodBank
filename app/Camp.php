<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Camp extends Model
{
      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'details', 'city' ,'district','state' , 'start' ,'end' 
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
     ];
}
