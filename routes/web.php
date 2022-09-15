<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeeController;


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
Route::resource('/admin', AdminController::class);

Route::resource('/esoft', CompanyController::class)->middleware('admin');

Route::resource('/employee', EmployeeController::class)->middleware('admin');
Route::get('/employee/{id}/create', [EmployeeController::class,'create'])->middleware('admin');




