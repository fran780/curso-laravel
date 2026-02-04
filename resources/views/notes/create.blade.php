<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" type="text/css" href= "{{ asset('css/app.css')  }}"> <!-- Ruta relativa al archivo CSS en caso de que falle, por eso se ponen los ../ en caso de que se agregue un tercer archivo a la ruta pues entonces solo deja con / o sea a partir del dominio -->
    <meta name="viewport" content="width=device-width, initial-scale=1">     <!-- Ademas ahora se le puso un asset que lo hace es completar la ruta correcta por mi -->
</head>
<body>
    <div class="wrap">
        <header class="head">
            <a href="#" class="logo"></a>

            <nav class="main-nav">
                <ul class="main-nav-list">
                    <li class="main-nav-item">
                        <a href="/static/notes.html" class="main-nav-link">
                            <i class="icon icon-th-list"></i>
                            <span>Ver notas</span>
                        </a>
                    </li>
                    <li class="main-nav-item active">
                        <a href="/static/add-note.html" class="main-nav-link">
                            <i class="icon icon-pen"></i>
                            <span>Nueva nota</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </header>
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
        <footer class="foot">
            <div class="ad">
                <p>
                    Esta aplicación es desarrollada en el curso
                    <a href="https://styde.net/laravel-6">Primeros pasos con Laravel 6</a>.
                </p>
            </div>
            <div class="license">
                <p>© 2019 Derechos Reservados - Styde Limited</p>
            </div>
        </footer>
    </div>
</body>
</html>