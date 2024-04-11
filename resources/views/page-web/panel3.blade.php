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
    <form action="{{ route('crear_cotizacion') }}" method="POST">
        @csrf
        <section class="features-content">
            <div class="feature-marg">
                @foreach ($datos as $key => $dato)
                <a style="text-decoration: none;">
                    <div class="feature-c">
                        <input type="hidden" name="quotes_histories" value="{{ $dato->ID }}">
                        <div class="feature-card" id="myButton{{ $key }}" onclick="toggleSelected('{{ $key }}', '{{ $dato->price }}')">
                            <img class="feature-img" src="{{ htmlspecialchars($dato->img) }}" alt="Product Image" />
                            <h5>{{ htmlspecialchars($dato->title) }}</h5>
                            <p>{{ htmlspecialchars($dato->description) }}</p>
                        </div>
                        <p>Precio: $ {{ htmlspecialchars(number_format($dato->price, 2, '.', ',')) }} MXN</p>
                    </div>
                </a>
                @endforeach
            </div>
        </section>
        <section>
            <div class="btn-space">
                <button class="back-btn" onclick="window.location.href = '/page-web/panel2';">&#129044; ANTERIOR</button>
                <div class="price-service" id="cantidadTotal">
                    <h4 id="totalAmountValue">0.00 MXN</h4>
                    <p style="color:#999999;">*Precio aplicable en México</p>
                </div>
                <button type="submit" class="next-btn" onclick="window.location.href = '/page-web/panel4';">SIGUIENTE &#10142;</button>
            </div>
        </section>
    </form>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ asset ('js/scripts.js') }}"></script>

</html>
