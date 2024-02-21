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
    <section class="gral-content">
        @foreach ($datos as $key => $dato)
        <a style="text-decoration: none;">
            <form action="{{ route('comenzar_cotizacion') }}" method="POST">
                @csrf
                <input type="hidden" name="quotes_histories" value="{{ $dato->ID }}">
                <div class="option-card" id="myButton{{ $key }}" onclick="toggleSelected('{{ $key }}', '{{ $dato->price }}')">
                    <div style="border-bottom: 1px solid #000;">
                        <img src="{{ asset ('img/dots_icon.png') }}" alt="">
                    </div>
                    <h2 style="text-align: center; margin-top: 10px;">{{ htmlspecialchars($dato->pages) }}</h2>
                </div>
                <p class="style-pcard">$ {{ htmlspecialchars(number_format($dato->price, 2, '.', ',')) }} MXN</p>
            </form>
        </a>
        @endforeach
    </section>
    <section>
        <div class="btn-space">
            <form action="/panel3">
                <button class="back-btn">&#129044; ANTERIOR</button>
            </form>
            <div class="price-service" id="cantidadTotal">
                <h4 id="totalAmountValue">0.00 MXN</h4>
                <p style="color:#999999;">*Precio aplicable en México</p>
            </div>
            <form action="{{ route('comenzar_cotizacion') }}" method="POST">
                <button type="submit" class="next-btn">SIGUIENTE &#10142;</button>
            </form>
        </div>
    </section>


</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ asset ('js/scripts.js') }}"></script>

</html>
