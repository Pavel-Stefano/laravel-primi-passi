<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
})->name('home');

Route::get('/insegnanti', function () {
    $lista = [
        'nome' => 'insegnante',
        'corso' => 'Boolean',
        'lista_insegnanti' => [
            'Clelia Fradella',
            'Donato Riccio',
            'Simone Allegra',
            'Luca Formicola'
        ]
    ];
    return view('insegnanti', $lista);
})->name('insegnanti');


Route::get('/studenti', function () {
    $lista = [
        'nome' => 'Studente',
        'corso' => 'Boolean',
        'lista_studenti' => [
            'Mario Rossi',
            'Luigi Verdi',
            'Luca Bianchi',
            'Silvia Neri',
            'Stefano Russo',
            'Giorgio Ferrari',
            'Eleonora Esposito',
            'Luca Romano',
            'Alfonso Colombo'
        ]
    ];
    return view('studenti', $lista);
})->name('studenti');
