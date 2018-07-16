<?php

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


Route::post('adminlogin','AdminLoginController@Adminlogin');
Route::get('/', 'BuildingController@index')->name('index'); /*display building*/
Route::get('building/{id}', 'BuildingController@show')->name('building'); /* display offices */

/*Route::get('office/{id}','OfficeController@show')->name('officeMenu');*/

  



  Route::get('buildings/create', 'BuildingController@create')->name('createbform');
  Route::post('building/create/store', 'BuildingController@saveBuilding')->name('createbuilding');

  Route::get('building/{id}/edit', 'BuildingController@edit');
  Route::post('building/{id}/edit', 'BuildingController@update')->name('editbuilding');

  Route::get('building/{id}/delete', 'BuildingController@destroy');

  Route::get('building/{id}/offices/create', 'OfficeController@create')->name('createofficeform');
  Route::post('building/{id}/offices/create/store', 'OfficeController@store')->name('createoffice');

	Route::get('building/{id}/offices/{office_id}/edit', 'OfficeController@edit')->name('editofficeform');
	Route::post('building/{id}/offices/{office_id}/edit', 'OfficeController@update')->name('editoffice');


  Route::get('offices/{id}/delete', 'OfficeController@destroy')->name('deleteoffice');

