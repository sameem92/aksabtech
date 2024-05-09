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

//website routes
Auth::routes();
Route::get('/','HomeController@home');  
Route::get('/privacy','HomeController@privacy');  
Route::get('/policy','HomeController@policy');  
Route::get('aboutus','HomeController@aboutus');
Route::get('contactus','HomeController@contactus');
Route::get('blog','HomeController@blog');
Route::get('blog/{id}','HomeController@showblog');
Route::get('services','HomeController@services');
Route::get('services/{id}','HomeController@showservice');
Route::get('works','HomeController@works');
Route::get('works/{id}','HomeController@showwork');
Route::post('addorder','HomeController@addorder');

Route::get('/clearcache185', function () {
    $clearcache = Artisan::call('cache:clear');
    echo "Cache cleared<br>";

    $clearview = Artisan::call('view:clear');
    echo "View cleared<br>";

    $clearconfig = Artisan::call('config:cache');
    echo "Config cleared<br>";

});


//admin routes
Route::resource('b3k0P4XGvvy+PzGjt5qLS873ORhSE7mZ1fok9lKNit0/','adminloginController');  
Route::group(['middleware' => ['adminauth:admin']], function () 
{
  Route::resource('b3k0P4XGvvy+PzGjt5qLS873ORhSE7mZ1fok9lKNit0/provider','providerController');
  Route::resource('b3k0P4XGvvy+PzGjt5qLS873ORhSE7mZ1fok9lKNit0/setapp','adminchangelogoController');
  Route::resource('b3k0P4XGvvy+PzGjt5qLS873ORhSE7mZ1fok9lKNit0/sliders','adminsliderController');   
  Route::resource('b3k0P4XGvvy+PzGjt5qLS873ORhSE7mZ1fok9lKNit0/about','adminaboutController');
  Route::resource('b3k0P4XGvvy+PzGjt5qLS873ORhSE7mZ1fok9lKNit0/privacy','adminprivacyController');
  Route::resource('b3k0P4XGvvy+PzGjt5qLS873ORhSE7mZ1fok9lKNit0/conditions','adminconditionsController');
  Route::resource('b3k0P4XGvvy+PzGjt5qLS873ORhSE7mZ1fok9lKNit0/contactus','admincontactController');
  Route::resource('b3k0P4XGvvy+PzGjt5qLS873ORhSE7mZ1fok9lKNit0/orderrequests','adminorderrequestsController');
  Route::resource('b3k0P4XGvvy+PzGjt5qLS873ORhSE7mZ1fok9lKNit0/lastworks','adminlastworksController');
  Route::resource('b3k0P4XGvvy+PzGjt5qLS873ORhSE7mZ1fok9lKNit0/tools','admintoolsController');
  Route::resource('b3k0P4XGvvy+PzGjt5qLS873ORhSE7mZ1fok9lKNit0/clients','adminclientsController');
  Route::resource('b3k0P4XGvvy+PzGjt5qLS873ORhSE7mZ1fok9lKNit0/comments','adminclientcommentsController');
  Route::get('b3k0P4XGvvy+PzGjt5qLS873ORhSE7mZ1fok9lKNit0/chooseus','adminhomeController@index');
  Route::get('b3k0P4XGvvy+PzGjt5qLS873ORhSE7mZ1fok9lKNit0/statistics','adminhomeController@index2');
  Route::get('b3k0P4XGvvy+PzGjt5qLS873ORhSE7mZ1fok9lKNit0/packagesandoffers','adminhomeController@index3');
  Route::resource('b3k0P4XGvvy+PzGjt5qLS873ORhSE7mZ1fok9lKNit0/blog','adminblogController');
  Route::resource('b3k0P4XGvvy+PzGjt5qLS873ORhSE7mZ1fok9lKNit0/package','adminpackageController');
  Route::resource('b3k0P4XGvvy+PzGjt5qLS873ORhSE7mZ1fok9lKNit0/service','adminservicesController');
  Route::get('b3k0P4XGvvy+PzGjt5qLS873ORhSE7mZ1fok9lKNit0/ourservices','adminservicesController@index2');
  Route::resource('b3k0P4XGvvy+PzGjt5qLS873ORhSE7mZ1fok9lKNit0/work','adminworksController');
  Route::get('b3k0P4XGvvy+PzGjt5qLS873ORhSE7mZ1fok9lKNit0/ourworks','adminworksController@index2');
  Route::resource('b3k0P4XGvvy+PzGjt5qLS873ORhSE7mZ1fok9lKNit0/myworks','adminmyworksController');

});

//admin logout
Route::get('logout','adminloginController@destroy');


