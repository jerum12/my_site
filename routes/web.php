<?php

use App\Http\Controllers\ContactController;
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

Route::get('/', function () {
    return view("index")->with("active","home");
});

Route::get('/about', function () {
    return view('about')->with("active","about");
});

Route::get('/projects', function () {
    return view('projects')->with("active","projects");
});

// Route::get('/contact', function () {
//     return view('contact')->with("active","contact");
// });

Route::get('contact', [ContactController::class, 'index']);
Route::post('contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('contact-us', [ContactController::class, 'index2']);
Route::post('contact-us', [ContactController::class, 'store2'])->name('contact.store2');



