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
    return view('pages.welcome');
})->name('dashbord');
Route::prefix('Users')->group(function () {

    Route::resource('EmployeeList', 'EmployeeController');
    Route::resource('UsersList', 'UsersController');
});
Route::prefix('dashbord')->group(function () {
    Route::resource('ProductList', 'ProductController');
    Route::get('finance', function () {
        return view('pages.dashbord.finance');
    })->name('finance');
    Route::get('sales', function () {
        return view('pages.dashbord.sales');
    })->name('sales');
});

route::get('home', function () {
    return view('pages.home');
})->name('home');
Route::fallback(function () {
    return redirect('/');
});
