<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/employee', function () {
    return view('employee');
})->name('employee');

Route::get('/position', function () {
    return view('position');
})->name('position');

Route::get('/recruitment', function () {
    return view('recruitment');
})->name('recruitment');

Route::get('/socialbenefit', function () {
    return view('socialbenefit');
})->name('socialbenefit');

Route::get('/termination', function () {
    return view('termination');
})->name('termination');

Route::get('/training', function () {
    return view('training');
})->name('training');

Route::get('/vacation', function () {
    return view('vacation');
})->name('vacation');

Route::post('/auth/login', [AuthController::class, 'login'])->name('auth.login');
Route::post('/auth/logout', [AuthController::class, 'logout'])->name('auth.logout');
Route::post('/auth/register', [AuthController::class, 'register'])->name('auth.register');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');
Route::post('/dashboard/get-number-of-employees', [DashboardController::class, 'getNumberOfEmployees'])->name('dashboard.getNumberOfEmployees')->middleware('auth');
