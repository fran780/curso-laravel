<?php

use Illuminate\Support\Facades\Route;

Route::get('/notes', function () {
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
})->name('notes.index');

Route::get('/notas/crear', function () {
    return view('notes.create');
})->name('notes.create');                          /*cuando a veces de error y no llame a la ruta esperada ubicar en el orden correcto las rutas*/ 

Route::get('/notas/{id}', function ($id) {
    return 'Detalles de la nota: ' .$id;
})->name('notes.view'); 

Route::get('/notas/{id}/editar', function ($id) {
    return 'Editar nota: '.$id;
})->name('notes.edit'); // sirve para nombrar la ruta y luego referenciarla en los enlaces
//->where('id', '[0-9]+'); // expresion regular para que solo acepte numeros en el id