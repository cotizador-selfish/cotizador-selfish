@include('templates.header')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ asset ('css/style.css') }}">
</head>

<body>
    <section>
        <div class="principal-title">
            <img class="principal-icon" src="{{ asset ('img/icons/hosting.svg') }}">
            <h3>MI COTIZACIÓN</h3>
            <p>En esta página, puedes ver los precios de su cotización personalizada, crear más cotizaciones para comparar los precios de diferentes experiencias y solicitar una copia de sus cotizaciones directamente en su bandeja de entrada.</p>
            <p>Toma en cuenta que el precio que se muestra es sólo un estimado. Para obtener el precio final es necesario llenar el siguiente formulario para que podamos generar un documento oficial.</p>
        </div>
    </section>
    <section class="home-container">
        <table style="margin: auto; height: 400px;" id="servicios">
            <thead>
                <tr>
                    <th id="cotizacion1">COTIZACIÓN 1 <a onclick="expandTh('cotizacion1')"><img class="btn-prices" src="/img/icons/flechas1.svg" alt="Flecha"></a></th>
                    <th id="cotizacion2">COTIZACIÓN 2 <a onclick="expandTh('cotizacion2')"><img class="btn-prices" src="/img/icons/flechas1.svg" alt="Flecha"></a></th>
                    <th id="cotizacion3">COTIZACIÓN 3 <a onclick="expandTh('cotizacion3')"><img class="btn-prices" src="/img/icons/flechas1.svg" alt="Flecha"></a></th>
                </tr>
            </thead>
            <tbody>
                <!-- Aquí se irán agregando las filas automáticamente -->
                <tr>
                    <td>
                        <p><!-- resources/views/cotizacion/mostrar.blade.php -->

                            @extends('layouts.app') <!-- Suponiendo que utilizas un layout principal llamado 'app.blade.php' -->

                            @section('content')
                        <div class="cotizacion-details">
                            <h2>Detalles de la Cotización</h2>
                            <p><strong>ID:</strong> {{ $cotizacion->id }}</p>
                            <p><strong>Dirección IP:</strong> {{ $cotizacion->ip_address }}</p>
                            <p><strong>ID del Servicio:</strong> {{ $cotizacion->id_service }}</p>
                            <!-- Agrega más detalles de la cotización según sea necesario -->
                        </div>
                        @endsection
                        </p>
                        <button class="round-button" onclick="iniciarCotizacion()">+</button>
                    </td>
                    <td>
                        <button class="round-button" onclick="iniciarCotizacion()">+</button>
                    </td>
                    <td>
                        <button class="round-button" onclick="iniciarCotizacion()">+</button>
                    </td>
                </tr>

            </tbody>
        </table>
    </section>

    <section>
        <div class="btn-space">
            <button type="submit" name="accion" value="anterior" class="back-btn">&#129044; ANTERIOR</button>
            <div class="price-service" id="cantidadTotal">
                <h4 id="totalAmountValue">0.00 MXN</h4>
                <p style="color:#999999;">*Precio aplicable en México</p>
            </div>
            <button type="submit" name="accion" value="siguiente" class="next-btn">SIGUIENTE &#10142;</button>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        var previousThId = null;

        function expandTh(id) {
            var th = document.getElementById(id);

            // Si se hizo clic en un nuevo elemento, restablecer el ancho del elemento anterior
            if (previousThId && previousThId !== id) {
                var previousTh = document.getElementById(previousThId);
                previousTh.style.width = ''; // Restablecer al ancho predeterminado
            }

            // Ampliar el ancho del elemento actual
            th.style.width = '600px';

            // Actualizar el ID del elemento anterior al actual
            previousThId = id;
        }

        function iniciarCotizacion() {
            // Lógica para iniciar el proceso de cotización
            alert('¡Iniciando el proceso de cotización!');

            // Redirigir a la página principal (home)
            window.location.href = '/'; // Reemplaza '/' con la URL de tu página principal si es diferente
        }
    </script>
    <script src="{{ asset ('js/scripts.js') }}"></script>

</body>

</html>
