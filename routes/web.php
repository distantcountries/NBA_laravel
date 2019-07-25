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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'TeamsController@index');

Route::get('/teams', 'TeamsController@index');
Route::get('/teams/{id}', 'TeamsController@show');

Route::get('/players/{id}', 'PlayersController@show');

Route::get('/register', 'RegisterController@index');
Route::post('/register', 'RegisterController@store');

Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@store');
Route::get('/logout', 'LoginController@destroy');

Route::post('/teams/{team_id}/comments', [
    'as' => 'team-comments',
    'uses' => 'CommentsController@store'
]);

Route::get('/verification/{id}', 'LoginController@verification');

Route::get('/news', 'NewsController@index');

Route::post('/news/create', 'NewsController@store');
Route::get('/news/create', 'NewsController@create');

Route::get('/news/{id}', 'NewsController@show'); 
// '/news/{id}' je ispod '/news/create' jer se dinamicki prosledjuje id

Route::get('/teams/{id}/news','TeamsController@teamNews');






