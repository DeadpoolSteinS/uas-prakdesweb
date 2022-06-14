<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// get methode
Route::get('/', function () {
    return view('page.landing_page');
});

Route::get('/daftar', function () {
    return view('autentikasi.daftar');
});

Route::get('/login', function () {
    return view('autentikasi.login');
})->name('login');

Route::get('/home', [TaskController::class, 'readTask'])->middleware('auth');
Route::get('/delete-task/{id}', [TaskController::class, 'deleteTask'])->middleware('auth');
Route::get('/add-to-my-day/{id}', [TaskController::class, 'addToMyDay'])->middleware('auth');
Route::get('/my-day', [TaskController::class, 'getAllMyDay'])->middleware('auth');
Route::get('/important', [TaskController::class, 'getAllImportant'])->middleware('auth');
Route::get('/very-urgent', [TaskController::class, 'getAllVeryUrgent'])->middleware('auth');
Route::get('/urgent', [TaskController::class, 'getAllUrgent'])->middleware('auth');
Route::get('/normal', [TaskController::class, 'getAllNormal'])->middleware('auth');

Route::get('/besok', [TaskController::class, 'getAllTommorow'])->middleware('auth');
Route::get('/minggu-ini', [TaskController::class, 'getAllThisWeek'])->middleware('auth');
Route::get('/bulan-ini', [TaskController::class, 'getAllThisMonth'])->middleware('auth');

Route::get('/grup/{id}', [TaskController::class, 'getAllTaskByGroup'])->middleware('auth');

//post methode
Route::post('/proses-registrasi', [AuthController::class, 'registrasi']);
Route::post('/proses-login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);
Route::post('/add-task', [TaskController::class, 'addTask'])->middleware('auth');
Route::post('/update-status', [TaskController::class, 'updateStatus'])->middleware('auth');

// put methode
Route::put('/update-task', [TaskController::class, 'updateTask'])->middleware('auth');

//resource 
Route::resource('user','UserController')->middleware('auth');
