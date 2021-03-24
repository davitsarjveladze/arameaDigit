<?php

Route::resource('contact', 'ContactController');

Route::get('dashboard', 'DashboardController@index')->name('dashboard');
Route::post('iflogined',[\App\Http\Controllers\Api\AtiveService::class, 'User']);
