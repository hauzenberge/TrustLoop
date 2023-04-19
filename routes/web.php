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

Route::group(['middleware' => ['auth', 'verified'], 'namespace' => 'App\Http\Controllers\AdminPanel'], function () {
    Route::prefix('dashboard')->group(function () {
        Route::get('/', 'DashboardController@index')->name('dashboard');
    });

    Route::prefix('users')->group(function () {
        Route::get('/', 'UsersController@index')->name('users');
        Route::get('/add', 'UsersController@add')->name('add.user');
        Route::patch('/store', 'UsersController@store')->name('user.store');

        Route::prefix('{user_id}')->group(function () {
            Route::get('/delete', 'UsersController@delete')->name('user.destroy');
            Route::get('/edit', 'UsersController@edit')->name('user.edit');
            Route::patch('/update', 'UsersController@update')->name('user.update');
            Route::get('/show', 'UsersController@show')->name('user.show');
        });
    });

    Route::prefix('payments')->group(function () {
        Route::get('/', 'PaymentsContoller@index')->name('payments');
    });

    Route::prefix('user-data')->group(function () {
        Route::put('{userData}/updateCountry', 'UserDataController@updateCountry')->name('user-data.country.update');
    });

    Route::prefix('settigns')->group(function () {
        Route::get('/', 'SettignsController@index')->name('settigns');
        Route::post('/update-survay/{survey_id}', 'SettignsController@SurveyUpdate')->name('survey.update');

        Route::prefix('question/')->group(function () {
            Route::post('/create', 'SettignsController@QuestionCreate')->name('question.create');
            Route::prefix('{question_id}')->group(function () {
                Route::post('/update', 'SettignsController@QuestionUpdate')->name('question.update');
                Route::get('/delete', 'SettignsController@QuestionDelete')->name('settigns.QuestionDelete');
            });
        });
    });


    Route::post('/upload-avatar/{user_id}', 'AvatarController@store')->name('avatar.upload');
});

Route::post('/modal', function () {
    return view('modal')->render();
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('auth/google', 'App\Http\Controllers\Auth\LoginController@redirectToGoogle')->name('auth.google');
Route::get('auth/google/callback', 'App\Http\Controllers\Auth\LoginController@handleGoogleCallback');

Route::get('demo-page',function () {
    return view('demo_page');
});

/*
Route::middleware('auth')->group(function () {
    Route::get('/profile', 'App\Http\Controllers\Web\ProfileController@edit')->name('profile.edit');
    Route::any('/profile/update', 'App\Http\Controllers\Web\ProfileController@update');
    Route::delete('/profile', 'App\Http\Controllers\Web\ProfileController@destroy')->name('profile.destroy');
});
*/

require __DIR__ . '/auth.php';
