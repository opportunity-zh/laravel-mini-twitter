<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MessageController;
use App\Http\Controllers\CommentController;

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
    return view('welcome');
});


// messages
Route::get('/messages', [MessageController::class, 'showAll']);
Route::get('/message/{id}', [MessageController::class, 'details']);
Route::delete('/message/{id}', [MessageController::class, 'delete']);
Route::post('/create', [MessageController::class, 'create']);

// comments
Route::post('comment', [CommentController::class, 'addComment']);


 