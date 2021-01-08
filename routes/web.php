<?php
use App\Http\Controllers;
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
    return view('welcome');
});

// Route::get('/teste-twitter', [Controllers\TwitterController::class, 'tweet']);
// Route::get('/teste-twitter-search', [Controllers\TwitterController::class, 'getLastTweets']);
// Route::get('/teste-github', [Controllers\GithubController::class, 'todayDate']);
