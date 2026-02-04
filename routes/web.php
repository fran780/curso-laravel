<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return 'Pagina de inicio';
});

Route::get('/notas', function () {
    return view('notes.index'); // retorna la vista resources/views/notas/index.blade.php
});

Route::get('/notas/{id}', function ($id) {
    return 'Detalles de la nota: ' .$id;
})->whereNumber('id');

Route::get('notas/crear/form', function () {
    return view('notes.create'); 
}); 

Route::get('/notas/{id}/editar', function ($id) {
    return 'Editar nota: ' .$id;
});

Route::get('cursos', function () {
    return [
    'Cursos' =>
        [
            'Curso de Laravel 10',
            'Curso de programacion orientada a objetos',
            'Curso de Git y Github'
        ]
    ];
});