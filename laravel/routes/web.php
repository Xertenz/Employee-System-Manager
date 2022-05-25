<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/login', [AdminController::class, 'login'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'login_submit'])->name('admin.login.submit');
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

// Department
Route::get('depart/{id}/delete', [DepartmentController::class, 'destroy']);
Route::resource('depart', DepartmentController::class);

// Employee
Route::get('employee/{id}/delete', [EmployeeController::class, 'destroy']);
Route::resource('employee', EmployeeController::class);