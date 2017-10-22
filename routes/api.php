<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//get pyrania -> przestawianie odpowiedzi

//Route::post('post-quiz', [
//    'uses' => 'Controller@postQuiz',
//    'as' => 'api-post-quiz'
//]);

//sprawdzanie -> liczenie punktow

Route::post('check-question', [
    'uses' => 'Controller@postCheckQuestion',
    'as' => 'check-question'
]);

//route wynik

Route::get('get-result', [
    'uses' => 'Controller@getQuizResult',
    'as' => 'get-result'
]);

//ranking

Route::get('get-ranking', [
    'uses' => 'Controller@getRanking',
    'as' => 'get-ranking'
]);

