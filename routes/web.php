<?php

use App\Http\Controllers\ProfileController;
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
});


Route::get('/dashboard', function () {
    //return view('dashboard');
    return view('admin-panel.dashboard', [
        'title' => 'Dashboard',
        'active' => 'dashboard'
    ]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/users', function () {
    return view('admin-panel.users.index', [
        'title' => 'Users',
        'active' => 'users'
    ]);
})->middleware(['auth', 'verified'])->name('users');

Route::group(['namespace' => 'App\Http\Controllers\AdminPanel'], function () {
    Route::get('/payments', 'PaymentsContoller@index');
});

Route::get('/settigns', function () {
    return redirect('profile');
})->middleware(['auth', 'verified'])->name('users');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('auth/google', 'App\Http\Controllers\Auth\LoginController@redirectToGoogle')->name('auth.google');
Route::get('auth/google/callback', 'App\Http\Controllers\Auth\LoginController@handleGoogleCallback');


/*
Route::middleware('auth')->group(function () {
    Route::get('/profile', 'App\Http\Controllers\Web\ProfileController@edit')->name('profile.edit');
    Route::any('/profile/update', 'App\Http\Controllers\Web\ProfileController@update');
    Route::delete('/profile', 'App\Http\Controllers\Web\ProfileController@destroy')->name('profile.destroy');
});
*/

require __DIR__ . '/auth.php';
