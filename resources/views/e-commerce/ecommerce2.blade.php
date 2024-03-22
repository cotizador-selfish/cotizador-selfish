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
                <h3>Numero de productos (SKUs)</h3>
                <p>Selecciona la cantidad de productos que incluiremos en tu e-ecommerce.</p>
            </div>
        </div>
    </section>
    <section class="content-ecommerce">
        <div class="custom-select" style="display: grid;">
            <h4>Selecciona la cantidad de productos</h4>
            <select>
                <option>0 a 10 productos</option>
                <option>11 a 50 productos</option>
                <option>51 a 100 productos</option>
                <option>101 a 500 productos</option>
                <option>501 a 1,000 productos</option>
                <option>1,001 a 5,000 productos</option>
                <option>5,001 a 10,000 productos</option>
            </select>
        </div>
    </section>
    <section>
        <div class="btn-space">
            <button type="button" class="back-btn" onclick="window.location.href = '/home';">&#129044; ANTERIOR</button>
            <div class="price-service" id="cantidadTotal">
                <h4 id="totalAmountValue">0.00 MXN</h4>
                <p style="color:#999999;">*Precio aplicable en México</p>
            </div>
            <button type="submit" class="next-btn" onclick="window.location.href = '/e-commerce/ecommerce3';">SIGUIENTE &#10142;</button>
        </div>
    </section>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ asset ('js/scripts.js') }}"></script>

</html>
