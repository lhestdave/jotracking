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
    return redirect('/home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();
Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/superadmin', function(){
  return 'you are super admin';
})->middleware(['auth','auth.superadmin']);

// Route::resource('users','Admin\UserController', ['except' => ['show','create','store']]);

Route::namespace('Admin')->prefix('superadmin')->middleware(['auth','auth.superadmin'])->name('superadmin.')->group(function(){
  Route::resource('users','UserController', ['except' => ['show','create','store']]);
});

Route::get('/jo', 'JOController@index');
Route::get('/jo/{jostate}', 'JOController@index');
Route::post('/jo/gettask', 'JOController@getTask');
Route::post('/jo/gettaskstatus', 'JOController@getTaskStatus');
Route::post('/jo/gettaskdetails', 'JOController@getTaskDetails');
Route::post('/jo/addtasktracking','JOController@addtasktracking');
Route::post('/jo/gettasknotes', 'JOController@getTaskNotes');
Route::get('/jo/create', 'JOController@create');
Route::post('/addjo', 'JOController@addjo');
Route::get('/jo/view/{cid}', 'JOController@viewjo');
Route::get('/jo/viewer/{userid}/{joid}', 'JOController@viewjoone');
Route::post('/jo/search', 'JOController@search');
Route::post('/jo/getusers', 'JOController@getUsers');
Route::post('/jo/transfer', 'JOController@transfer');
Route::post('/jo/addjonotes', 'JOController@addJoNotes');
Route::post('/jo/getjonotes', 'JOController@getJoNotes');
Route::get('/jo/user/{id}', 'JOController@getJOperUser');

Route::get('/clients', 'ClientController@index');
Route::post('/addnewclient', 'ClientController@store');
Route::post('/clients/search', 'ClientController@search');

Route::get('/billing', 'BillingController@index');
Route::post('/billing/addpayment', 'BillingController@addpayment');
Route::get('/billing/jid/{joid}', 'BillingController@getJOHistory');
Route::get('/billing/view/{cid}', 'BillingController@viewbilling');
Route::post('/billing/search', 'BillingController@search');

Route::get('generate-pdf','PDFController@generatePDF');

Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('config:clear');
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:cache');
    return 'DONE'; //Return anything
});

Route::get('/down', function() {
  $exitCode = Artisan::call('down');
  return redirect('/errors/503'); //Return anything
});

Route::get('/changepass', 'HomeController@changePass');
Route::post('/savechangepass', 'HomeController@saveChangePass');

Route::get('/tasks', 'HomeController@getTasks')->name('tasks');
Route::get('/mytasks', 'HomeController@getMyTasks')->name('mytasks');

Route::get('/profile', 'HomeController@profile')->name('profile');