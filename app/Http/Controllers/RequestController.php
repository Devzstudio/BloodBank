<?php

namespace App\Http\Controllers;

use Request;
use App\BloodRequest;
use MercurySeries\Flashy\Flashy;
use App\Http\Controllers\Controller;

class RequestController extends Controller
{
    public function requestForm()
    {
        return view('request-blood');	
    }
    public function storeRequest()
    {
    	$input = Request::all();
    	BloodRequest::create($input);
    	Flashy::message('Your request has been added.','');
        return view('request-blood');	
    }
    public function showRequests()
    {
       $input = Request::all();
       $conditions = [];
       
        if(isset($input['group']))        $conditions = array_add($conditions, 'group', $input['group']);
        if(isset($input['city']))         $conditions = array_add($conditions, 'city', $input['city']);
        if(isset($input['state']))        $conditions = array_add($conditions, 'state', $input['state']);
        if(isset($input['district']))        $conditions = array_add($conditions, 'district', $input['district']);


	    	$requests = BloodRequest::where($conditions)->where('when', '>=', time() - (24*60*60))->get();;
         return view('who-needs-blood',compact('requests'));	
    }
    public function requestDetails($id)
    {
    	$request = BloodRequest::findOrFail($id);
        return view('request-details',compact('request'));
    }
}
