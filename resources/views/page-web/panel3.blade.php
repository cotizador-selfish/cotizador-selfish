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
    <section class="features-content">
        <div class="feature-marg">
            @foreach ($datos as $key => $dato)
            <a style="text-decoration: none;">
                <div class="feature-c">
                    <form action="{{ route('comenzar_cotizacion') }}" method="POST">
                        @csrf
                        <input type="hidden" name="quotes_histories" value="{{ $dato->ID }}">
                        <div class="feature-card" id="myButton{{ $key }}" onclick="toggleSelected('{{ $key }}', '{{ $dato->price }}')">
                            <img class="feature-img" src="{{ htmlspecialchars($dato->img) }}" alt="Product Image" />
                            <h5>{{ htmlspecialchars($dato->title) }}</h5>
                            <p>{{ htmlspecialchars($dato->description) }}</p>
                        </div>
                        <p>Precio: $ {{ htmlspecialchars(number_format($dato->price, 2, '.', ',')) }} MXN</p>
                    </form>
                </div>
            </a>
            @endforeach
        </div>
    </section>
    <section>
        <div class="btn-space">
            <form action="/panel2">
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
