<?php

use App\Http\Controllers\CreateEmployeeController;
use App\Http\Controllers\EmployeeController;
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

Route::get('/', [EmployeeController::class, "index"])->name('index');
Route::get('/employees/create', [EmployeeController::class, "create"])->name('employee.create');
Route::get('/employees/{id}', [EmployeeController::class, "show"])->name('employee.show');
Route::post('/employees', [EmployeeController::class, "store"])->name('employee.store');
Route::delete('/employee/{employee}', [EmployeeController::class, 'destroy'])->name('employee.destroy');