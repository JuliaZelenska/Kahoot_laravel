<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', [
    'as' => 'test',
    'uses' => 'Controller@getQuiz',
]);

Route::get('/play-quiz', [
    'as' => 'get-play-quiz',
    'uses' => 'Controller@getQuizList',
]);

Route::get('/quiz-list', [
    'as' => 'quiz-list',
    'uses' => 'Controller@getQuizList',
]);

Route::group(['middleware' => 'auth'], function () {

    Route::prefix('quiz')->group(function () {

        Route::get('edit', [
            'as' => 'edit',
            'uses' => 'Controller@getQuestion',
        ]);

        Route::post('new-question', [
            'as' => 'post-create-next-question',
            'uses' => 'Controller@postSaveQuestion'
        ]);

        Route::post('save', [
            'as' => 'post-save-quiz',
            'uses' => 'Controller@postSaveQuiz'
        ]);

        Route::prefix('create')->group(function () {

            Route::get('', [
                'as' => 'create-quiz',
                'uses' => 'Controller@getCreateQuiz',
            ]);

            Route::get('name', [
                'as' => 'create-quiz-name',
                'uses' => 'Controller@getCreateQuizName',
            ]);
        });
    });

    Route::post('/play-quiz', [
        'as' => 'post-play-quiz',
        'uses' => 'Controller@postPlayQuiz'
    ]);
    Route::post('/name-quiz', [
        'as' => 'post-create-quiz-name',
        'uses' => 'Controller@postQuizName'
    ]);
    Route::post('/edit', 'Controller@postUpdate');
});

Route::get('get-quiz', [
    'uses' => 'Controller@getQuiz',
    'as' => 'api-get-quiz'
]);

Route::get('get-quiz', [
    'uses' => 'Controller@getQuiz',
    'as' => 'api-get-quiz'
]);

Route::post('check-question', [
    'uses' => 'Controller@postCheckQuestion',
    'as' => 'api-post-check-question'
]);