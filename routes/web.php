<?php

use App\Http\Controllers\ProfileController;
use App\Models\Homepage_line;
use App\Models\Logo;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;


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
    $logo = Logo::where('active', 1)->first();
    $sentences = Homepage_line::all();
//    $sentences = [
//        'Looking good today, '. Auth::user()->first_name,
//        'Caught you in 4k.',
//        'Have you programmed today?',
//        'What color is your Bugatti?',
//        'Keep on searching, '. Auth::user()->first_name,
//        'Wanna hop in a vc call?',
//        'ERROR: $love has not been found',
//        'Are you an exception? Let me catch you.',
//        'Are you sitting on the F5 key, cuz your ass is refreshing.',
//        'Be the hard drive of my dreams',
//        'Hey baby, let me hack your kernel. ',
//        'Happy hunting!',
//        'What do you wanna tell Joe Biden right now?',
//        'Wassup baby, take me out to dinner..?',
//        'I LOVE ANIME BTW',
//        'I AM A DISCORD ADMIN BTW haha RIZZZZZZ',
//        'My name is jeff',
//    ];

    $random = rand(0, count($sentences) - 1);
    $line = $sentences[$random];
    return view('welcome', compact( 'line', 'logo'));
});

Route::get('login', [SessionController::class, 'index'])->middleware('guest');
Route::post('login', [SessionController::class, 'store'])->middleware('guest');
Route::get('register', [SessionController::class, 'show'])->middleware('guest');

Route::post('logout', [SessionController::class, 'destroy'])->middleware('auth');

Route::get('profile', [ProfileController::class, 'index'])->middleware('auth');
Route::post('profile', [ProfileController::class, 'update'])->middleware('auth');
