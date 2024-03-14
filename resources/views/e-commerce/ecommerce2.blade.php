@include('templates.header')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ asset ('css/style.css') }}">
    <style>
        .custom-select {
            position: relative;
        }

        .custom-select select {
            appearance: none;
            -webkit-appearance: none;
            width: 100%;
            font-size: 18px;
            padding: 5px 10px 5px 10px;
            background-color: #FFFFFF;
            border: 1px solid #C4D1EB;
            border-radius: 5px;
            color: #000000;
            cursor: pointer;
            outline: none;
        }

        .custom-select select:focus {
            background: #F2F2F2;
            border: 1px solid #5A7EC7;
            border-radius: 5px;
        }

        .custom-select::after {
            content: "";
            position: absolute;
            pointer-events: none;
            top: 50%;
            right: 10px;
            transform: translate(0, -50%);
            width: 12px;
            height: 12px;
            background-color: #000000;
            clip-path: polygon(8% 17%, 0% 25%, 50% 84%, 100% 25%, 92% 17%, 50% 65%);
        }
    </style>
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
    <section class="gral-content-ecommerce">
        <div class="custom-select">
            <select>
                <option>Select Country</option>
                <option>Australia</option>
                <option>New Zealand</option>
                <option>United Kingdom</option>
                <option>United States</option>
            </select>
            <div class="select-arrow"></div>
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
