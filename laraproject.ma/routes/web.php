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
    return view('welcome');
});

Route::any('/saluer/{name}','Controller@test' );
Route::any('/add','CitationController@add' )->name('add');
Route::any('/show','CitationController@show' )->name('show');
Route::any('/addfirst','CitationController@addFirst' )->name('addfirst');
Route::any('/lire/{id}','CitationController@lire' )->name('lire');
Route::any('/supp/{id}','CitationController@supp' )->name('supp');
Route::any('/maj/{id}','CitationController@maj' )->name('maj');
Route::any('/maj2','CitationController@maj2' )->name('maj2');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
