<?php

use Illuminate\Support\Facades\Route;

Route::get('brand', 'BrandController@index')
  -> name('brand-index');

Route::get('brand/{id}', 'BrandController@show')
  -> name('brand-show');

Route::get('headquarter', 'HeadquarterController@index')
  -> name('headquarter-index');

Route::get('headquarter/{id}', 'HeadquarterController@show')
  -> name('headquarter-show');

Route::get('employee', 'EmployeeController@index')
  -> name('employee-index');

Route::get('employee/{id}', 'EmployeeController@show')
  -> name('employee-show');
