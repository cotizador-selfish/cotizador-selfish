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
                <img class="principal-icon" src="{{ asset ('img/icons/9.svg') }}" alt="">
                <h3>FUNCIONES DEL SITIO WEB</h3>
                <p>With this shop hompeage template.</p>
            </div>
        </div>
    </section>
    <form method="POST" action="{{ route('crear_cotizacion') }}" id="formCotizacion">
        @csrf
        <section class="features-content">
            <div class="feature-marg">
                @foreach ($datos as $key => $dato)
                <a style="text-decoration: none;">
                    <div class="feature-c" onclick="seleccionarServicio('{{ $dato->ID }}', '{{ $dato->price }}')">
                        <div class="feature-card" id="myButton{{ $key }}" onclick="toggleSelected('{{ $key }}', '{{ $dato->price }}')">
                            <img class="feature-img" src="{{ htmlspecialchars($dato->img) }}" alt="Product Image" />
                            <h5>{{ htmlspecialchars($dato->title) }}</h5>
                            <p>{{ htmlspecialchars($dato->description) }}</p>
                        </div>
                        <p>Precio: $ {{ htmlspecialchars(number_format($dato->price, 2, '.', ',')) }} MXN</p>
                    </div>
                </a>
                @endforeach
                <!-- Campo oculto para almacenar el ID del servicio seleccionado -->
                <input type="hidden" id="id_service" name="id_service">
            </div>
        </section>
        <section>
            <div class="btn-space">
                <button class="back-btn" onclick="window.location.href = '/page-web/panel2';">&#129044; ANTERIOR</button>
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
    function seleccionarServicio(idServicio, precio) {
    // Obtener la lista de IDs de páginas seleccionadas del almacenamiento local del navegador
    var selectedPageIds = JSON.parse(localStorage.getItem('selectedPageIds')) || [];

    // Agregar el ID de la página actual a la lista de IDs seleccionados
    selectedPageIds.push(idServicio);

    // Guardar la lista actualizada de IDs de páginas seleccionadas en localStorage
    localStorage.setItem('selectedPageIds', JSON.stringify(selectedPageIds));

    // Establecer el ID del servicio seleccionado en el campo oculto
    document.getElementById('id_service').value = idServicio;

    // Mostrar el botón "Siguiente" si se ha seleccionado un servicio
    document.getElementById('btnSiguiente').style.display = 'block';

    // Actualizar el precio total mostrado
    document.getElementById('totalAmountValue').textContent = '$ ' + parseFloat(precio).toFixed(2) + ' MXN';
}

function irASiguientePagina(selectedPageIds) {
    // Obtener el ID del servicio seleccionado del campo oculto
    var idServicio = document.getElementById('id_service').value;

    // Almacenar la información de la selección de la página anterior en el almacenamiento local del navegador
    localStorage.setItem('selectedPageIds', JSON.stringify(selectedPageIds));

    // Redirigir a la URL correspondiente al ID del servicio seleccionado
    window.location.href = `/page-web/panel4?id=${idServicio}?id=${+idServicio}`;
}

</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ asset ('js/scripts.js') }}"></script>

</html>
