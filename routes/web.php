<?php

use Illuminate\Support\Facades\Route;
// use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\MainController;

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
    return view('home');
});

Route::get('/post_project', function () {
    return view('postProject');
});

Route::get('/freelancers', function () {
    return view('findFreelancer');
});

Route::get('/browse-jobs', function () {
    return view('browsejobs');
});

Route::get('/workstream', function () {
    return view('workstream');
});

Route::get('/payment', function () {
    return view('payment');
});

Route::get('/edit_profile', function () {
    return view('editProfile');
});


Route::get('/logout', [MainController::class, 'logout']);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
