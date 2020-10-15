<?php

Route::get('/','PageController@index');

/* Product */
Route::get('/products','PageController@index');
Route::get('/product/create','ProductController@create');
Route::post('/product/create','ProductController@store');
Route::get('/product/{id}/add','PageController@add');
Route::get('/product/cart','PageController@cart');