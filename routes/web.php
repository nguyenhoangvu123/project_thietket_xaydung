<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\PostController;
use App\Http\Controllers\Client\AdviceController;
use App\Http\Controllers\Client\ContactController;
use App\Http\Controllers\Client\CategoryController;
use App\Http\Controllers\Client\IntroduceController;
use App\Http\Controllers\Client\AccountingController;
use App\Http\Controllers\Client\CommentIntroduceController;

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

Route::get('/', [HomeController::class, 'index'])->name('client.home');