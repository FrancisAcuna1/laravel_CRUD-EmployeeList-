<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

Route::get('add_form', [EmployeeController::class, 'add_form']);
Route::post('add', [EmployeeController::class, 'add']);
Route::get('/', [EmployeeController::class, 'employee_list']);
Route::get('edit_form/{id}', [EmployeeController::class, 'edit_form']);
Route::post('update_records', [EmployeeController::class, 'update_records']);
Route::get('delete_records/{id}', [EmployeeController::class, 'delete_records']);
Route::post('search', [EmployeeController::class, 'search']);
