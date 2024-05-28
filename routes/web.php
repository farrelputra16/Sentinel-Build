<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\Create_adminController;
use App\Http\Controllers\Create_pekerjaController;
use App\Http\Controllers\AccountsController;
use App\Http\Controllers\PermissionController;

Route::get('/login_pekerja', function () {
    return view('login_pekerja');
})->name('login_pekerja');

Route::get('/login_admin', function () {
    return view('login_admin');
})->name('login_admin');

Route::get('/index', function () {
    return view('index');
})->name('index');

Route::get('/workhour', function () {
    return view('workhour');
})->name('workhour');

Route::get('/auth', function () {
    return view('sib');
})->name('sib');

Route::get('/app', function () {
    return view('app');
})->name('app');

Route::get('/app_pekerja', function () {
    return view('app_pekerja');
})->name('app_pekerja');

Route::get('/accounts', function () {
    return view('accounts');
})->name('accounts');



Route::get('/index', [IndexController::class, 'index'])->name('index');
Route::get('/index/{pekerja}', [IndexController::class, 'show']);

Route::get('/workhour', [ActivityController::class, 'index'])->name('workhour');
Route::get('/workhour/create', [ActivityController::class, 'create'])->name('workhour.create');
Route::post('/workhour', [ActivityController::class, 'store'])->name('workhour.store');

Route::get('/accounts', [AccountsController::class, 'index'])->name('accounts.index');
Route::get('/accounts/create/admin', [AccountsController::class, 'createAdmin'])->name('create_admin');
Route::get('/accounts/create/pekerja', [AccountsController::class, 'createPekerja'])->name('create_pekerja');

Route::post('/accounts/create/admin', [Create_adminController::class, 'storeAdmin'])->name('accounts.create.admin');
Route::post('/accounts/create/pekerja', [Create_pekerjaController::class, 'storePekerja'])->name('accounts.create.pekerja');

Route::get('/permission', [PermissionController::class, 'showForm'])->name('permission');
Route::post('/permission', [PermissionController::class, 'submitForm'])->name('permission.submit');

Route::get('/sib-form', [SIBFormController::class, 'index']);
Route::post('/sib-form/submit', [SIBFormController::class, 'submit'])->name('sib-form.submit');