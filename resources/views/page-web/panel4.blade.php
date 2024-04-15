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
        <div class="card-structure">
            <div class="principal-title">
                <img class="principal-icon" src="{{ asset ('img/icons/5.svg') }}" alt="">
                <h3>REDACCIÓN DE CONTENIDOS</h3>
                <p>Cantidad de páginas de contenido que redactaremos para ti.</p>
            </div>
    </section>
    <form method="POST" action="{{ route('crear_cotizacion') }}" id="formCotizacion">
        @csrf
        <section class="gral-content">
            @foreach ($datos as $key => $dato)
            <a style="text-decoration: none;" onclick="seleccionarServicio('{{ $dato->ID }}', '{{ $dato->price }}')">
                <div class="option-card" id="myButton{{ $key }}" onclick="toggleSelected('{{ $key }}', '{{ $dato->price }}')">
                    <div style="border-bottom: 1px solid #999999;">
                        <img src="{{ asset ('img/dots_icon.png') }}" alt="">
                    </div>
                    <h2 style="text-align: center; margin-top: 10px;">{{ htmlspecialchars($dato->pages) }}</h2>
                </div>
                <p style="display: flex; justify-content: center;">$ {{ htmlspecialchars(number_format($dato->price, 2, '.', ',')) }} MXN</p>
            </a>
            @endforeach
            <!-- Campo oculto para almacenar el ID del servicio seleccionado -->
            <input type="hidden" id="id_service" name="id_service">
        </section>
        <section>
            <div class="btn-space">
                <button class="back-btn" onclick="window.location.href = '/page-web/panel3';">&#129044; ANTERIOR</button>
                <div class="price-service" id="cantidadTotal">
                    <h4 id="totalAmountValue">0.00 MXN</h4>
                    <p style="color:#999999;">*Precio aplicable en México</p>
                </div>
                <button type="button" id="btnSiguiente" onclick="irASiguientePagina()" style="display: none;" class="next-btn">SIGUIENTE &#10142;</button>
            </div>
        </section>
    </form>
</body>
<script>
    // Función para seleccionar un servicio
    function seleccionarServicio(idServicio, precio) {
        // Asignar el ID del servicio seleccionado al campo oculto
        document.getElementById('id_service').value = idServicio;

        // Calcular el nuevo total sumando el precio del servicio seleccionado
        var totalActual = parseFloat(document.getElementById('totalAmountValue').innerText.replace(' MXN', '').replace(',', ''));
        var nuevoTotal = totalActual + parseFloat(precio);
        document.getElementById('totalAmountValue').innerText = nuevoTotal.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,');

        // Mostrar el botón de "Siguiente"
        document.getElementById('btnSiguiente').style.display = 'block';
    }

    // Función para redirigir a la siguiente página después de validar la selección
    function irASiguientePagina() {
        // Obtener el ID del servicio seleccionado
        var idServicio = document.getElementById('id_service').value;

        // Verificar si se ha seleccionado un servicio
        if (idServicio) {
            // Redirigir a la página siguiente con el ID del servicio como parámetro
            window.location.href = '/page-web/panel5?id=' + idServicio;
        } else {
            // Mostrar un mensaje de error si no se ha seleccionado ningún servicio (esto no debería ocurrir)
            alert('Por favor selecciona un servicio antes de continuar.');
        }
    }
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ asset ('js/scripts.js') }}"></script>

</html>
