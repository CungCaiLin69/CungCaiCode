<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostReplyController;

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
        return view('subpages/python');
    });
    Route::get('/pyChallenge', function(){
        return view('pyChallenge');
    });
    
});

Route::get('/courses', function(){
    return view('courses');
});

Route::prefix('/courses')->group(function(){
    Route::get('/frontend', function(){
        return view('frontend');
    });
    Route::get('/backend', function(){
        return view('subpages/backend', [
            "link1" => "https://www.youtube.com/embed?v=HqAMb6kqlLs&list=PLFIM0718LjIWiihbBIq-SWPU6b6x21Q_2&index=1&autoplay=1&mute=1",
            "link2" => "https://www.youtube.com/embed?v=pZqk57Xvujs&list=PLFIM0718LjIWiihbBIq-SWPU6b6x21Q_2&index=2&autoplay=1&mute=1",
            "link3" => "https://www.youtube.com/embed?v=u7zS2XpMpsc&list=PLFIM0718LjIWiihbBIq-SWPU6b6x21Q_2&index=3&autoplay=1&mute=1",
            "link4" => "https://www.youtube.com/embed?v=9jrD0wcfq1g&list=PLFIM0718LjIWiihbBIq-SWPU6b6x21Q_2&index=4&autoplay=1&mute=1",
            "link5" => "https://www.youtube.com/embed?v=ptWgufbjURA&list=PLFIM0718LjIWiihbBIq-SWPU6b6x21Q_2&index=5&autoplay=1&mute=1",
            "link6" => "https://www.youtube.com/embed?v=ePBWUZRQdrI&list=PLFIM0718LjIWiihbBIq-SWPU6b6x21Q_2&index=6&autoplay=1&mute=1",
            "link7" => "https://www.youtube.com/embed?v=aC6MJgsxgrk&list=PLFIM0718LjIWiihbBIq-SWPU6b6x21Q_2&index=9&autoplay=1&mute=1",
            "link8" => "https://www.youtube.com/embed?v=xXc6Ti7qwi0&list=PLFIM0718LjIWiihbBIq-SWPU6b6x21Q_2&index=10&autoplay=1&mute=1"
        ]);
    });
    Route::get('/fullstack', function(){
        return view('fullstack');
    });
    Route::get('/android', function(){
        return view('android');
    });
    Route::get('/ios', function(){
        return view('ios');
    });
    Route::get('/dataeng', function(){
        return view('dataeng');
    });
    Route::get('/uiux', function(){
        return view('uiux');
    });
});

Route::get('/weblab', function(){
    return view('weblab');
});
Route::get('/codelab', function(){
    return view('codelab');
});

Route::get('/forums', [PostController::class, 'index']);
Route::get('/forum/{post:slug}', [PostController::class, 'show']);
Route::middleware(['auth'])->group(function(){
    Route::post('/forums', [PostController::class, 'store']);
    Route::get('/forum/{post:slug}/edit', [PostController::class, 'edit']);
    Route::patch('/forum/{post:slug}/update', [PostController::class, 'update']);
    Route::delete('/forum/{post:slug}/delete', [PostController::class, 'destroy']);
    Route::get('/create', [PostController::class, 'create']);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');

Route::resource("/forum/reply", PostReplyController::class)->middleware('auth');
