<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Note;

class NoteController extends Controller //un controlador es una clase que se encarga de manejar las solicitudes HTTP relacionadas con un recurso, en este caso, las notas. 
{
    public function index()
    {
        $notes = Note::query()
            ->orderByDesc('id')
            ->get();

        return view('notes.index')->with('notes', $notes);
    }

    public function show(int $id)
    {
        return 'Detalles de la nota: ' . $id;
    }

    public function create()
    {
        return view('notes.create');
    }

    public function store(Request $request)
    {
        $request->old('title'); //sirve para recuperar el valor anterior del campo 'title' en caso de que la validación falle y se redirija de nuevo al formulario

        $request->validate([
            'title' => ['required', 'min:3', Rule::unique('notes', 'title')], //esto es para validar que el título sea único en la tabla 'notes' y que tenga al menos 3 caracteres
            'content' => 'required',
        ]);
        Note::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'), // esto es asi porque en aqui se llama a el un campo que no es estatico sino con un objeto
        ]);
        return to_route('notes.index'); //esto es para redirigir a la ruta 'notes.index' después de crear una nueva nota
    }

    public function edit($id)
    {
        $note = Note::findOrFail($id); //con esto me aseguro de obtener la nota o lanzar un error 404 evitando el uso de abort_if
        /*dd($note); //sirve para hacer debug y ver el contenido de la variable*/
        return 'Editar nota: ' . $note->title;
    }
}
