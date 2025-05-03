<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AdminController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/programmes', [PageController::class, 'programmes'])->name('programmes');
Route::get('/programmes/details/{id}', [PageController::class, 'programme']);
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/programmes/apply/{id}', [PageController::class, 'apply'])->name('apply');
Route::post('/programmes/register', [PageController::class, 'register'])->name('programme.register');

Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/admin/add', [AdminController::class, 'add'])->name('admin.add');
Route::post('/store', [AdminController::class, 'store'])->name('admin.store');
Route::get('/admin/view', [AdminController::class, 'view'])->name('admin.view');
Route::get('/view/details/{id}', [AdminController::class, 'details'])->name('admin.details');
Route::delete('/admin/delete/{id}', [AdminController::class, 'delete'])->name('admin.delete');
Route::get('/admin/applicants', [AdminController::class, 'applicants'])->name('admin.applicants');
Route::delete('/applications/clear', [AdminController::class, 'clearApplicants'])->name('applications.clear');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
