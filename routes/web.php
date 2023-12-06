<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;

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
    return view('home', [
        "sendy" => "sendy.png",
        "alvin" => "alvin.jpg",
        "ben" => "ben.jpg",
    ]);
});

Route::get('/learn', function(){
    return view('learn');
});

Route::prefix('/learn')->group(function(){
    Route::get('/html', function(){
        return view('html');
    });
    Route::get('/css', function(){
        return view('css');
    });
    Route::get('/javascript', function(){
        return view('javascript');
    });
    Route::get('/php', function(){
        return view('php');
    });
    Route::get('/java', function(){
        return view('java');
    });
    Route::get('/c', function(){
        return view('c');
    });
    Route::get('/cpp', function(){
        return view('cpp');
    });
    Route::get('/python', function(){
        return view('python');
    });
});

Route::get('/lab', function(){
    return view('laboratory');
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function(){
    return view('dashboard.index');
})->middleware('auth');

