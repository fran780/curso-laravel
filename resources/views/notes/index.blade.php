<x-layout>

    <x-slot name="title">Listado de notas</x-slot> <!-- con esto se define el contenido de la variable title que se usa en el componente layout para el titulo de la pagina -->

        <main class="content">
            <div class="cards">

                @forelse($notes as $note)
                <div class="card card-small">
                    <div class="card-body">
                        <h4> {{ $note }} </h4>  <!-- htmlentities sirve para evitar codigo malicioso -->

                       {{ rand(1, 1000) }} 

                        <p>
                             {{ $note }} <!-- con los !! se desactiva la proteccion contra codigo malicioso y se puede imprimir de manera forzada --> 
                        </p>
                    </div>

                    <footer class="card-footer">
                        <a href= {{route ('notes.edit',['id' => $loop->iteration]) }} class="action-link action-edit"> <!-- se usa el helper route para generar la url a partir del nombre de la ruta y se pasa el id como parametro usando el array asociativo, ademas se usa $loop->iteration para obtener el indice actual del ciclo empezando desde 1 -->
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

              
              <div class="cards">
                <div class="card card-small">
                    <div class="card-body">
                        <h4>Aprendiendo Blade</h4>

                        @verbatim <!--verbatim sirve para que imprima todo en texto plano -->

                        <p>
                         Para imprimir una variable con Blade se utilza esta sintaxis: <br>
                         {{ $mi_variable }}
                        </p>

                        <p> Las directivas de Blade siempre empiezan con @, por ejemplo: </p>
                        @foreach

                        @endverbatim


                    </div>
                    <footer class="card-footer">
                        <a class="action-link action-edit">
                            <i class="icon icon-pen"></i>
                        </a>
                        <a class="action-link action-delete">
                            <i class="icon icon-trash"></i>
                        </a>
                    </footer>
                </div>



                <div class="card">
                    <div class="card-body">
                        <h4>Instalación de Laravel</h4>

                        <p>
                            Hay 2 formas de instalar Laravel: la primera es a través con Composer,
                            la cual te permite instalar una versión específica de Laravel:
                        </p>

                        <pre>composer create-project laravel/laravel curso-laravel-styde "6.*"</pre>

                        <p>La segunda es con el instalador de Laravel, la cual instalará la versión actual del framework:</p>

                        <pre>laravel new curso-laravel-styde</pre>
                    </div>

                    <footer class="card-footer">
                        <a class="action-link action-edit">
                            <i class="icon icon-pen"></i>
                        </a>
                        <a class="action-link action-delete">
                            <i class="icon icon-trash"></i>
                        </a>
                    </footer>
                </div>
                <div class="card card-big">
                    <div class="card-body">
                        <h4>Rutas y JSON</h4>

                        <p>
                            Recuerda que si retornas un arreglo en una ruta, Laravel lo va a convertir en JSON automáticamente:
                        </p>

                        <pre>
    &lt;?php

    Route::get('/', function () {
        return [
            'Cursos' => [
                'Primeros pasos con Laravel',
                'Crea un panel de control con Laravel',
            ]
        ];
    });
</pre>

                        <p>Producirá el siguiente resultado:</p>

                        <code>{"Cursos":["Primeros pasos con Laravel","Crea un panel de control con Laravel"]}</code>
                    </div>

                    <footer class="card-footer">
                        <a class="action-link action-edit">
                            <i class="icon icon-pen"></i>
                        </a>
                        <a class="action-link action-delete">
                            <i class="icon icon-trash"></i>
                        </a>
                    </footer>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4>Front Controller</h4>
                        <p>
                            Front Controller es un patrón de arquitectura donde un controlador
                            maneja todas las solicitudes o peticiones a un sitio web.
                        </p>
                    </div>

                    <footer class="card-footer">
                        <a class="action-link action-edit">
                            <i class="icon icon-pen"></i>
                        </a>
                        <a class="action-link action-delete">
                            <i class="icon icon-trash"></i>
                        </a>
                    </footer>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4>Cambia el formato de parámetros dinámicos</h4>
                        <p>
                            Puedes colocar el siguiente código en el método <code>boot</code>
                            de <code>app/Providers/RouteServiceProvider.php</code>
                            para restringir cualquier parámetro de las rutas a un formato numérico:
                        </p>

                        <pre>Route::pattern('nombre-del-parametro', '\d+');</pre>

                        <p>Puedes por supuesto usar otras expresiones regulares para restringir a otros formatos.</p>
                    </div>

                    <footer class="card-footer">
                        <a class="action-link action-edit">
                            <i class="icon icon-pen"></i>
                        </a>
                        <a class="action-link action-delete">
                            <i class="icon icon-trash"></i>
                        </a>
                    </footer>
                </div>
            </div>
        </main>
</x-layout>