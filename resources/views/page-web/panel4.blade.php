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
    <form action="{{ route('crear_cotizacion') }}" method="POST">
        @csrf
        <section class="gral-content">
            @foreach ($datos as $key => $dato)
            <a style="text-decoration: none;">
                <input type="hidden" name="quotes_histories" value="{{ $dato->ID }}">
                <div class="option-card" id="myButton{{ $key }}" onclick="toggleSelected('{{ $key }}', '{{ $dato->price }}')">
                    <div style="border-bottom: 1px solid #999999;">
                        <img src="{{ asset ('img/dots_icon.png') }}" alt="">
                    </div>
                    <h2 style="text-align: center; margin-top: 10px;">{{ htmlspecialchars($dato->pages) }}</h2>
                </div>
                <p>$ {{ htmlspecialchars(number_format($dato->price, 2, '.', ',')) }} MXN</p>
            </a>
            @endforeach
        </section>
        <section>
            <div class="btn-space">
                <button class="back-btn" onclick="window.location.href = '/page-web/panel3';">&#129044; ANTERIOR</button>
                <div class="price-service" id="cantidadTotal">
                    <h4 id="totalAmountValue">0.00 MXN</h4>
                    <p style="color:#999999;">*Precio aplicable en México</p>
                </div>
                <button type="submit" class="next-btn" onclick="window.location.href = '/page-web/panel5';">SIGUIENTE &#10142;</button>
            </div>
        </section>
    </form>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ asset ('js/scripts.js') }}"></script>

</html>
