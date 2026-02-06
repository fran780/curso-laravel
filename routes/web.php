<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB; // Agregar esta línea para usar el facade DB
use App\Models\Note;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

Route::get('/home', function () {
    return 'Pagina de inicio';
});

Route::get('/notas', function () {
    $notes = Note::query()
        ->orderByDesc('id')
        ->get();


    return view('notes.index')->with('notes', $notes);
})->name('notes.index');

Route::post('/notas', function (Request $request) {
    $request->old('title'); //sirve para recuperar el valor anterior del campo 'title' en caso de que la validación falle y se redirija de nuevo al formulario

    $request->validate([
        'title' => ['required', 'min:3', Rule::unique('notes', 'title')], //esto es para validar que el título sea único en la tabla 'notes' y que tenga al menos 3 caracteres
        'content' => 'required',
    ]);
    Note::create([ 
        'title' => $request->input('title'), 
        'content' => $request->input('content'), // esto es asi porque en aqui se llama a el un campo que no es estatico sino con un objeto
    ]);
    return back(); //redirecciona a la pagina anterior
})->name('notes.store'); /*esta ruta es para procesar el formulario de creación de notas, es cuando se usan notas de tipo recurso*/

Route::get('/notas/crear', function () {
    return view('notes.create');
})->name('notes.create');/*cuando a veces de error y no llame a la ruta esperada ubicar en el orden correcto las rutas*/

Route::get('/notas/{id}/editar', function ($id) {
    $note = Note::findOrFail($id); //con esto me aseguro de obtener la nota o lanzar un error 404 evitando el uso de abort_if
    /*dd($note); //sirve para hacer debug y ver el contenido de la variable*/
    return 'Editar nota: ' . $note->title;
})->name('notes.edit');

Route::get('/notas/{id}', function ($id) {
    $note = DB::table('notes')->find($id); //sirve para buscar una nota por su ID
    abort_if($note === null, 404);
    return 'Detalles de la nota: ' . $id;
})->name('notes.view');