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
Route::get('/', 'App\Http\Controllers\PagesController@home');

Route::get('/about', 'App\Http\Controllers\PagesController@about');

// genres
Route::get('/genre', 'App\Http\Controllers\GenresController@index');
Route::get('/genre/create', 'App\Http\Controllers\GenresController@create');
Route::post('/genre', 'App\Http\Controllers\GenresController@store');
Route::delete('/genre/{id}', 'App\Http\Controllers\GenresController@destroy');
Route::get('/genre/{gnr}/edit', 'App\Http\Controllers\GenresController@edit');
Route::patch('/genre/{gnr}', 'App\Http\Controllers\GenresController@update');
Route::get('/genre/cetak', 'App\Http\Controllers\GenresController@cetak');

// books
Route::get('/book', 'App\Http\Controllers\BooksController@index');
Route::get('/book/create', 'App\Http\Controllers\BooksController@create');
Route::post('/book', 'App\Http\Controllers\BooksController@store');
Route::delete('/book/{id}', 'App\Http\Controllers\BooksController@destroy');
Route::get('/book/{bk}/edit', 'App\Http\Controllers\BooksController@edit');
Route::patch('/book/{bk}', 'App\Http\Controllers\BooksController@update');
Route::get('/book/cetak', 'App\Http\Controllers\BooksController@cetak');



// employees
Route::get('/employee', 'App\Http\Controllers\EmployeesController@index');
Route::get('/employee/create', 'App\Http\Controllers\EmployeesController@create');
Route::post('/employee', 'App\Http\Controllers\EmployeesController@store');
Route::delete('/employee/{id}', 'App\Http\Controllers\EmployeesController@destroy');
Route::get('/employee/{empl}/edit', 'App\Http\Controllers\EmployeesController@edit');
Route::patch('/employee/{empl}', 'App\Http\Controllers\EmployeesController@update');
Route::get('/employee/cetak', 'App\Http\Controllers\EmployeesController@cetak');

// members
Route::get('/member', 'App\Http\Controllers\MembersController@index');
Route::get('/member/create', 'App\Http\Controllers\MembersController@create');
Route::post('/member', 'App\Http\Controllers\MembersController@store');
Route::delete('/member/{id}', 'App\Http\Controllers\MembersController@destroy');
Route::get('/member/{mbr}/edit', 'App\Http\Controllers\MembersController@edit');
Route::patch('/member/{mbr}', 'App\Http\Controllers\MembersController@update');
Route::get('/member/cetak', 'App\Http\Controllers\MembersController@cetak');



// pinjam
Route::get('/pinjam', 'App\Http\Controllers\PinjamsController@index');
Route::get('/pinjam/create', 'App\Http\Controllers\PinjamsController@create');
Route::post('/pinjam', 'App\Http\Controllers\PinjamsController@store');
Route::delete('/pinjam/{id}', 'App\Http\Controllers\PinjamsController@destroy');
Route::get('/pinjam/{pjm}/edit', 'App\Http\Controllers\PinjamsController@edit');
Route::patch('/pinjam/{pjm}', 'App\Http\Controllers\PinjamsController@update');
Route::get('/pinjam/cetak', 'App\Http\Controllers\PinjamsController@cetak');

// kembali
Route::get('/kembali', 'App\Http\Controllers\KembalisController@index');
Route::get('/kembali/create', 'App\Http\Controllers\KembalisController@create');
Route::post('/kembali', 'App\Http\Controllers\KembalisController@store');
Route::delete('/kembali/{id}', 'App\Http\Controllers\KembalisController@destroy');
Route::get('/kembali/{kmb}/edit', 'App\Http\Controllers\KembalisController@edit');
Route::patch('/kembali/{kmb}', 'App\Http\Controllers\KembalisController@update');
Route::get('/kembali/cetak', 'App\Http\Controllers\KembalisController@cetak');





