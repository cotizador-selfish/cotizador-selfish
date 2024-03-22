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
                <h3>Funciones adicionales de E-ecommerce</h3>
                <p>Selecciona todas las funciones adicionales que te gustaría incluir en tu sitio e-ecommerce</p>
            </div>
        </div>
    </section>
    <section class="features-content">
        <div class="feature-marg">
            <a style="text-decoration: none;">
                <div class="feature-c-ecommerce">
                        <div class="feature-card-ecommerce">
                            <img class="feature-img" src="{{ asset ('img/vip.svg') }}" alt="Product Image" />
                            <h5>Sistema de Giftcard</h5>
                        </div>
                </div>
            </a>
            <a style="text-decoration: none;">
                <div class="feature-c-ecommerce">
                        <div class="feature-card-ecommerce">
                            <img class="feature-img" src="{{ asset ('img/content.svg') }}" alt="Product Image" />
                            <h5>Suscripciones o pagos recurrentes</h5>
                        </div>
                </div>
            </a>
            <a style="text-decoration: none;">
                <div class="feature-c-ecommerce">
                        <div class="feature-card-ecommerce">
                            <img class="feature-img" src="{{ asset ('img/pants.svg') }}" alt="Product Image" />
                            <h5>Integración con Google Shopping</h5>
                        </div>
                </div>
            </a>
            <a style="text-decoration: none;">
                <div class="feature-c-ecommerce">
                        <div class="feature-card-ecommerce">
                            <img class="feature-img" src="{{ asset ('img/shopping-basket.svg') }}" alt="Product Image" />
                            <h5>Recuperación de carritos abandonados</h5>
                        </div>
                </div>
            </a>
        </div>
    </section>
    <section>
        <div class="btn-space">
            <button type="button" class="back-btn" onclick="window.location.href = '/e-commerce/ecommerce3';">&#129044; ANTERIOR</button>
            <div class="price-service" id="cantidadTotal">
                <h4 id="totalAmountValue">0.00 MXN</h4>
                <p style="color:#999999;">*Precio aplicable en México</p>
            </div>
            <button type="submit" class="next-btn" onclick="window.location.href = '/e-commerce/ecommerce5';">SIGUIENTE &#10142;</button>
        </div>
    </section>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ asset ('js/scripts.js') }}"></script>
</html>
