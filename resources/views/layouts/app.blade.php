<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'App de notas' }}</title> <!-- con esto se define un titulo dinamico que se puede pasar desde la plantilla que use este layout, si no se pasa nada entonces se muestra el titulo por defecto -->
    <link rel="stylesheet" type="text/css" href= "{{ asset('css/app.css') }}">  
    <!-- Ruta relativa al archivo CSS en caso de que falle, por eso se ponen los ../ en caso de que se agregue un tercer archivo a la ruta pues entonces solo deja con / o sea a partir del dominio -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Ademas ahora se le puso un asset que lo hace es completar la ruta correcta por mi -->
</head>

<body>
    <div class="wrap">
        <header class="head">
            <a href="#" class="logo"></a>

            <nav class="main-nav">
                <ul class="main-nav-list">
                    <li class="main-nav-item">
                        <a href="{{ route('notes.index') }}" class="main-nav-link"> <!-- con el helper url se genera la url completa a partir de la ruta dada -->
                            <i class="icon icon-th-list"></i>
                            <span>Ver notas</span>
                        </a>
                    </li>
                    <li class="main-nav-item active">
                        <a href="{{ route('notes.create') }}" class="main-nav-link">
                            <i class="icon icon-pen"></i>
                            <span>Nueva nota</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </header>

        {{ $slot }} <!-- con esto se define un espacio que puede ser llenado por el contenido de otra plantilla que use este componente de layout, imprime el contenido de la variable -->

        <footer class="foot">
            <div class="ad">
                <p>
                    Esta aplicación es desarrollada en el curso
                    <a href="https://styde.net/laravel-10">Cursos de Laravel 10</a>.
                </p>
            </div>
            <div class="license">
                <p>© {{ $currentYear }} Derechos Reservados - Styde Limited</p> <!-- con date se imprime el año actual -->
            </div>
        </footer>
    </div>
</body>

</html>
