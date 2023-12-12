<?php

use App\Http\Controllers\Admin\DashboardController;
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
    return view('pages.home.index');
});

Route::get('/account/registration', function(){
    return view('auth.employee.register.index');
});


// Route::group(['namespace' => 'App\Http\Controllers'])

Route::get('/admin/changepassword', function() {
    return view('pages.admin.changepassword');
})->middleware('auth');



Route::group(['namespace' => 'App\Http\Controllers'], function() {

    //Route for Employee
    Route::get('/account/login', 'Employee\LoginController@show')->name('employee.show');
    Route::post('/acount/login', 'Employee\LoginController@login')->name('employee.perform');

    //Route for Admin
    Route::get('/admin/login', 'Admin\LoginController@show')->name('login.show');
    Route::post('/admin/login', 'Admin\LoginController@login')->name('login.perform');

    Route::group(['middleware' => ['auth']], function() {

        Route::get('/admin/dashboard', 'Admin\DashboardController@index');

        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
    });
});

