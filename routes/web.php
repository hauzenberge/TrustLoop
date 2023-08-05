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
    //return view('welcome');
    return redirect('login');
});

Route::group(['middleware' => ['auth', 'verified'], 'namespace' => 'App\Http\Controllers\AdminPanel'], function () {
    Route::middleware('tariff')->group(function () {
        Route::prefix('dashboard')->group(function () {
            Route::get('/', 'DashboardController@index')->name('dashboard');
        });
    
        Route::prefix('user-reviews')->group(function () {
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
    
        Route::get('/export-csv', 'CSVController@export')->name('export.csv');

        Route::prefix('billing')->group(function () {
            Route::get('/', 'PaymentsContoller@index')->name('billing');
        });
    
        Route::prefix('user-data')->group(function () {
            Route::put('{userData}/updateCountry', 'UserDataController@updateCountry')->name('user-data.country.update');
            Route::put('{userData}/updateCompany', 'UserDataController@updateCompany')->name('user-data.company.update');
        });
    
        Route::prefix('settings')->group(function () {
            Route::get('/', 'SettignsController@index')->name('settings');
            Route::post('/update-survay/{survey_id}', 'SettignsController@SurveyUpdate')->name('survey.update');
    
            Route::prefix('question/')->group(function () {
                Route::post('/create', 'SettignsController@QuestionCreate')->name('question.create');
                Route::prefix('{question_id}')->group(function () {
                    Route::post('/update', 'SettignsController@QuestionUpdate')->name('question.update');
                    Route::get('/delete', 'SettignsController@QuestionDelete')->name('settings.QuestionDelete');
                });
            });
        });
    
        Route::post('/upload-avatar/{user_id}', 'AvatarController@store')->name('avatar.upload');
    });  

    Route::prefix('enable-plan')->group(function () {
        Route::get('/', 'EnablePlanController@index');

        Route::get('/update', 'EnablePlanController@update');

        Route::get('/choose/{user}/{plan}', 'EnablePlanController@choose');

        Route::get('cancel/{planLog}', 'EnablePlanController@cancel');
    });

    Route::get('/user-card', 'EnablePlanController@userCard')->name('user-card');
    Route::post('save-card', 'EnablePlanController@saveCard');
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('auth/google', 'App\Http\Controllers\Auth\LoginController@redirectToGoogle')->name('auth.google');
Route::get('auth/google/callback', 'App\Http\Controllers\Auth\LoginController@handleGoogleCallback');

Route::get('demo-page/{user_id}',function ($user_id) {
    return view('demo_page',[
        'user_id' => $user_id
    ]);
});

Route::get('modal/{user_id}','App\Http\Controllers\AdminPanel\ModalController@index');


/*
Route::middleware('auth')->group(function () {
    Route::get('/profile', 'App\Http\Controllers\Web\ProfileController@edit')->name('profile.edit');
    Route::any('/profile/update', 'App\Http\Controllers\Web\ProfileController@update');
    Route::delete('/profile', 'App\Http\Controllers\Web\ProfileController@destroy')->name('profile.destroy');
});
*/

require __DIR__ . '/auth.php';
