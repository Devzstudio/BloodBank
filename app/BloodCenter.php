<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BloodCenter extends Model
{

	public $timestamps = false;
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'name' , 'phone','landmark' , 'city' ,'state' , 'district'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
    ];
}
