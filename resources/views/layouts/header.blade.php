
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