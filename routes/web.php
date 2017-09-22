<head>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css">
</head>
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

Route::get('/', function () {
    return view('create_quiz');
});
Route::get('/test', function () {
    return view('welcome1');
});
Route::get('/quiz', function () {
    return view('create_quiz');
});

Route::post('/insert', 'Controller@insert');
