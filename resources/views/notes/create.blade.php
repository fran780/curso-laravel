@extends('layouts.app') <!-- con el extends se hereda una plantilla principal que en este caso es la app.blade.php -->

@section('title', 'Crear Nota')

@section('content') <!-- con el section se define una seccion que en este caso es la seccion content que esta en la plantilla principal app.blade.php -->

        <main class="content">
            <div class="cards">
                <div class="card card-center">
                    <div class="card-body">
                        <h1>Nueva nota</h1>

                        <form action="">
                            <label for="title" class="field-label">Título: </label>
                            <input type="text" name="title" id="title" class="field-input">

                            <label for="content" class="field-label">Contenido:</label>
                            <textarea name="content" id="content" rows="10" class="field-textarea"></textarea>

                            <button type="submit" class="btn btn-primary">Crear nota</button>
                        </form>
                    </div>
                </div>
            </div>
        </main>

@endsection