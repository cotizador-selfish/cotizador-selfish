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
                <h3>PÁGINAS DE CONTENIDO</h3>
                <p>Indica la cantidad aproximada de páginas de contenido.</p>
            </div>
        </div>
    </section>
    <form method="POST" action="{{ route('crear_cotizacion') }}" id="formCotizacion">
    @csrf
    <section class="gral-content">
        @foreach ($datos as $key => $dato)
        <div onclick="seleccionarServicio('{{ $dato->ID }}', '{{ $dato->price }}', '{{ $dato->pages }}')" style="cursor: pointer;">
            <div class="option-card" id="myButton{{ $key }}">
                <div style="border-bottom: 1px solid #999999;">
                    <img src="/img/dots_icon.png" alt="">
                </div>
                <h2 style="text-align: center; margin-top: 10px;">{{ htmlspecialchars($dato->pages) }}</h2>
            </div>
            <p style="display: flex; justify-content: center;">$ {{ htmlspecialchars(number_format($dato->price, 2, '.', ',')) }} MXN</p>
        </div>
        @endforeach
        <!-- Campo oculto para almacenar el ID del servicio seleccionado -->
        <input type="hidden" id="id_service" name="id_service">
    </section>
    <section>
        <div class="btn-space">
            <button type="button" name="accion" value="anterior" class="back-btn">&#129044; ANTERIOR</button>
            <div class="price-service" id="cantidadTotal">
                <h4 id="totalAmountValue">0.00 MXN</h4>
                <p style="color:#999999;">*Precio aplicable en México</p>
            </div>
            <!-- Botón "Siguiente" (inicialmente oculto) -->
            <button type="button" id="btnSiguiente" onclick="irASiguientePagina()" style="display: none;" class="next-btn">SIGUIENTE &#10142;</button>

        </div>
    </section>
</form>

</body>
<script>
function seleccionarServicio(idServicio, precio, nombreServicio) {
    // Almacenar el ID del servicio seleccionado en el campo oculto
    document.getElementById('id_service').value = idServicio;

    // Mostrar el botón "Siguiente" para permitir avanzar a la siguiente página
    document.getElementById('btnSiguiente').style.display = 'block';

    // Realizar algún tipo de efecto visual para resaltar la selección (opcional)
    // Por ejemplo, cambiar el estilo del elemento seleccionado
    var selectedButton = document.getElementById('myButton{{ $key }}'); // Usar el identificador único
    if (selectedButton) {
        selectedButton.style.backgroundColor = '#f0f0f0'; // Cambiar el color de fondo
    }
}

function irASiguientePagina() {
    // Obtener el ID del servicio almacenado en el campo oculto
    var idServicio = document.getElementById('id_service').value;

    // Obtener la opción seleccionada almacenada en localStorage
    var opcionSeleccionada = localStorage.getItem('selectedOption');

    // Redirigir a la siguiente página (panel3) con parámetros en la URL
    var url = `/page-web/panel3?id=${idServicio}&opcion=${opcionSeleccionada}`;
    window.location.href = url;
}
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ asset ('js/scripts.js') }}"></script>
</html>
