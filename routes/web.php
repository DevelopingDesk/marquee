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
Route::get('/','FrontController@index');
Route::get('/home', 'HomeController@index');
//gallery
Route::get('create/gallery','GalleryController@create')->name('create.gallery');
Route::post('store/gallery','GalleryController@store')->name('store.gallery');
Route::get('delete/gallery/{id}','GalleryController@delete')->name('delete.gallery');
//news

Route::get('news/create','NewsController@create')->name('create.news');
Route::post('news/store','NewsController@upload')->name('store.news');
//inquery
Route::post('store/inquery','ContactController@store')->name('store.inquery');
Route::get('view/inquery','ContactController@viewInquery')->name('view.inquery');
Route::get('delete/inquery/{id}','ContactController@delete')->name('delete.inquery');
//contact
Route::get('create/contact','ContactController@createContact')->name('create.contact');
Route::post('store/contact','ContactController@storeContact')->name('store.contact');
