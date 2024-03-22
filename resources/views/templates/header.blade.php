<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="generator" content="Jekyll v4.0.1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title }}</title>
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="icon" type="image/png" href="{{ asset ('img/favicon.png') }}">
</head>

<body>
    <!-- Contenido del header, como navegación, logo, etc. -->
    <header class="header-content" id="header">
    <a href="/home" title="Selfish">
        <img class="logo-mobile-sticky scale-with-grid" src="https://cdn.selfish.com.mx/wp-content/uploads/2019/06/sselfish-logo-sticky-1.png" data-retina="https://cdn.selfish.com.mx/wp-content/uploads/2019/06/sselfish-logo-sticky-1.png" data-height="114" alt="sselfish-logo-sticky" data-no-retina="" style="max-height: 70px;">
    </a>
    <div class="progressbar-titles">
        <div class="media-titles">
            <h4 class="gradient-text">COTIZACIÓN</h4>
            <h4 id="current-step">Paso 1</h4>
        </div>
        <progress id="progress-bar" class="progress-bar custom-progress" max="100" value="0"></progress>
    </div>

    <div class="save-close">
        <p style="display:flex; color:white;" id="headerTotalAmount">0.00 MXN</p>
        <button type="button" class="btn-save" onclick="saveAndCloseQuotation()">Guardar y cerrar</button>
    </div>
</header>
<script>
    var prevScrollPos = window.pageYOffset;
    var header = document.getElementById("header");

    window.onscroll = function() {
        var currentScrollPos = window.pageYOffset;
        if (prevScrollPos < currentScrollPos) {
            // Oculta el encabezado al hacer scroll hacia abajo
            header.style.top = "-" + header.offsetHeight + "px";
        } else {
            // Muestra el encabezado al hacer scroll hacia arriba
            header.style.top = "0";
        }
        prevScrollPos = currentScrollPos;
    }
</script>
    <main role="main" class="flex-shrink-0">
        <!-- Aquí deberías incluir el contenido específico de tu aplicación -->
    </main>
    <script src="{{ asset ('js/scripts.js') }}"></script>
</html>
