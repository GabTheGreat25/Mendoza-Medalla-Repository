<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::resource("/service", ServiceController::class)->except(['index', 'service']);
Route::get('/services', [
    'uses' => 'ServiceController@getService',
    'as' => 'getService',
]);
Route::post('/service/import', 'ServiceController@import')->name('serviceImport');

Route::resource("/employee", EmployeeController::class)->except(['index', 'employee']);
Route::get('/employees', [
    'uses' => 'employeeController@getEmployee',
    'as' => 'getEmployee',
]);
Route::post('/employee/import', 'employeeController@import')->name('employeeImport');

Route::resource("/customer", CustomerController::class)->except(['index', 'customer']);
Route::get('/customers', [
    'uses' => 'customerController@getCustomer',
    'as' => 'getCustomer',
]);
Route::post('/customer/import', 'CustomerController@import')->name('customerImport');


Route::get('/signup', [UserController::class, 'getsignup']);
Route::post('/signups', [UserController::class, 'postSignup'])->name('user.signup');

Route::get('/adminreg', [AdminController::class, 'getregister'])->name('aregister');;
Route::post('/adminregs', [AdminController::class, 'postregistered'])->name('admin.register');
// Route::post('/adminregs', [UserController::class, 'postSignup'])->name('user.signup');

// Route::post('/signup', [App\Http\Controllers\UserController::class, 'postSignup'])->name('user.signup');

// Route::get('/adminregister', [AdminController::class, 'getregister']);
// Route::post('/adminregisters', [AdminController::class, 'postregistered'])->name('admin.register');

// Route::post('/admin', 'adminController@postregistered');

