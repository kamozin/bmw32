<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



//Главная
Route::get('/', 'MainController@index');

//Контакты
Route::get('/contact', 'MainController@contact');

//Новости
Route::get('/news', 'NewsController@index');


//Вопросы и ответы
Route::get('/faq', 'FaqController@index');

//Акции
Route::get('/actions', 'ActionsController@index');
//Авторизация в админку
Route::auth();


//Админка
Route::get('/admin', 'Admin\HomeController@index');

//Настройки

Route::get('/admin/settings', 'Admin\SettingsController@index');
Route::post('/admin/settings/update', 'Admin\SettingsController@update');

//Страницы
Route::get('/admin/page', 'Admin\PageController@show');
Route::get('/admin/page/store', 'Admin\PageController@store');
Route::post('/admin/page/create', 'Admin\PageController@create');
Route::post('/admin/page/update', 'Admin\PageController@update');
Route::get('/admin/page/edit/{id}', 'Admin\PageController@edit');



//Страницы сайта
Route::get('/{page}', 'PageController@index');