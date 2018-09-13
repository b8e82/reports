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

Route::get('/', function () {
    return view('layouts.default');
});
Route::resource('dashboard','DashboardController');

Route::get('clients/{client}/display','DeviceController@display')->name('devices.display');
Route::get('clients/{client}/create','DeviceController@create')->name('devices.create');
Route::resource('clients','ClientController');
Route::resource('devices','DeviceController');
Route::resource('dyndns_hosts','Dyndns_hostController');

//Buildings
Route::get('buildings/{building}/showmeasurements','BuildingController@showmeasurements')->name('buildings.showmeasurements');
Route::get('buildings/{building}/floors','BuildingController@floors')->name('buildings.floors');
Route::get('buildings/{building}/fractions','BuildingController@fractions')->name('buildings.fractions');
Route::resource('buildings','BuildingController');
//Floors
Route::get('floors/{floor}/measurements','FloorController@measurements')->name('floors.measurements');
Route::resource('floors','FloorController');
//Fractions
Route::get('fractions/{fraction}/measurements','FractionController@measurements')->name('fractions.measurements');
Route::get('fractions/{fraction}/addmeasurements','FractionController@addmeasurements')->name('fractions.addmeasurements');
Route::resource('fractions','FractionController');
//Measurements
Route::resource('measurements','MeasurementController');

Route::resource('installers','InstallerController');
Route::resource('owners','OwnerController');
Route::resource('technicians','TechnicianController');
Route::resource('designers','TechnicianController');


Route::get('generate-pdf', 'PdfGenerateController@pdfview')->name('generate-pdf');

Route::get('/dynamic_pdf', 'DynamicPDFController@index');
Route::get('/dynamic_pdf/pdf', 'DynamicPDFController@pdf');




Route::get('uploadfile','HomeController@uploadfile'); 
Route::post('uploadFilePost','HomeController@uploadFilePost');



//Route::get('readxml','ReadXMLController@readxml'); 
//Route::post('uploadFilePost','HomeController@uploadFilePost');

Route::post('uploadFileStore','XMLController@uploadfile');
Route::get('upload','XMLController@upload'); 
Route::get('converter','XMLController@converter'); 
Route::resource('xml','XMLController');