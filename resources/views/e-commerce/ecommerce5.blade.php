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
                <h3>Funciones de sitio web</h3>
                <p>Selecciona las funciones que te gustaría incluir en tu sitio web</p>
            </div>
        </div>
    </section>
    <section class="features-content">
        <div class="feature-marg">
            <a style="text-decoration: none;">
                <div class="feature-c-ecommerce">
                        <div class="feature-card-ecommerce">
                            <img class="feature-img" src="{{ asset ('img/message.svg') }}" alt="Product Image" />
                            <h5>Formulario de contacto</h5>
                        </div>
                </div>
            </a>
            <a style="text-decoration: none;">
                <div class="feature-c-ecommerce">
                        <div class="feature-card-ecommerce">
                            <img class="feature-img" src="{{ asset ('img/translate.svg') }}" alt="Product Image" />
                            <h5>Contenido en idioma adicional</h5>
                        </div>
                </div>
            </a>
            <a style="text-decoration: none;">
                <div class="feature-c-ecommerce">
                        <div class="feature-card-ecommerce">
                            <img class="feature-img" src="{{ asset ('img/stock-market.svg') }}" alt="Product Image" />
                            <h5>Integración a CRM</h5>
                        </div>
                </div>
            </a>
            <a style="text-decoration: none;">
                <div class="feature-c-ecommerce">
                        <div class="feature-card-ecommerce">
                            <img class="feature-img" src="{{ asset ('img/calendar.svg') }}" alt="Product Image" />
                            <h5>Sistema de citas o reservaciones en linea</h5>
                        </div>
                </div>
            </a>
        </div>
    </section>
    <section>
        <div class="btn-space">
            <button type="button" class="back-btn" onclick="window.location.href = '/e-commerce/ecommerce4';">&#129044; ANTERIOR</button>
            <div class="price-service" id="cantidadTotal">
                <h4 id="totalAmountValue">0.00 MXN</h4>
                <p style="color:#999999;">*Precio aplicable en México</p>
            </div>
            <button type="submit" class="next-btn" onclick="window.location.href = '/e-commerce/ecommerce6';">SIGUIENTE &#10142;</button>
        </div>
    </section>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ asset ('js/scripts.js') }}"></script>
</html>
