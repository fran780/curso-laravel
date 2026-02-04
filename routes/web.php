<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return 'Pagina de inicio';
});

Route::get('/notas/listado', function () {
    $notes = [
        'Primera nota',
        'Segunda nota',
        'Tercera nota',
        'Cuarta nota',
        'Quinta nota',
        '<script>alert("Codigo malicioso")</script>' /*este es un ejemplo de inyeccion de codigo malicioso, es uno de los mayores riesgos si se decide usar php plano*/,
    ];

    return view('notes.index')->with('notes', $notes);
})->name('notes.index');

Route::get('/notas/{id}', function ($id) {
    return 'Detalles de la nota: ' . $id;
})->name('notes.view'); /*se usa whereNumber para que solo acepte numeros en el id y el name para llamar a esas rutas*/

Route::get('notas/crear', function () {
    return view('notes.create');
})->name('notes.create');

Route::get('/notas/{id}/editar', function ($id) {
    return 'Editar nota: ' . $id;
})->name('notes.edit');