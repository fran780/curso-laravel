<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB; // Agregar esta línea para usar el facade DB

Route::get('/notes', function () {
    return 'Pagina de inicio';
});

Route::get('/notas', function () {
    // Obtener todas las notas de la base de datos de las mas recientes a las mas antiguas
    $notes = DB::table('notes')->latest()->get();

    return view('notes.index')->with('notes', $notes);
})->name('notes.index');

Route::get('/notas/crear', function () {
    return view('notes.create');
})->name('notes.create');/*cuando a veces de error y no llame a la ruta esperada ubicar en el orden correcto las rutas*/

//Obtener la nota dinamica de la base de datos como lo que se hizo en el note.edit ademas de poner el abort_if con el error 404 aqui en este caso para la vista de ver nota

Route::get('/notas/{id}', function ($id) {
    $note = DB::table('notes')->find($id); //sirve para buscar una nota por su ID
    abort_if($note === null, 404); 
    return 'Detalles de la nota: ' . $id;
})->name('notes.view');

Route::get('/notas/{id}/editar', function ($id) {
    $note = DB::table('notes')->find($id); //sirve para buscar una nota por su ID
    abort_if($note === null, 404); //si la nota no existe, mostrar error 404 es mas conveniente que un error 500, ya que el error 404 indica que el recurso no se encontró, mientras que el error 500 indica un error interno del servidor.
    /*dd($note); //sirve para hacer debug y ver el contenido de la variable*/
    return 'Editar nota: ' .$note->title;
})->name('notes.edit');
