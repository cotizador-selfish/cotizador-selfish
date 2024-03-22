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
    <section class="features-content">
        <div class="feature-marg">
            <a style="text-decoration: none;">
                <div class="feature-c-ecommerce">
                        <div class="feature-card-ecommerce">
                            <img class="feature-img" src="{{ asset ('img/credit-card.svg') }}" alt="Product Image" />
                            <h5>Integración para pagos con tarjetas de crédito y débito</h5>
                        </div>
                </div>
            </a>
            <a style="text-decoration: none;">
                <div class="feature-c-ecommerce">
                        <div class="feature-card-ecommerce">
                            <img class="feature-img" src="{{ asset ('img/shipping.svg') }}" alt="Product Image" />
                            <h5>Cálculo de envíos en tiempo real de acuerdo a las reglas de tu negocio</h5>
                        </div>
                </div>
            </a>
            <a style="text-decoration: none;">
                <div class="feature-c-ecommerce">
                        <div class="feature-card-ecommerce">
                            <img class="feature-img" src="{{ asset ('img/bill.svg') }}" alt="Product Image" />
                            <h5>Integración de facturación CFDI</h5>
                        </div>
                </div>
            </a>
        </div>
    </section>
    <section>
        <div class="btn-space">
            <button type="button" class="back-btn" onclick="window.location.href = '/e-commerce/ecommerce2';">&#129044; ANTERIOR</button>
            <div class="price-service" id="cantidadTotal">
                <h4 id="totalAmountValue">0.00 MXN</h4>
                <p style="color:#999999;">*Precio aplicable en México</p>
            </div>
            <button type="submit" class="next-btn" onclick="window.location.href = '/e-commerce/ecommerce4';">SIGUIENTE &#10142;</button>
        </div>
    </section>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ asset ('js/scripts.js') }}"></script>
</html>
