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
    <form id="cotizacionForm" action="{{ route('iniciar-cotizacion') }}" method="POST">
    @csrf
    <section class="gral-content">
        @foreach ($datos as $key => $dato)
        <div onclick="toggleSelected('{{ $key }}', '{{ $dato->price }}')">
            <input type="hidden" name="quotes_histories" value="{{ $dato->ID }}">
            <div class="option-card" id="myButton{{ $key }}">
                <div style="border-bottom: 1px solid #000;">
                    <img src="/img/dots_icon.png" alt="">
                </div>
                <h2 style="text-align: center; margin-top: 10px;">{{ htmlspecialchars($dato->pages) }}</h2>
            </div>
            <p class="style-pcard">$ {{ htmlspecialchars(number_format($dato->price, 2, '.', ',')) }} MXN</p>
        </div>
        @endforeach
    </section>
    <section>
    <div class="btn-space">
        <button type="button" class="back-btn" onclick="window.location.href='{{ route('cotizacion.retroceder', ['paginaActual' => $paginaActual]) }}';">&#129044; ANTERIOR</button>
        <div class="price-service" id="cantidadTotal">
            <h4 id="totalAmountValue">0.00 MXN</h4>
            <p style="color:#999999;">*Precio aplicable en México</p>
        </div>
        <button type="submit" class="next-btn">SIGUIENTE &#10142;</button>
    </div>
</section>

</form>

</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ asset ('js/scripts.js') }}"></script>

</html>
