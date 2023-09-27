<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\RecruitmentController;
use App\Http\Controllers\WeatherController;
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

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');
Route::get('/employee', [EmployeeController::class, 'index'])->name('employee')->middleware('auth');
Route::get('/position', [PositionController::class, 'index'])->name('position')->middleware('auth');
Route::get('/recruitment', [RecruitmentController::class, 'index'])->name('recruitment')->middleware('auth');
Route::get('/recruitment/create', [RecruitmentController::class, 'create'])->name('recruitment.create');
Route::get('/recruitment/edit/{recruitment}', [RecruitmentController::class, 'edit'])->name('recruitment.edit')->middleware('auth');
Route::put('/recruitment/update/{recruitment}', [RecruitmentController::class, 'update'])->name('recruitment.update')->middleware('auth');
Route::delete('/recruitment/destroy/{recruitment}', [RecruitmentController::class, 'destroy'])->name('recruitment.destroy')->middleware('auth');

Route::post('/auth/login', [AuthController::class, 'login'])->name('auth.login');
Route::post('/auth/logout', [AuthController::class, 'logout'])->name('auth.logout');
Route::post('/auth/register', [AuthController::class, 'register'])->name('auth.register');
Route::post('/recruitment', [RecruitmentController::class, 'store'])->name('recruitment.store');

Route::post('/dashboard/getWeather', [WeatherController::class, 'getWeather'])->name('dashboard.getWeather')->middleware('auth');
Route::post('/dashboard/get-number-of-employees', [DashboardController::class, 'getNumberOfEmployees'])->name('dashboard.getNumberOfEmployees')->middleware('auth');
Route::post('/dashboard/get-Recruitment-In-Progress', [DashboardController::class, 'getRecruitmentInProgress'])->name('dashboard.getRecruitmentInProgress')->middleware('auth');
Route::post('/dashboard/get-Recruitment-Approved', [DashboardController::class, 'getRecruitmentApproved'])->name('dashboard.getRecruitmentApproved')->middleware('auth');
