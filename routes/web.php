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
use App\Http\Controllers\AssignController;
use App\Assign;

//Route::get('/', 'AssignController@index');
Route::get('/', 'FirstassignController@index');
Route::get('/index1', function()
{
    return view('index1');
}
);

Route::get('/index2', function()
{
    return view('index2');
}
);
/*Route::get('/', function () {
    return view('welcome');
});
*/
/*Route::get('/', function () {
    return view('home');
});*/