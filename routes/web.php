<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();




Route::get('/', function () {
    return view('/auth/login');
})->middleware('guest');





//admin : 

Route::group(['middleware' => ['can:access-admin']], function () {
    // Routes available to admin user only.


Route::get('/admin','Admin\AdminController@index');

Route::get('notifications','Admin\UserNotificationsController@show');

//admin_owners :

Route::get('/admin/owners', 'Admin\OwnersController@index');

Route::get('/admin/owners/create', 'Admin\OwnersController@create');

Route::post('/admin/owners/', 'Admin\OwnersController@store');

Route::get('admin/owners/{owner}/profile','Admin\OwnersController@show_profile');

Route::get('admin/owners/{owner}/profile/deactivate','Admin\OwnersController@deactivate_owner');




//admin_stores :

Route::get('/admin/stores/', 'Admin\StoresController@index');

Route::get('/admin/stores/{store}', 'Admin\StoresController@show_info');


});








//owner :


Route::group(['middleware' => ['can:access-owner']], function () {
    
    // Routes available to client user only.


Route::get('/owner','Owner\OwnerController@index');

Route::get('/owner/profile','Owner\OwnerController@show');

Route::get('/owner/profile/edit','Owner\OwnerController@edit');

Route::put('/owner/profile','Owner\OwnerController@update');

//owner_stores :


Route::get('/owner/stores/', 'Owner\StoresController@index');

Route::post('/owner/stores/', 'Owner\StoresController@store_info');



Route::get('/owner/stores/create', 'Owner\StoresController@create_info');

Route::get('/owner/stores/{store}', 'Owner\StoresController@show_info');

Route::post('/owner/stores/{store}', 'Owner\StoresController@store_item');

Route::get('/owner/stores/{store}/edit', 'Owner\StoresController@edit_info');

Route::put('/owner/stores/{store}', 'Owner\StoresController@update_info');

Route::put('/owner/stores/{store}/{item}', 'Owner\StoresController@update_items')->name("update-item");




});








