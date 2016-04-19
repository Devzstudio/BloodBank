<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
  /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'sender','phone', 'receiver', 'subject', 'message'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
    ];
}
