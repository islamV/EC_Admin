<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('dashbord');

Route::resource('Users/EmployeeList' ,'EmployeeController');
Route::resource('Users/CustomerList' ,'UsersController');
Route::resource('dashbord/ProductList' ,'ProductController');
route::get('home' , function(){
    return view('pages.home');
})->name('home');
Route::fallback(function(){
return redirect('/');
});