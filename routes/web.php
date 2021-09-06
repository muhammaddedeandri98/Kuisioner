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


//Master


//Login
Route::get('login',function(){
    return view('pengguna.login');
})->name('login');

Route::post('/postlogin','LoginController@postlogin')->name('postlogin');
Route::get('/logout','LoginController@logout')->name('logout');

Route::group(['middleware' => ['auth','ceklevel::Admin','Super Admin']], function () {
Route::get('/','IndexController@index');
Route::get('/dashboard','IndexController@dashboard');

});
Route::post('/register/save','LoginController@store');
Route::get('/register','LoginController@register');
Route::get('/not_found','LoginController@not_found');
Route::get('/forgot_password','LoginController@forgot');
Route::get('/change_password','LoginController@change_password');


//Admin
Route::get('/dashboard','AdminController@jumlah');

//User
Route::get('/user','UserController@index');
Route::get('/user/create','UserController@create');
Route::post('/user/save','UserController@store');
Route::get('/user/edit/{id}', 'UserController@edit');
Route::get('/user/detail/{id}', 'UserController@detail');
Route::post('/user/update', 'UserController@update');
Route::get('/user/destroy/{id}', 'UserController@destroy');

//Jenis User
Route::get('/jenis_user','JenisUserController@index');
Route::get('/jenis_user/create','JenisUserController@create');
Route::post('/jenis_user/save','JenisUserController@store');
Route::get('/jenis_user/edit/{id}', 'JenisUserController@edit');
Route::get('/jenis_user/detail/{id}', 'JenisUserController@show');
Route::post('/jenis_user/update', 'JenisUserController@update');
Route::get('/jenis_user/destroy/{id}', 'JenisUserController@destroy');

//Question
Route::get('/question','QuestionController@index');
Route::get('/question/create','QuestionController@create');
Route::post('/question/save','QuestionController@store');
Route::get('/question/destroy/{id}', 'QuestionController@destroy');
Route::get('/question/edit/{id}', 'QuestionController@edit');
Route::get('/question/detail/{id}', 'QuestionController@show');
Route::post('/question/update', 'QuestionController@update');

//Answer
Route::get('/answer','AnswerController@index');
Route::get('/answer/create','AnswerController@create');
Route::post('/answer/save','AnswerController@store');
Route::get('/answer/destroy/{id}', 'AnswerController@destroy');
Route::get('/answer/edit/{id}', 'AnswerController@edit');
Route::get('/answer/detail/{id}', 'AnswerController@show');
Route::post('/answer/update', 'AnswerController@update');

//Cabang
Route::get('/cabang','CabangController@index');
Route::get('/cabang/create','CabangController@create');
Route::post('/cabang/save','CabangController@store');
Route::get('/cabang/destroy/{id}', 'CabangController@destroy');
Route::get('/cabang/edit/{id}', 'CabangController@edit');
Route::get('/cabang/detail/{id}', 'CabangController@show');
Route::post('/cabang/update', 'CabangController@update');

//Divisi
Route::get('/divisi','DivisiController@index');
Route::get('/divisi/create','DivisiController@create');
Route::post('/divisi/save','DivisiController@store');
Route::get('/divisi/destroy/{id}', 'DivisiController@destroy');
Route::get('/divisi/edit/{id}', 'DivisiController@edit');
Route::get('/divisi/detail/{id}', 'DivisiController@detail');
Route::post('/divisi/update/{id}', 'DivisiController@update');








