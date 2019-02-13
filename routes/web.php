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


Route::get('/', function (){
    $projects = App\Project::all();
    return view('index', compact('projects'));
});

Route::get('/users', 'ProjectsController@getAllUsers');

/*Route::get('/users/{user}', function ($id){
    $user = App\Project::find($id);
    return view('user_info', compact('user'));
});*/

Route::get('/users/{user}', 'ProjectsController@showUserInfo');