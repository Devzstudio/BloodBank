<?php

namespace App\Http\Controllers;
 
use App\BloodCenter;
use App\Http\Flash;
use MercurySeries\Flashy\Flashy;
use Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class BloodCenterController extends Controller
{
    public function __construct()
    {
         $this->middleware('auth', ['except' => [ 'index']]);
    }
    public function index()
    {
       	$centers = BloodCenter::paginate(10);
         return view('blood-center', compact('centers'));
    }
    public function addCenter()
    {
        return view('new-center');
    }
    public function storeCenter()
    {
    	$request = Request::all();
    	BloodCenter::create($request);
    	Flashy::message('Test','');    
       return redirect('center');
    }
}
