<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'App de Notas')</title>  <!-- con el yield se define un espacio que puede ser llenado por una seccion de otra plantilla que herede esta plantilla principal -->
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
                        <a href="/notas" class="main-nav-link">
                            <i class="icon icon-th-list"></i>
                            <span>Ver notas</span>
                        </a>
                    </li>
                    <li class="main-nav-item active">
                        <a href="/notas/crear" class="main-nav-link">
                            <i class="icon icon-pen"></i>
                            <span>Nueva nota</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </header>

        @yield('content')

        <footer class="foot">
            <div class="ad">
                <p>
                    Esta aplicación es desarrollada en el curso
                    <a href="https://styde.net/laravel-10">Cursos de Laravel 10</a>.
                </p>
            </div>
            <div class="license">
                <p>© 2019 Derechos Reservados - Styde Limited</p>
            </div>
        </footer>
    </div>
</body>

</html>
