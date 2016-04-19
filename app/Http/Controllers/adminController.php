<?php

namespace App\Http\Controllers;

use MercurySeries\Flashy\Flashy;
use Illuminate\Support\Facades\Auth;
use Request;
use App\User;
use App\Support;
use App\BloodCenter;
use App\Camp;
use Illuminate\Support\Facades\Redirect;

use App\Http\Controllers\Controller;

class adminController extends Controller
{
	public function __construct()
	{
	        $this->middleware('auth');	
	 		if(Auth::user()->is_admin != 1)  Redirect::to('home')->send();

	}

	 public function index()
	 {

	 	$users = User::paginate(10);
	 	return view('admin.index', compact('users'));	 	
	 }
	 public function editUser($id)
	 {
	 	$user = User::findOrFail($id);
	 	return view('admin.edit-user', compact('user'));
	 }

	 public function updateUser($id)
	 {
	 	$user = User::findOrFail($id);
	 	$request = Request::all();
  	 	$user->update($request);
	 	Flashy::message('User updated','');

  	 	return redirect('admin/');	
	 }

	 public function makeAdmin($id)
	 {
	 	$user = User::findOrFail($id);
	 	$data['is_admin'] = 1;
	 	$user->update($data);

	 	Flashy::message('Added admin privilage','');
	 	return redirect('admin');
	 	
	 }


	  public function removeAdmin($id)
	 {
	 	$user = User::findOrFail($id);
	 	$data['is_admin'] = 0;
	 	$user->update($data);

	 	Flashy::message('Removed admin privilage','');
	 	return redirect('admin');
	 	
	 }

	 public function deleteUser($id)
	 {
	 	$user = User::findOrFail($id);
	 	$user->delete();

	 	Flashy::message('User removed','');
	 	return redirect('admin');
	 	
	 }


	 public function camps()
	 {
	 	$camps = Camp::paginate(10);
	            return view('admin.camps', compact('camps'));  
  	 }
  	 public function editCamp($id)
  	 {
  	 	$camp = Camp::findOrFail($id);

  	 	return view('admin.edit-camp', compact('camp'));  	 	
  	 }
  	 public function updateCamp($id)
  	 {
  	 	$camp = Camp::findOrFail($id);
  	 	$request = Request::all();
  	 	$camp->update($request);
	 	Flashy::message('Camp updated','');

  	 	return redirect('admin/camps');	
  	 }

  	  public function deleteCamp($id)
	 {
	 	$camp = Camp::findOrFail($id);
	 	$camp->delete();

	 	Flashy::message('Camp removed','');
	 	return redirect('admin/camps');
	 	
	 }

	 public function bloodCentres()
	 {
	 	$centers = BloodCenter::paginate(10);
        return view('admin.centers', compact('centers'));
	 }

	  public function deleteCenter($id)
	 {
	 	$center = BloodCenter::findOrFail($id);
	 	$center->delete();

	 	Flashy::message('Center removed','');
	 	return redirect('admin/center');
	 }

	 public function editCenter($id)
	 {
 		$center = BloodCenter::findOrFail($id);
 		 return view('admin.edit-center', compact('center'));
	 }

	 public function updateCenter($id)
	 {
	 	$request = Request::all();
	 	$center = BloodCenter::findOrFail($id);
	 	$center->update($request);

	 	Flashy::message('Center updated','');
	 	return redirect('admin/center');
	 }



	  public function deleteSupport($id)
	 {
	 	$support = Support::findOrFail($id);
	 	$support->delete();

	 	Flashy::message('Message removed','');
	 	return redirect('admin/support');
	 	
	 }

	 public function support()
	 {
	 	$supports = Support::paginate(10);
	 	return view('admin.support', compact('supports'));
	 }

	 public function viewSupport($id)
	 {
	 		$support = Support::findOrFail($id);
			return view('admin.support-message',compact('support'));
	 }
	 public function reply()
	 {
	 	Flashy::message('Message sent','');
	 	return redirect('admin/support');
	 }
}
