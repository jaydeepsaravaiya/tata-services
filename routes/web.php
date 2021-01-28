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


Route::get('/', function () {
    if(Auth::user()->isSuperAdmin())
        return view('welcome');
        else
        return route('/parser');
});
Route::get('/bot',function(){
    return 'Bot Control Panel';
});
Route::get('/parser',function(){
    return 'Replay Parser';
});