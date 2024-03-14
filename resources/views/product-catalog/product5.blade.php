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
                <img class="principal-icon" src="{{ asset ('img/icons/5.svg') }}" alt="">
                <h3>¿En cuantos idiomas estará desarrollada el catálogo en línea?</h3>
                <p>Considera que ustedes nos deben de proporcionar las traducciones de todos los textos.</p>
            </div>
        </div>
    </section>
    <section class="gral-content-lading">

        <div>
            <input type="hidden">
            <div class="option-card">
                <div style="border-bottom: 1px solid #000;">
                    <img src="/img/dots_icon.png" alt="">
                </div>
                <h3 style="text-align: center; margin-top: 25px;">Un idioma</h3>
            </div>
        </div>

        <div>
            <input type="hidden">
            <div class="option-card">
                <div style="border-bottom: 1px solid #000;">
                    <img src="/img/dots_icon.png" alt="">
                </div>
                <h3 style="text-align: center; margin-top: 25px;">Dos idiomas</h3>
            </div>
        </div>

        <div>
            <input type="hidden">
            <div class="option-card">
                <div style="border-bottom: 1px solid #000;">
                    <img src="/img/dots_icon.png" alt="">
                </div>
                <h3 style="text-align: center; margin-top: 25px;">Tres idiomas</h3>
            </div>
        </div>

    </section>
    <section>
        <div class="btn-space">
            <button type="button" class="back-btn">&#129044; ANTERIOR</button>
            <div class="price-service" id="cantidadTotal">
                <h4 id="totalAmountValue">0.00 MXN</h4>
                <p style="color:#999999;">*Precio aplicable en México</p>
            </div>
            <button type="submit" class="next-btn">SIGUIENTE &#10142;</button>
        </div>
    </section>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ asset ('js/scripts.js') }}"></script>
</html>
