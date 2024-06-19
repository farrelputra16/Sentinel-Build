<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\AdminloginController;
use App\Http\Controllers\Create_adminController;
use App\Http\Controllers\Create_pekerjaController;
use App\Http\Controllers\AccountsController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\CheckinController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\SIBController;
use App\Http\Controllers\PrimeNumberController;

Route::get('/login_pekerja', function () {
    return view('login_pekerja');
})->name('login_pekerja');

Route::get('/login/admin', function () {
    return view('login_admin');
})->name('login/admin');

Route::get('/workhour', function () {
    return view('workhour');
})->name('workhour');

Route::get('/app', function () {
    return view('app');
})->name('app');

Route::get('/app_pekerja', function () {
    return view('app_pekerja');
})->name('app_pekerja');

Route::get('/accounts', function () {
    return view('accounts');
})->name('accounts');

Route::get('/index', [IndexController::class, 'index'])->name('worker.index');
Route::get('/index/{worker}', [IndexController::class, 'show'])->name('worker.show');

// Route::get('/index', [EmployeeController::class, 'index'])->name('employees.index');
// Route::get('/index/{pekerja}', [EmployeeController::class, 'show']);

Route::get('/workhour', [ActivityController::class, 'index'])->name('workhour.index');
Route::get('/workhour/create', [ActivityController::class, 'create'])->name('workhour.create');
Route::post('/workhour', [ActivityController::class, 'store'])->name('workhour.store');

Route::get('/permission', [PermissionController::class, 'showForm'])->name('permission');
Route::post('/permission', [PermissionController::class, 'submitForm'])->name('permission.submit');

Route::get('/sib/create', [SIBController::class, 'create'])->name('sib.create');
Route::post('/sib', [SIBController::class, 'store'])->name('sib.store');
Route::get('/auth', [SIBController::class, 'index'])->name('sib.index');

Route::get('/checkin', [CheckinController::class, 'showForm'])->name('checkin.form');
Route::post('/checkin', [CheckinController::class, 'submitForm'])->name('checkin.submit');

Route::post('/login/admin', [AdminloginController::class, 'loginAdmin'])->name('login/admin');
Route::get('/admin', [AdminloginController::class, 'index'])->name('admin.index');

Route::get('/workers/create', [AccountsController::class, 'create'])->name('workers.create');
Route::post('/workers/create', [AccountsController::class, 'store'])->name('workers.store');

Route::resource('employees', EmployeeController::class);

Route::get('/', [PrimeNumberController::class, 'prime']);
Route::post('/calculate', [PrimeNumberController::class, 'calculate']);
