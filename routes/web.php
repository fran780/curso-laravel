<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return 'Pagina de inicio';
});

Route::get('/notas', function () {
    return 'Listado de notas';
});

Route::get('/notas/{id}', function ($id) {
    return 'Detalles de la nota: ' .$id;
})->whereNumber('id');

Route::get('notas/crear', function () {
    return 'Crear nueva nota';
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