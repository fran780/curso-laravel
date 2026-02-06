<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB; // Agregar esta línea para usar el facade DB
use App\Models\Note;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\NoteController;

Route::get('/home', function () {
    return 'Pagina de inicio';
});

Route::get('/notas', [NoteController::class, 'index'])->name('notes.index');

Route::post('/notas', [NoteController::class, 'store'])->name('notes.store');

Route::get('/notas/crear', [NoteController::class, 'create'])->name('notes.create');/*cuando a veces de error y no llame a la ruta esperada ubicar en el orden correcto las rutas*/

Route::get('/notas/{id}/editar', [NoteController::class, 'edit'])->name('notes.edit'); /*esta ruta es para mostrar el formulario de edición de una nota específica, se llama a el controlador NoteController y su método edit, pasando el id de la nota como parámetro*/

Route::get('/notas/{id}', [NoteController::class, 'show'])->name('notes.view'); /*esta ruta es para mostrar los detalles de una nota específica, se llama a el controlador NoteController y su método show, pasando el id de la nota como parámetro*/

Route::put('/notas/{id}', [NoteController::class, 'update'])->name('notes.update'); /* puede tener misma ruta pero con diferentes metodos*/

Route::delete('/notas/{id}', [NoteController::class, 'destroy'])->name('notes.destroy'); /*esta ruta es para eliminar una nota específica, se llama a el controlador NoteController y su método destroy, pasando el id de la nota como parámetro*/