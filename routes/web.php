<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB; // Agregar esta línea para usar el facade DB
use App\Models\Note;

Route::get('/notes', function () {
    return 'Pagina de inicio';
});

Route::get('/notas', function () {
    $notes = Note::query()
        ->orderByDesc('id')
        ->get();


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
    $note = Note::findOrFail($id); //con esto me aseguro de obtener la nota o lanzar un error 404 evitando el uso de abort_if
    /*dd($note); //sirve para hacer debug y ver el contenido de la variable*/
    return 'Editar nota: ' .$note->title;
})->name('notes.edit');
