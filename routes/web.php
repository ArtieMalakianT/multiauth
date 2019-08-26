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

Route::get('/','Home\WelcomeController@index');
Route::post('/mail/contact','Home\WelcomeController@contatoMail');
Route::post('/mail/curso','Home\WelcomeController@interesseMail');
Route::get('/curso/{idPacote}','Home\WelcomeController@showCurso');
Route::post('/wekness/comment','Home\WelcomeController@receiveComment');
Route::get('/galerias','Home\WelcomeController@showGalerias');
Route::get('/galeria/fotos','Home\WelcomeController@showFotos');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function(){
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminHomeController@index')->name('admin.dashboard'); 
    Route::get('/password/reset','Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.reset');
    Route::post('/password/email','Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    
    
    Route::get('/post', 'Admin\PostController@showForm');
    Route::get('/post/edit/{idPost}','Admin\PostController@showForm');
    Route::get('/post/list', 'Admin\PostController@showPosts');
    Route::post('/post', 'Admin\PostController@submitForm');
    Route::delete('/post/delete', 'Admin\PostController@Delete');

    Route::get('/alunos', 'Admin\AlunoController@showAlunos');
    Route::get('/aluno/matricular/{id}','Admin\AlunoController@formMatricula');
    Route::post('/aluno/matricular','Admin\AlunoController@matricular');
    Route::get('/aluno/show/matriculas/{id}','Admin\AlunoController@showMatriculas');
    Route::get('/aluno/delete/matricula/{id}','Admin\AlunoController@deleteMatricula');
    Route::get('/aluno/edit/matricula/{id}','Admin\AlunoController@formEditMatricula');
    Route::put('/aluno/matricula/update','Admin\AlunoController@updateMatricula');
    Route::get('/aluno/edit/historico/{idMatricula}','Admin\AlunoController@formHistorico');
    Route::post('/aluno/historico','Admin\AlunoController@salvarHistorico');
    
    Route::get('/cursos', 'Admin\CursosController@showForm');
    Route::get('/cursos/listar', 'Admin\CursosController@showAll');
    Route::get('/cursos/edit/{id}', 'Admin\CursosController@formUpdate');
    Route::post('/cursos', 'Admin\CursosController@formSubmit');
    Route::post('/cursos/update', 'Admin\CursosController@Update');
    Route::delete('/curso/delete', 'Admin\CursosController@delete');

    Route::get('/categorias/listar','Admin\CategoriasController@showAll');
    Route::get('/categorias','Admin\CategoriasController@showForm');    
    Route::get('/categoria/edit/{id}','Admin\CategoriasController@showEditCatForm');
    Route::put('/categoria/update','Admin\CategoriasController@updateCategoria');
    Route::delete('/categoria/delete','Admin\CategoriasController@deleteCategoria');
    Route::post('/categorias','Admin\CategoriasController@formSubmit');    

    Route::get('/subCategoria/{catId}','Admin\CategoriasController@showForm');
    Route::put('/subCategoria/update','Admin\CategoriasController@updatesubCategoria');
    Route::get('/subCategoria/edit/{id}','Admin\CategoriasController@showEditSubCatForm');
    Route::delete('/subCategoria/delete','Admin\CategoriasController@deleteSub');
    Route::post('/subCategoria/{catId}','Admin\CategoriasController@formSubmit');

    Route::get('/pacotes/listar/{id_cat}','Admin\PacotesController@showAll');
    Route::get('/pacotes/{id_cat}','Admin\PacotesController@showForm');  
    Route::get('/pacotes/edit/{id}','Admin\PacotesController@formUpdate');     
    Route::post('/pacotes','Admin\PacotesController@formSubmit');    
    Route::post('/pacotes/update','Admin\PacotesController@Update');
    Route::delete('/pacote/delete','Admin\PacotesController@Delete');

    Route::get('/register','Admin\AdminController@index');
    Route::post('/register','Admin\AdminController@register');

    Route::get('/perfil','Admin\AdminController@perfil');
    Route::post('/perfil','Admin\AdminController@changePhoto');

    Route::get('/comments','Admin\CommentsController@showAll');
    Route::get('/comment/accept/{id}','Admin\CommentsController@acceptComment');
    Route::delete('/comment/delete','Admin\CommentsController@deleteComment');

    Route::prefix('layout')->group(function(){
        Route::get('/banners','Admin\Layout\BannerController@showAll');
        Route::get('/banners/create','Admin\Layout\BannerController@showForm');
        Route::post('/banners/create','Admin\Layout\BannerController@saveBanner');
        Route::delete('/banner/delete','Admin\Layout\BannerController@Delete');
        Route::get('/banner/update/{id}','Admin\Layout\BannerController@showUpdateForm');
        Route::put('/banner/update','Admin\Layout\BannerController@update');

        Route::get('/galerias','Admin\Layout\GaleriaController@showDirectories');
        Route::get('/galeria/create','Admin\Layout\GaleriaController@showCreateForm');
        Route::post('/galeria/create','Admin\Layout\GaleriaController@create');
        Route::get('/galeria/edit/{nomeGaleria}','Admin\Layout\GaleriaController@showUpdateForm');
        Route::put('/galeria/update','Admin\Layout\GaleriaController@update');
        Route::get('/galeria/fotos','Admin\Layout\GaleriaController@showFotos');
        Route::delete('/galeria/delete','Admin\Layout\GaleriaController@delete');

        Route::delete('/foto/delete','Admin\Layout\FotosController@delete');
        Route::post('/fotos/upload','Admin\Layout\FotosController@upload');

        Route::get('/videos','Admin\Layout\VideosController@showAll');
        Route::get('/video/create','Admin\Layout\VideosController@showCreateForm');
        Route::post('/video/validate','Admin\Layout\VideosController@validateForm');
        Route::get('/video/edit/{id}','Admin\Layout\VideosController@showUpdateForm');
    });
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