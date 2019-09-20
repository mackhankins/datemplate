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

    return view('collections.index');
})->name('home');

Route::get('series', function () {

    $options = [
        'id' => '1',
        'label' => 'Evers (Medgar Wiley and Myrlie Beasley) Papers, 1900-1994 Z/2231.000',
        'children' => [
            [
                'id' => '01',
                'label' => 'Series 1: Minutes. 1955-1959; n.d.'
            ],
            [
                'id' => '03',
                'label' => 'Series 3: Correspondence Registers. 1955.'
            ],
            [
                'id' => '04',
                'label' => 'Series 4: Telegrams. 1961.'
            ],
            [
                'id' => '05',
                'label' => 'Series 5: Speeches. 1955-1963; n.d.'
            ],
            [
                'id' => '06',
                'label' => 'Series 6: Annual Reports. 1954-1957.'
            ],
            [
                'id' => '07',
                'label' => 'Series 7: Monthly Reports. 1955-1961.'
            ],
            [
                'id' => '08',
                'label' => 'Series 8: Financial Records. 1956-1963'
            ],
            [
                'id' => '09',
                'label' => 'Series 9: Petitions. 1955; n.d'
            ],
            [
                'id' => '10',
                'label' => 'Series 10: Photographs. 1958-1963.'
            ],
            [
                'id' => '11',
                'label' => 'Series 11: Program. 1962.'
            ],
            [
                'id' => '12',
                'label' => 'Series 12: News Releases. 1955-1964; n.d.'
            ],
            [
                'id' => '13',
                'label' => 'Series 13: Newsletters. 1957-1958.'
            ],
            [
                'id' => '15',
                'label' => 'Series 15: Subject Files. ca. 1950s-1960s.'
            ],
            [
                'id' => '16',
                'label' => 'Series 16: Posters, ca. 1959-1963.'
            ],
            [
                'id' => '22',
                'label' => 'Series 22: Personal Records (Medgar W. Evers). 1940-1963.'
            ],
            [
                'id' => '24',
                'label' => 'Series 24: Certificate (Medgar Evers). 1956.'
            ],
            [
                'id' => '25',
                'label' => 'Series 25: Program (Mississippi Regional Council of Negro Leadership). 1955.'
            ],
            [
                'id' => '27',
                'label' => 'Series 27: Photographs (Evers Family). ca. 1900s-1960s; n.d.'
            ],
            [
                'id' => '37',
                'label' => 'Series 37: Speeches (Myrlie Evers). 1963; n.d.'
            ],
        ]
    ];

    $options = json_encode($options);

    return view('series.index')->with(compact('options'));
})->name('series');
