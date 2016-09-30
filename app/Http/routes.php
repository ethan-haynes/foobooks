<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use Foobooks\Http\Controllers\Controller;

Route::any('/', function () {

    return view('welcome', ['name' => "bob", 'link' => 'books']);
})->name('');

# test for working with POST routing
Route::post('/books', 'BookController@index')->name('books');
