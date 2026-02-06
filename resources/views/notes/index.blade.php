<x-layout>

    <x-slot name="title">Listado de notas</x-slot>
    <!-- con esto se define el contenido de la variable title que se usa en el componente layout para el titulo de la pagina -->

    <main class="content">
        <div class="cards">

            @forelse($notes as $note)
                <div class="card card-small">
                    <div class="card-body">
                        <h4> {{ $note->title }} </h4> <!-- htmlentities sirve para evitar codigo malicioso -->

                        <p>
                            {{ $note->content }} <!-- estos ahora son objetos por que vienen de la base de datos -->
                            {{-- {!! $note !!} --}}
                            <!-- con los !! se desactiva la proteccion contra codigo malicioso y se puede imprimir de manera forzada -->
                        </p>

                        <form method="POST" action="{{ route('notes.destroy', $note) }}">
                            @method('DELETE')
                            @csrf
                            <button>Eliminar</button>
                        </form>

                    </div>

                    <footer class="card-footer">
                        <a href="{{ $note->editUrl() }}" class="action-link action-edit">
                            <!-- con el helper url se genera la url completa a partir de la ruta dada -->
                            <i class="icon icon-pen"></i>
                        </a>
                        <a class="action-link action-delete">
                            <i class="icon icon-trash"></i>
                        </a>
                    </footer>
                </div>

            @empty
                <p>No hay notas disponibles</p>
            @endforelse

            <!--el for else es una estructura de control que permite recorrer un arreglo y mostrar un mensaje en caso de que el arreglo este vacio-->

    </main>
</x-layout>
