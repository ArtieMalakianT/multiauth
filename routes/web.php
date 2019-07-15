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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function(){
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminHomeController@index')->name('admin.dashboard');      
    Route::get('/post', 'Admin\PostController@showForm');
    Route::get('/post/list', 'Admin\PostController@showPosts');
    Route::post('/post', 'Admin\PostController@submitForm');

    Route::get('/alunos', 'Admin\AlunoController@showAlunos');
    Route::get('/aluno/matricular/{id}','Admin\AlunoController@formMatricula');
    
});

