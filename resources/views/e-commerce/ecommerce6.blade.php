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
                <h3>Redacción de contenidos</h3>
                <p>Si aún no tienes listos los contenidos de tu sitio web, podemos ayudarte</p>
            </div>
        </div>
    </section>
    <section class="content-ecommerce" style="margin: 0% auto;">
        <div class="custom-select" style="display: flex;
                justify-content: center;
                flex-direction: column;
                align-content: center;
                align-items: center;">
            <h4>Cantidad de página de contenidos que redactaremos para ti</h4>
            <input id="balloons" type="number" name="balloons" value="0" step="1" min="0" max="100" style="width:40%; text-align: center;" required />
            <span class="validity"></span>
        </div>
    </section>
    <section class="content-ecommerce">
        <div class="custom-select" style="display: flex; justify-content: center; flex-direction: column; align-content: center; align-items: center;">
            <h4>Cantidad de descripciones de productos que redactaremos para ti</h4>
            <input id="balloons" type="number" name="balloons" value="0" step="1" min="0" max="100" style="width:36%; text-align: center;" required />
            <span class="validity"></span>
        </div>
    </section>
    <section>
        <div class="btn-space">
            <button type="button" class="back-btn" onclick="window.location.href = '/e-commerce/ecommerce5';">&#129044; ANTERIOR</button>
            <div class="price-service" id="cantidadTotal">
                <h4 id="totalAmountValue">0.00 MXN</h4>
                <p style="color:#999999;">*Precio aplicable en México</p>
            </div>
            <button type="submit" class="next-btn" onclick="window.location.href = '/e-commerce/ecommerce7';">SIGUIENTE &#10142;</button>
        </div>
    </section>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ asset ('js/scripts.js') }}"></script>

</html>
