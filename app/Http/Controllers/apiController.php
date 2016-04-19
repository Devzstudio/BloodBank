<?php

namespace App\Http\Controllers;

use Request;
use App\user;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;


class apiController extends Controller
{
    public function donors()
    {
    	$group = Input::get('group');
    	$city = Input::get('city');
    	$state = Input::get('state');
    	$conditions = [ 'is_donor' => '1' ];

    	if(isset($group)) $conditions = array_add($conditions, 'group', $group);
    	if(isset($city) ) $conditions = array_add($conditions, 'city', $city);
    	if(isset($state) ) $conditions = array_add($conditions, 'state', $state);
    	return User::where($conditions)->get();
    }
}




