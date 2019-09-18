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
    $options = [
        'id' => '1',
        'label' => 'Evers',
        'children' => [
            [
                'id' => '2',
                'label' => 'Series01',
            ],
            [
                'id' => '3',
                'label' => 'Series02',
            ]
        ]
    ];

    $options = json_encode($options);

   return view('welcome')->with(compact('options'));
})->name('home');

Route::get('series', function () {

    $options = [
        'id' => '1',
        'label' => 'Evers',
    ];

    $options = json_encode($options);

   return view('series.index')->with(compact('options'));
})->name('series');
