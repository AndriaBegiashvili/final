<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\http\Controllers\QuizController;
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


Route::get('/register', [AuthController::class, 'registerPage'])->name("register");
Route::post('/register', [AuthController::class, 'register'])->name("registerAction");
Route::get('/login', [AuthController::class, 'loginPage'])->name("login");
Route::post('/login', [AuthController::class, 'login'])->name("loginAction");

Route::middleware("auth")->group(function (){
    Route::get("/logout", [AuthController::class, 'logout'])->name('logout');
    Route::get("/home", [UserController::class, 'homePage'])->name('home');
    Route::get("/quiz/{quiz}", [QuizController::class, 'showQuiz'])->name('quiz');
    Route::get("/mine", [QuizController::class, 'myQuiz'])->name('mine');
    Route::post("/mine", [QuizController::class, 'deletequiz']);
    Route::get("/createq", [QuizController::class, 'createMyQuiz'])->name('createq');
    Route::post("/createq", [QuizController::class, 'quizzAdd']);
    Route::get("/take/{quiz}", [QuizController::class, 'takeQuiz'])->name('take');
    



});