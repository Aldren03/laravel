<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;

route::get('/', [AdminController::class, 'home']);


route::get('/home', [AdminController::class,'dashboard'])->name('home');

Route::get('/create_employee', [AdminController::class, 'create_employee'])->name('create_employee');
Route::post('/add_employee', [AdminController::class, 'add_employee'])->name('add_employee');
Route::get('/view_employee', [AdminController::class, 'view_employee'])->name('view_employee');
Route::get('/employee_delete/{id}', [AdminController::class, 'employee_delete'])->name('employee_delete');
Route::get('/update_employee/{id}', [AdminController::class, 'update_employee'])->name('update_employee');
Route::post('/edit_employee/{id}', [AdminController::class, 'edit_employee'])->name('edit_employee');


route::get('/view_user', [AdminController::class, 'view_user']);

route::get('/dashboard', [AdminController::class, 'dashboard']);

Route::get('/add_borrower', [AdminController::class, 'show_add_borrower_form'])->name('add_borrower_form');
Route::post('/add_borrower', [AdminController::class, 'add_borrower'])->name('add_borrower');
