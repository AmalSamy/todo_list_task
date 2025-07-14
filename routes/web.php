<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Task\TaskController;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('tasks')->name('tasks.')->controller(TaskController::class)->group(function(){
Route::get('/task','task')->name('task');
Route::post('/task','posttask')->name('posttask');
Route::get('/viewtask','viewtask')->name('viewtask');
Route::post('/update','update')->name('update');
Route::get('/edit/{id}','edit')->name('edit');
Route::get('/delete/{id}','delete')->name('delete');

});

