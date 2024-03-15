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
    return view('welcome');
});

$taskList=[
    'first' => 'sleep',
    'second' => 'eat',
    'third' => 'work'
];

Route::get('tasks/{param}', function($param) use($taskList){
    return $taskList[$param];
});