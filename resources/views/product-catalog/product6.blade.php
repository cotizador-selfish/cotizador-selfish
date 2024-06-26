<!-- Includes the header template. -->
@include('templates.header')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale.0">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ asset ('css/style.css') }}">
</head>
<body>
<section>
        <div class="card-structure">
            <div class="principal-title">
                <img class="principal-icon" src="{{ asset ('img/icons/9.svg') }}" alt="">
                <h3>OPCIONES DE HOSTING Y SEGURIDAD</h3>
                <p>Lorem ipsum dolor sit amet consectetur.</p>
            </div>
        </div>
    </section>
    <section class="features-content">
        <img class="banner" src="{{ asset ('img/Banner.webp') }}" alt="">
    </section>
    <section class="features-content">
        @foreach ($datos as $key => $dato)
        <div class="btn-help">
            <button class="toggle-button helpme-choose" data-target="{{ $key }}">Ayúdame a elegir</button>
        </div>
        <div class="option-container">
            @csrf
            <input type="hidden" name="quotes_histories" value="{{ $dato->ID }}">
            <div class="option-row option-hscard" id="myButton{{ $key }}" onclick="toggleSelected('{{ $key }}', '{{ $dato->price }}')">
                <img class="option-img" src="{{ htmlspecialchars($dato->img) }}" alt="Descripción de la imagen">
                <div class="option-text">
                    <h6 style="margin-top:0px; margin-bottom: 10px; color:#000; text-transform: uppercase;">{{ htmlspecialchars($dato->title) }}</h6>
                    <p style="margin-top: -5px">{{ htmlspecialchars($dato->description) }}</p>
                </div>
                <div class="option-discount">
                    <p>{{ htmlspecialchars($dato->discount_hs) }}</p>
                    <p>$ {{ htmlspecialchars(number_format($dato->price, 2, '.', ',')) }} MXN</p>
                </div>
            </div>
            <button class="btn-no">NO GRACIAS</button>
        </div>
        <div class="help-container">
            <div id="acordeon{{ $key }}" class="help-content" style="display: none;">
                <div style="text-align: end;">
                    <button class="toggle-button helpme-choose" data-target="{{ $key }}">Ayúdame a elegir <span style="text-decoration: unset">&#10005;</span></button>
                </div>
                <div style="display: flex;">
                    <img class="help-img" src="/img/certificado_ssl.webp" alt="Imagen 1">
                    <div style="width:922px">
                        <h5>{{ htmlspecialchars($dato->sub_title) }}</h5>
                        <p>
                        <ul>
                            <li style="text-align: justify;">{{ htmlspecialchars($dato->sub_description) }}</li>
                        </ul>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </section>
    <section>
        <div class="btn-space">
            <button type="button" class="back-btn">&#129044; ANTERIOR</button>
            <div class="price-service" id="cantidadTotal">
                <h4 id="totalAmountValue">0.00 MXN</h4>
                <p style="color:#999999;">*Precio aplicable en México</p>
            </div>
            <button type="submit" class="next-btn" onclick="window.location.href = '/cotizacion';">SIGUIENTE &#10142;</button>
        </div>
    </section>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ asset ('js/scripts.js') }}"></script>
</html>
