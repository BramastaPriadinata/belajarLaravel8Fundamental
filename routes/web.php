<?php

use App\Providers\RouteServiceProvider;
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
    return view('welcome');
});

$taskList=[
    'first' => 'sleep',
    'second' => 'eat',
    'third' => 'work'
];
Route::get('tasks', function() use($taskList){
    // ddd(request()-> all());
    if(request()->search){
        return $taskList[request()->search];
    }
    return $taskList;
});

Route::get('tasks/{param}', function($param) use($taskList){
    return $taskList[$param];
});


Route::post('/tasks', function() use ($taskList){
    $taskList[request()-> label] = request() -> task;
    return $taskList;
});