<?php

use Illuminate\Support\Facades\Auth;
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


Auth::routes();
Route::get('/', [App\Http\Controllers\ConversationsController::class, 'index'])->name('home');

Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact');

Route::get('conversations/{conversation}', [App\Http\Controllers\ConversationsController::class, 'show'])->middleware('can:view,conversation');

Route::post('best-replies/{reply}',[App\Http\Controllers\ConversationBestReplyController::class, 'store']);

