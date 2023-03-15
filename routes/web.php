<?php

use Illuminate\Support\Facades\DB;
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

Route::get('/selectAll', function () {
    $results = DB::select('SELECT * FROM allquestions');
    return response()->json($results);
});

Route::get('/selectRandom', function () {
    $results = DB::select('SELECT * FROM questions_random');
    return response()->json($results);
});