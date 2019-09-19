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

   return view('collections.index')->with(compact('options'));
})->name('home');

Route::get('series', function () {

    $options = [
        'id' => '1',
        'label' => 'Evers',
    ];

    $options = json_encode($options);

   return view('series.index')->with(compact('options'));
})->name('series');
