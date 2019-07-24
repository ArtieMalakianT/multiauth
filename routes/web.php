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
    Route::get('/post/edit/{idPost}','Admin\PostController@showForm');
    Route::get('/post/list', 'Admin\PostController@showPosts');
    Route::post('/post', 'Admin\PostController@submitForm');

    Route::get('/alunos', 'Admin\AlunoController@showAlunos');
    Route::get('/aluno/matricular/{id}','Admin\AlunoController@formMatricula');
    
    Route::get('/cursos', 'Admin\CursosController@showForm');
    Route::get('/cursos/listar', 'Admin\CursosController@showAll');
    Route::get('/cursos/edit/{id}', 'Admin\CursosController@formUpdate');
    Route::post('/cursos', 'Admin\CursosController@formSubmit');
    Route::post('/cursos/update', 'Admin\CursosController@Update');

    Route::get('/categorias/listar','Admin\CategoriasController@showAll');
    Route::get('/categorias','Admin\CategoriasController@showForm');
    Route::post('/categorias','Admin\CategoriasController@formSubmit');
    Route::get('/subCategoria/{catId}','Admin\CategoriasController@showForm');
    Route::post('/subCategoria/{catId}','Admin\CategoriasController@formSubmit');

    Route::get('/pacotes/listar/{id_cat}','Admin\PacotesController@showAll');
    Route::get('/pacotes/{id_cat}','Admin\PacotesController@showForm');  
    Route::get('/pacotes/edit/{id}','Admin\PacotesController@formUpdate');     
    Route::post('/pacotes','Admin\PacotesController@formSubmit');    
    Route::post('/pacotes/update','Admin\PacotesController@Update');

    Route::get('/register','Admin\AdminController@index');
    Route::post('/register','Admin\AdminController@register');

    Route::get('/perfil','Admin\AdminController@perfil');
    Route::post('/perfil','Admin\AdminController@changePhoto');
});

Route::prefix('blog')->group(function(){
    Route::get('/','Home\BlogController@index');
    Route::get('/filter/{idCat}','Home\BlogController@filter');
    Route::get('/show/post/{idPost}','Home\BlogController@showPost');
    Route::get('/search/{id}','Home\BlogController@search');
    Route::post('/search','Home\BlogController@search');    
});
Route::prefix('home')->group(function(){
    Route::post('/photo','User\UserController@changePhoto');
});

Route::prefix('ajax')->group(function(){
    Route::get('/subCat/{idCat}','Admin\PostController@getSubCat');
});