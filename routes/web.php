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

Route::get('/','Home@index')->name('home.index');

Route::group(['prefix' => '/producers'], function () {
    Route::get('/', 'Producers@index')->name('producers.index');
    Route::get('/create', 'Producers@create')->name('producers.create');
    Route::get('/{id}', 'Producers@show')->name('producers.show');
    Route::post('/', 'Producers@store')->name('producers.store');
});

Route::group(['prefix' => '/producerContacts'], function () {
    Route::get('/create', 'ProducerContacts@create')->name('producer-contacts.create');
});

Route::group(['prefix' => '/baskets'], function () {
    Route::get('/', 'Baskets@index')->name('baskets.index');
    Route::get('/create', 'Baskets@create')->name('baskets.create');
    Route::post('/', 'Baskets@store')->name('baskets.store');
});
