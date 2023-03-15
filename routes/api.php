<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/select', function () {
    return ['msg'=> 'Dados do banco TESTE'];
});

Route::get('/selectAll', function () {
    $results = DB::select('SELECT * FROM allquestions');
    return response()->json($results);
});

Route::get('/selectRandom', function () {
    $results = DB::select('SELECT * FROM questions_random');
    return response()->json($results);
});


