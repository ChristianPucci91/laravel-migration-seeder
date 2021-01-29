<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'BrandController@index')
  -> name('brand-index');

Route::get('brand/{id}', 'BrandController@show')
  -> name('brand-show');
