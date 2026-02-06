<x-layout>

    <x-slot:title>Nueva nota</x-slot:title>
    <!-- con esto se define el contenido de la variable title que se usa en el componente layout para el titulo de la pagina -->

    <main class="content">
        <div class="cards">
            <div class="card card-center">
                <div class="card-body">
                    <h1>Nueva nota</h1>

                    <form action=" {{ route('notes.store') }}" method="POST">
                        <!-- route('notes.store') es una funcion de laravel que genera la url de la ruta notes.store definida en web.php -->
                        @csrf
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
</x-layout>

<!--En este archivo se esta usando el componente layout que es el que contiene la estructura principal de la aplicacion, y dentro del componente se define un espacio con slot que es donde se va a insertar el contenido de este archivo.-->
