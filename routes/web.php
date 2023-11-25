<?php

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
    $logo = Logo::where('active', 1)->first(); // Assuming 'active' is a boolean field
//dd($logo);
    return view('welcome')->with('logo', $logo);
});

Route::get('login', [SessionController::class, 'index'])->middleware('guest');
Route::post('login', [SessionController::class, 'store'])->middleware('guest');

Route::post('logout', [SessionController::class, 'destroy'])->middleware('auth');
