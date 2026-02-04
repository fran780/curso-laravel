<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return 'Pagina de inicio';
});

Route::get('/notas', function () {
    $notes = [
        'Primera nota',
        'Segunda nota',
        'Tercera nota',
        'Cuarta nota',
        'Quinta nota',
        '<script>alert("Codigo malicioso")</script>' /*este es un ejemplo de inyeccion de codigo malicioso, es uno de los mayores riesgos si se decide usar php plano*/,
    ];

    return view('notes.index')->with('notes', $notes);
});

Route::get('/notas/{id}', function ($id) {
    return 'Detalles de la nota: ' . $id;
})->whereNumber('id');

Route::get('notas/crear', function () {
    return view('notes.create');
});

Route::get('/notas/{id}/editar', function ($id) {
    return 'Editar nota: ' . $id;
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