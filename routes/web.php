<?php

use App\Http\Controllers\CreateEmployeeController;
use App\Http\Controllers\EmployeeController;
use App\Models\Employee;
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
route::get('/employees/{id}/edit', [EmployeeController::class, "edit"])->name('employee.edit');
route::put('/employees/{id}', [EmployeeController::class, "update"])->name("employee.update");
Route::delete('/employees/{employee}', [EmployeeController::class, 'destroy'])->name('employee.destroy');