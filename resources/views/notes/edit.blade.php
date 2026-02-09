<x-layout>

    <x-slot:title>Editar nota</x-slot:title>
    <!-- con esto se define el contenido de la variable title que se usa en el componente layout para el titulo de la pagina -->

    <main class="content">
        <div class="cards">
            <div class="card card-center">
                <div class="card-body">
                    <h1>Editar nota</h1>

                    @if ($errors->any())
                        <div class="errors">
                            <p><strong>El formulario contiene errores, por favor corrigelos e intenta
                                    nuevamente:</strong></p>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>

                        </div>
                    @endif

                     <form action="{{ route('notes.update', ['id' => $note->id]) }}" method="POST">
                        <!-- route('notes.store') es una funcion de laravel que genera la url de la ruta notes.store definida en web.php -->
                        @csrf

                        @method('PUT')

                        <label for="title" class="field-label">Titulo</label> <!-- para mostrar el texto del campo title en el idioma configurado en la aplicación, se usa la función lang con esa sintaxis de blade para poder hacer referencia al lenguaje deseado -->
                        <!-- aqui se usa la funcion lang con esa sintaxis de blade para poder hacer referencia al lenguaje deseado -->
                        <input type="text" name="title" id="title" value="{{ old('title', $note->title) }}" class="field-input @error('title') field-error @enderror">
                        <!-- aqui se agrega una clase condicional field-error si hay un error de validacion en el campo title -->

                        <!-- este error sirve para validaciones donde se muestra un mensaje al tener el campo vacio -->
                        @error('title')
                            <p class="error-message">{{ $message }}</p>
                        @enderror

                        <label for="content" class="field-label">Contenido:</label>
                     <textarea name="content" id="content" rows="10" class="field-textarea @error('content') field-error @enderror">{{ old('content', $note->content) }}</textarea>
                        @error('content')
                            <p class="error-message">{{ $message }}</p>
                        @enderror

                        <button type="submit" class="btn btn-primary">Actualizar nota</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
</x-layout>

<!--En este archivo se esta usando el componente layout que es el que contiene la estructura principal de la aplicacion, y dentro del componente se define un espacio con slot que es donde se va a insertar el contenido de este archivo.-->
