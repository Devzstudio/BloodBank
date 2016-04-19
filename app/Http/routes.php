<?php


Route::get('api/donors', 'apiController@donors');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/
 
Route::group(['middleware' => 'web'], function () {
    Route::auth();
	Route::get('/', 'HomeController@home');
    Route::get('/home', 'HomeController@index');
	Route::get('api', 'HomeController@api');
    Route::get('/settings', 'HomeController@settings');
    Route::post('/settings', 'HomeController@updateUser');
    Route::get('donor/{id}', 'HomeController@donorProfile');
	Route::get('camp', 'HomeController@camp');
	Route::get('camp/new', 'HomeController@newCamp');
	Route::post('camp/new', 'HomeController@storeCamp');

	Route::get('center', 'BloodCenterController@index');
	Route::get('center/new', 'BloodCenterController@addCenter');
	Route::post('center/new', 'BloodCenterController@storeCenter');

	Route::get('donors', 'HomeController@donors');

	Route::get('messages/{id}', 'HomeController@message');
	Route::get('change-password', 'HomeController@changePass');
	Route::post('change-password', 'HomeController@updatePass');

	Route::get('request-blood', 'RequestController@requestForm');
Route::post('request-blood', 'RequestController@storeRequest');
Route::get('who-needs-blood', 'RequestController@showRequests');
   Route::get('request-details/{id}', 'RequestController@requestDetails');


Route::get('support', 'HomeController@support'); 
Route::post('support', 'HomeController@storeSupport');
Route::post('message', 'HomeController@donorMessage');


Route::post('message/reply', 'HomeController@reply');



Route::get('admin', 'adminController@index');

Route::get('admin/user/edit/{id}', 'adminController@editUser');
Route::post('admin/user/edit/{id}', 'adminController@updateUser');

Route::get('admin/support', 'adminController@support');
Route::get('admin/camps', 'adminController@camps');
Route::get('admin/camp/edit/{id}', 'adminController@editCamp');
Route::post('admin/camp/edit/{id}', 'adminController@updateCamp');
Route::get('admin/delete/camp/{id}', 'adminController@deleteCamp');

Route::get('admin/center', 'adminController@bloodCentres');
Route::get('admin/center/edit/{id}', 'adminController@editCenter');
Route::post('admin/center/edit/{id}', 'adminController@updateCenter');
Route::get('admin/delete/center/{id}', 'adminController@deleteCenter');


Route::post('admin/reply', 'adminController@reply');


Route::get('admin/make/admin/{id}', 'adminController@makeAdmin');
Route::get('admin/remove/admin/{id}', 'adminController@removeAdmin');
Route::get('admin/delete/user/{id}', 'adminController@deleteUser');
Route::get('admin/delete/support/{id}', 'adminController@deleteSupport');
Route::get('admin/view/support/{id}', 'adminController@viewSupport');

Route::get('terms', 'HomeController@terms'); 


});




 