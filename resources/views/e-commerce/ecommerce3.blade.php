@include('templates.header')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ asset ('css/style.css') }}">
</head>

<body>
    <section>
        <div class="card-structure">
            <div class="principal-title">
                <img class="principal-icon" src="{{ asset ('img/icons/5.svg') }}" alt="">
                <h3>Funciones de e-ecommerce</h3>
                <p>Selecciona todas las funciones adicionales que te gustaría incluir en tu sitio e-ecommerce.</p>
            </div>
        </div>
    </section>
    <section class="gral-content-ecommerce">
        <div>
            <input type="hidden">
            <div class="option-card-ecommerce">
                <div style="border-bottom: 1px solid #000;">
                    <img src="/img/dots_icon.png" alt="">
                </div>
                <h5 style="text-align: center;margin-top: 15px;padding: 10px;">Integración para pagos con tarjetas de crédito y débito</h5>
            </div>
        </div>

        <div>
            <input type="hidden">
            <div class="option-card-ecommerce">
                <div style="border-bottom: 1px solid #000;">
                    <img src="/img/dots_icon.png" alt="">
                </div>
                <h5 style="text-align: center;margin-top: 15px;padding: 10px;">Cálculo de envíos en tiempo real de acuerdo a las reglas de tu negocio</h5>
            </div>
        </div>

        <div>
            <input type="hidden">
            <div class="option-card-ecommerce">
                <div style="border-bottom: 1px solid #000;">
                    <img src="/img/dots_icon.png" alt="">
                </div>
                <h5 style="text-align: center;margin-top: 15px;padding: 10px;">Integración de facturación CFDI</h5>
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
