<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\OfficeController;
use App\Http\Controllers\AdminController;

Route::get('/', function(){
    return view('home');
})->name('home');

Route::get('/admin', [AdminController::class, 'index'])->name('admin');

Route::get('admin/view_data', function(){
    return view('admin/view_data');
})->name('view_data');

Route::get('admin/view/personnel', function(){
    return view('admin/view/personnel');
})->name('view/personnel');

Route::get('admin/view_office', function(){
    return view('admin/view/view_office');
})->name('view_office');

Route::get('admin/view/office', function(){
    return view('admin/view/office');
})->name('view/office');

Route::get('admin/view_staff', function(){
    return view('admin/view/view_staff');
})->name('view_staff');

Route::get('admin/view/staff', function(){
    return view('admin/view/staff');
})->name('view/staff');

Route::get('admin/reg_data', function(){
    return view('admin/reg_data');
})->name('reg_data');

Route::get('admin/reg_office', function(){
    return view('admin/register/reg_office');
})->name('reg_office');

Route::get('admin/reg_staff', function(){
    return view('admin/register/reg_staff');
})->name('reg_staff');

Route::get('admin/reg_data', function(){
    return view('admin/reg_data');
})->name('reg_data');

Route::get('admin/tod_visit', function(){
    return view('admin/tod_visit');
})->name('tod_visit');

Route::get('/admin/allvisit/report', function(){
    return view('/admin/allvisit/report');  
})->name('report');


Route::get('/admin/all_visit', function(){
    return view('/admin/all_visit');
})->name('all_visit');

Route::get('/office-staff', function(){
    return view('/office-staff');
})->name('office-staff');

Route::get('/office-staff/scan', function(){
    return view('/office-staff/scan');
})->name('scan');

Route::get('/office-staff/viewvisit', function(){
    return view('/office-staff/viewvisit');
})->name('viewvisit');

Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

//Route::get('/office', [OfficeController::class, 'index'])->name('office');
//Route::post('/office', [OfficeController::class, 'store']);

Route::get('/office-staff', [OfficeController::class, 'index'])->name('office-staff');
Route::post('/office-staff', [OfficeController::class, 'store']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



///////

Route::resource('/offices', OfficeController::class);