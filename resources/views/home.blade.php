@include('templates.header')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title }}</title>
    <link rel="icon" type="image/svg" href="{{ asset ('img/favicon.svg') }}">
    <link rel="stylesheet" href="{{ asset ('css/style.css') }}">
</head>

<body>
    <section class="bg-secone">
        <div class="home-container">
            <div class="home-secone">
                <div class="lottie-home" id="lottie-1">
                    <!-- Aquí se renderizará la animación Lottie -->
                    <dotlottie-player src="{{ asset('lottie/01-header.json') }}" background="transparent" speed="1" direction="1" play-mode="normal" loop autoplay></dotlottie-player>
                </div>
                <div class="pad-bottom">
                    <h1>COTIZA<br><span style="font-family: 'Poppins', sans-serif !important; font-size: 50px; font-weight: 300; line-height: 75px; letter-spacing: 1px; text-align: left; color: #FFFFFF;">TU PROYECTO</span></h1>

                    <p style="color: white; font-family: 'Poppins', sans-serif !important; font-size: 14px; font-weight: 400; line-height: 21px; text-align: left;">Obtén un presupuesto aproximado de diseño y desarrollo a la medida.</p>
                    <button onclick="scrollToSection('section-2')" class="button" style="margin: 20px 0px 20px 0px;">COMENZAR <span class="arrow-down">&#8595;</span></button>
                </div>
            </div>
        </div>
    </section>

    <section id="section-2">
        @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
        @endif
        <div class="home-container">
            <div class="principal-title">
                <img class="principal-icon" src="{{ asset ('img/icons/code.svg') }}" alt="">
                <h3>¿QUÉ TIPO DE PROYECTO REQUIERES PARA TU NEGOCIO?</h3>
                <p>Selecciona la opción que más se acerque a tus requerimientos.</p>
            </div>
            <form method="POST" action="{{ route('crear_cotizacion') }}" id="formCotizacion">
                @csrf
                <div class="home-services">
                    @foreach ($datos->take(5) as $dato)
                    <div class="principal-services" onclick="seleccionarServicio('{{ $dato->ID }}')">
                        <img class="services-img" src="{{ htmlspecialchars($dato->img) }}" alt="">
                        <h6>{{ htmlspecialchars($dato->service) }}</h6>
                        <p style="font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 400; line-height: 21px; text-align: center;">{{ htmlspecialchars($dato->description) }}</p>
                        <p style="display: none;">Desde: ${{ htmlspecialchars($dato->price) }}</p>
                    </div>
                    @endforeach
                    <a href="https://selfish.com.mx/servicios">
                        <div class="principal-services">
                            <img class="services-img" src="https://cotizador.selfish.com.mx/public/img/Otros.webp" alt="">
                            <h5>Otros servicios</h5>
                            <p style="font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 400; line-height: 21px; text-align: center;">Aplicaciones moviles, Branding, Motion graphics, etc.</p>
                            <div>
                                <p style="display: none;">Desde: </p>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Campo oculto para almacenar el ID del servicio seleccionado -->
                <input type="hidden" id="id_service" name="id_service">
            </form>
        </div>
        </div>

    </section>

    <section class="bg-secthree">
        <div class="home-container">
            <h2 class="catalogue-title">TU TIENDA EN LÍNEA O PÁGINA WEB <br>CON CATÁLOGO INCLUYEN</h2>
            <div class="secthree-seo">
                <div class="content-structure">
                    <div style="padding: 5px 15px">
                        <img class="card-img" src="{{ asset ('img/icons/hosting.png') }}" alt="">
                        <h6>HOSTING Y REGISTRO DE DOMINIOS</h6>

                        <ul>
                            <li>Hospedaje web anual</li>
                            <li>Registro de Dominio.com / .com.mx</li>
                        </ul>
                    </div>
                </div>
                <div class="content-structure">
                    <div style="padding: 5px 15px">
                        <img class="card-img" src="{{ asset ('img/icons/diseño-personalizado1.png') }}" alt="">
                        <h6>DISEÑO PERSONALIZADO</h6>
                        <ul>
                            <li>
                                Diseño personalizado de acuerdo a la identidad de tu marca o empresa.
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="content-structure">
                    <div style="padding: 5px 15px">
                        <img class="card-img" src="{{ asset ('img/icons/seo1.png') }}" alt="">
                        <h6>SEO BASICO</h6>

                        <ul>
                            <li>Etiquetas meta en páginas imágenes.</li>
                            <li>Optimización de sitio web para carga rápida.</li>
                            <li>Solicitud de indexación a Google.</li>
                        </ul>
                    </div>
                </div>
                <div class="content-structure">
                    <div style="padding: 5px 15px">
                        <img class="card-img" src="{{ asset ('img/icons/pagina-unica.png') }}" alt="">
                        <h6>PÁGINA ÚNICA PARA CADA PRODUCTO</h6>

                        <ul>
                            <li>Aumenta el posicionamiento de tu página web al contar con una página web única para producto o servicio.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="secthree-seo" id="content" style="display: none;">
                <div class="content-structure">
                    <div style="padding: 5px 15px">
                        <img class="card-img" src="{{ asset ('img/icons/formulario-de-contacto1.png') }}" alt="">
                        <h6>CUENTAS DE EMAIL</h6>

                        <ul>
                            <li>Cuentas de correo electronico personalizadas con tu dominio.</li>
                            <li>Asesoria para configuracion de cuentas de correo electronico</li>
                        </ul>
                    </div>
                </div>
                <div class="content-structure">
                    <div style="padding: 5px 15px">
                        <img class="card-img" src="{{ asset ('img/icons/formulario-de-contacto1.png') }}" alt="">
                        <h6>FORMULARIOS DE CONTACTO</h6>

                        <ul>
                            <li>Posibilidad de capar clientes potenciales.</li>
                        </ul>
                    </div>
                </div>
                <div class="content-structure">
                    <div style="padding: 5px 15px">
                        <img class="card-img" src="{{ asset ('img/icons/mapa-de-ubicacion2.png') }}" alt="">
                        <h6>MAPA DE UBICACIÓN</h6>

                        <ul>
                            <li>Interseción de mapa con API Google Maps.</li>
                            <li>Mapa de ubicacion con hasta 3 marcadores</li>
                        </ul>
                    </div>
                </div>
                <div class="content-structure">
                    <div style="padding: 5px 15px">
                        <img class="card-img" src="{{ asset ('img/icons/mapa-de-ubicacion2.png') }}" alt="">
                        <h6>SITIO WEB RESPONSIVO</h6>

                        <ul>
                            <li>Sitio web compatible con celulares y tabletas.</li>
                        </ul>
                    </div>
                </div>
                <div class="content-structure">
                    <div style="padding: 5px 15px">
                        <img class="card-img" src="{{ asset ('img/icons/links1.png') }}" alt="">
                        <h6>LINKS A REDES SOCIALES </h6>
                        <ul>
                            <li>Vinculación a redes sociales Facebook, Instagram, Linkedln, Youtube, etc.</li>
                        </ul>
                    </div>
                </div>
                <div class="content-structure">
                    <div style="padding: 5px 15px">
                        <img class="card-img" src="{{ asset ('img/icons/chat-de-whatsapp.png') }}" alt="">
                        <h6>WHATSAPP</h6>
                        <ul>
                            <li>Vinculación directa a Whatsapp</li>
                            <li>Contacto directo con clientes potenciales.</li>
                        </ul>
                    </div>
                </div>
                <div class="content-structure">
                    <div style="padding: 5px 15px">
                        <img class="card-img" src="{{ asset ('img/icons/chat-de-messenger.png') }}" alt="">
                        <h6>MESSENGER CHAT</h6>
                        <ul>
                            <li>Chat con conexión a fanpage de Facebook.</li>
                        </ul>
                    </div>
                </div>
                <div class="content-structure">
                    <div style="padding: 5px 15px">
                        <img class="card-img" src="{{ asset ('img/icons/asesoria1.png') }}" alt="">
                        <h6>SOPORTE Y ASESORIA</h6>
                        <ul>
                            <li>Soporte tecnico 24 horas de en Hosting</li>
                            <li>Rapida solucion de problemas.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="btn-sect3">
                <button class="button" id="toggleButton">VER TODO <span class="arrow-right">&rarr;</button>
            </div>
        </div>
    </section>
    <section class="general-content">
        <div class="content1-SEO">
            <div class="container-right">
                <h6 style="color: #A18D57;">¿CUANTO COSTARA?</h6>
                <h3>COTIZACION DE SITIOS WEB EN MEXICO</h3>
                <p>Hoy en día con la era digital, es imprescindible que cualquier empresa o negocio en México cuente con una sólida presencia en línea. Un sitio web bien diseñado y funcional es una herramienta fundamental para lograrlo; sin embargo, muchas empresas se preguntan cuánto les costaría crear un sitio web profesionaly eficaz.<br><br>En esta guía, analizamos el proceso de cotización de Selfish, detallando los factores que afectan el costo y ofreciendo consejos para obtener una propuesta competitiva y de alta calidad</p>
                <button onclick="scrollToSection('section-2')" class="button">QUIERO COTIZAR <span class="arrow-up">&uarr;</button>
            </div>
            <div class="container-left" id="lottie-2">
                <dotlottie-player class="lottie-SEO" src="{{ asset ('lottie/Header.json') }}" background="transparent" speed="1" direction="1" playMode="normal" loop autoplay></dotlottie-player>
            </div>
        </div>
    </section>

    <section class="general-content">
        <div class="content2-SEO">
            <div class="container-left" id="lottie-3">
                <dotlottie-player class="lottie-SEO" src="{{ asset ('lottie/Posiciona tu marca.json') }}" background="transparent" speed="1" direction="1" playMode="normal" loop autoplay></dotlottie-player>
            </div>
            <div class="container-right">
                <h6 style="color: #A18D57;">UNA HERRAMIENTA ESENCIAL</h6>
                <h3>LA IMPORTANCIA DE LA PRESENCIA EN LINEA</h3>
                <br>
                <br>
                <p>En el actual y competitivo entorno empresarial, tener una presencia en línea es esencial para atraer a posibles clientes y hacer crecer un negocio. Un sitio web profesional es una herramienta fundamental para lograrlo, ya que permite mostrar los productos y servicios de una empresa de manera eficaz.<br>
                    <br>En esta guía, abordaremos el proceso de cotización de sitios web en México, desde los elementos que inciden en el costo hasta los aspectos clave que deben considerarse para obtener una cotización competitiva y de calidad.
                </p>
            </div>
        </div>
        <div class="content3-SEO">
            <div style="width: 10%;">
                <img src="{{ asset ('img/icons/1.svg') }}" alt="">
            </div>
            <div class="text-content3">
                <h5>1. DEFINICION DE LOS OBJETIVOS DEL SITIO WEB</h5>
                <p>El primer paso para obtener una cotización precisa es definir claramente los objetivos del sitio web. ¿Se trata de un sitio informativo, una tienda en línea o un blog? Comprender el propósito y la funcionalidad prevista del sitio ayudará a los desarrolladores a proporcionar una cotización más precisa</p>
            </div>
        </div>
        <div class="content3-SEO">
            <div style="width: 10%;">
                <img src="{{ asset ('img/icons/2.svg') }}" alt="">
            </div>
            <div class="text-content3">
                <h5>2. La Importancia del Diseño Adapto a dispositivos</h5>
                <p>En la era de los dispositivos móviles, es esencial que el sitio web sea completamente adaptable. Un diseño responsivo garantiza que el sitio se vea y funcione de manera óptima en distintos dispositivos, como teléfonos inteligentes, tabletas y computadoras de escritorio.</p>
            </div>
        </div>
        <div class="content3-SEO">
            <div style="width: 10%;">
                <img src="{{ asset ('img/icons/3.svg') }}" alt="">
            </div>
            <div class="text-content3">
                <h5>3. Funcionalidades Necesarias para el Sitio</h5>
                <p>La inclusión de determinadas funcionalidades específicas, como formularios de contacto, carritos de compra o sistemas de reserva, influirá en el costo total del desarrollo. Es importante especificar todas las funcionalidades necesarias para obtener una cotización precisa.</p>
            </div>
        </div>
        <div class="content3-SEO">
            <div style="width: 10%;">
                <img src="{{ asset ('img/icons/4.svg') }}" alt="">
            </div>
            <div class="text-content3">
                <h5>4. El Rol del SEO en el Desarrollo Web</h5>
                <p>Un aspecto fundamental del desarrollo web es la optimización para motores de búsqueda (SEO). Asegurar que el sitio esté bien optimizado para palabras clave relevantes ayudará a mejorar el posicionamiento en los resultados de búsqueda y atraer más tráfico orgánico.</p>
            </div>
        </div>
        <div class="content3-SEO">
            <div style="width: 10%;">
                <img src="{{ asset ('img/icons/5.svg') }}" alt="">
            </div>
            <div class="text-content3">
                <h5>5. Consideraciones sobre Hosting y Dominio</h5>
                <p>Además del desarrollo del sitio, es esencial tener en cuenta los costos de alojamiento web y registro de dominio. Estos gastos recurrentes varían según el proveedor y las características ofrecidas.</p>
            </div>
        </div>
        <div class="content3-SEO">
            <div style="width: 10%;">
                <img src="{{ asset ('img/icons/6.svg') }}" alt="">
            </div>
            <div class="text-content3">
                <h5>6. Elementos Multimedia y Contenido del Sitio</h5>
                <p>La incorporación de imágenes, videos y otros elementos multimedia puede mejorar la experiencia del usuario en el sitio. Sin embargo, estos elementos también pueden afectar el tiempo de carga del sitio, por lo que es necesario optimizarlos adecuadamente.</p>
            </div>
        </div>
        <div class="content3-SEO">
            <div style="width: 10%;">
                <img src="{{ asset ('img/icons/7.svg') }}" alt="">
            </div>
            <div class="text-content3">
                <h5>7. Seguridad y Protección de Datos</h5>
                <p>La seguridad del sitio web es crucial para proteger la información de los usuarios y prevenir posibles brechas de seguridad. Asegurarse de que el sitio esté protegido con un certificado SSL y otras medidas de seguridad es fundamental.</p>
            </div>
        </div>
        <div class="content3-SEO">
            <div style="width: 10%;">
                <img src="{{ asset ('img/icons/8.svg') }}" alt="">
            </div>
            <div class="text-content3">
                <h5>8. Plazos de Entrega y Proceso de Revisión</h5>
                <p>Es esencial establecer plazos de entrega realistas con los desarrolladores. Además, se deben contemplar revisiones y pruebas para asegurar que el sitio final cumpla con los estándares de calidad requeridos.</p>
            </div>
        </div>
        <div class="content3-SEO">
            <div style="width: 10%;">
                <img src="{{ asset ('img/icons/9.svg') }}" alt="">
            </div>
            <div class="text-content3">
                <h5>9. Mantenimiento y Soporte Post-Lanzamiento</h5>
                <p>El desarrollo del sitio web es solo el principio. Es importante considerar si se requerirá mantenimiento continuo y qué nivel de soporte técnico se proporcionará después del lanzamiento.</p>
            </div>
        </div>
        <div class="content3-SEO">
            <div style="width: 10%;">
                <img src="{{ asset ('img/icons/10.svg') }}" alt="">
            </div>
            <div class="text-content3">
                <h5>10. Factores que Afectan el Costo</h5>
                <p>Varios factores influyen en el costo total del desarrollo del sitio web, como la complejidad del diseño, la cantidad de páginas, la integración de funcionalidades avanzadas y el nivel de experiencia del desarrollador.</p>
            </div>
        </div>
        <div class="button-footer">
            <button onclick="scrollToSection('section-2')" class="button">QUIERO COTIZAR <span class="arrow-up">&uarr;</button>
        </div>

        <div class="content1-SEO">
            <div class="text-heading">
                <h5 style="color:#A18D57;">FAQ'S</h5>
                <h2 style="color: black;">PREGUNTAS FRECUENTES</h2>
                <br>
                <div style="border-left: 1px solid #000000;">
                    <button class="accordion">¿Cuánto tiempo se requiere para desarrollar un sitio web?</button>
                    <div class="panel">
                        <p>El plazo de desarrollo fluctúa en función de la complejidad del proyecto, pero en términos generales, suele oscilar entre 4 y 8 semanas.</p>
                    </div>
                    <button class="accordion">¿Qué es el SEO y por qué es crucial para el éxito en línea?</button>
                    <div class="panel">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                    <button class="accordion">¿Cuál es el costo promedio de diseño web en México?</button>
                    <div class="panel">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                    <button class="accordion">¿Cuál es la diferencia entre dominio y hosting (alojamiento web)?</button>
                    <div class="panel">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                    <button class="accordion">¿Cómo puedo garantizar la seguridad de mi sitio web?</button>
                    <div class="panel">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
            </div>
            <div>
                <img class="lottie-SEO" src="{{ asset ('img/preguntas_frecuentes.webp') }}" alt="">
            </div>
        </div>

        <script>
            var acc = document.getElementsByClassName("accordion");

            for (var i = 0; i < acc.length; i++) {
                acc[i].addEventListener("click", function() {
                    var panel = this.nextElementSibling;
                    var panels = document.getElementsByClassName("panel");
                    var icons = document.querySelectorAll(".accordion");

                    for (var j = 0; j < panels.length; j++) {
                        if (panels[j] !== panel) {
                            panels[j].classList.remove("active");
                        }
                    }

                    panel.classList.toggle("active");

                    // Cambia el ícono del botón actual y los otros botones
                    icons.forEach(function(icon) {
                        if (icon === this) {
                            icon.classList.toggle("active", panel.classList.contains("active"));
                        } else {
                            icon.classList.remove("active");
                        }
                    }, this);
                });
            }

            document.getElementById('toggleButton').addEventListener('click', function() {
                var content = document.getElementById('content');
                var button = document.getElementById('toggleButton');

                if (content.style.display === 'none') {
                    content.style.display = 'flex';
                    button.innerHTML = 'OCULTAR &larr;';
                } else {
                    content.style.display = 'none';
                    button.innerHTML = 'VER TODO &rarr;';
                }
            });


            function scrollToSection(sectionId) {
                var section = document.getElementById(sectionId);
                if (section) {
                    window.scrollTo({
                        behavior: 'smooth',
                        top: section.offsetTop
                    });
                }
            }
        </script>
    </section>
</body>
<!-- Importa la biblioteca Lottie Web -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.12/lottie.min.js"></script>
<script>
    const animationPaths = [
        "{{ asset('lottie/01-header.json') }}",
        "{{ asset('lottie/Header.json') }}",
        "{{ asset('lottie/Posiciona tu marca.json') }}",
        // Agrega más rutas de archivos JSON según sea necesario
    ];

    animationPaths.forEach((path, index) => {
        const containerId = `lottie-${index + 1}`;
        const animation = lottie.loadAnimation({
            container: document.getElementById(containerId),
            path: path,
            renderer: 'svg',
            loop: true,
            autoplay: true
        });
    });
</script>
<script>
function seleccionarServicio(idServicio) {
    var selectedServiceIds = []; // Lista de IDs de servicios seleccionados

    // Obtener la lista de IDs de servicios seleccionados de localStorage
    var storedValue = localStorage.getItem('selectedServiceIds');
    if (storedValue) {
        try {
            selectedServiceIds = JSON.parse(storedValue);
        } catch (error) {
            console.error('Error al parsear JSON en localStorage:', error);
            // Manejar el error de parseo de JSON
        }
    }

    // Agregar el ID del servicio actual a la lista de IDs seleccionados
    selectedServiceIds.push(idServicio);

    // Guardar la lista actualizada de IDs de servicios seleccionados en localStorage
    localStorage.setItem('selectedServiceIds', JSON.stringify(selectedServiceIds));

    const urlsPorServicio = {
        1: '/page-lading/lading2',
        2: '/page-web/panel2',
        3: '/e-commerce/ecommerce2',
        4: '/product-catalog/product2',
        5: '/custom-system/custom2'
    };

    if (urlsPorServicio[idServicio]) {
        // Redirigir a la URL correspondiente al ID del servicio seleccionado
        window.location.href = `${urlsPorServicio[idServicio]}?id=${idServicio}`;
    } else {
        console.error(`No se encontró una URL para el servicio con ID ${idServicio}`);
        // Redirigir a una página de error en caso de no encontrar la URL asociada
        window.location.href = '/error';
    }
}
</script>

<script src="{{ asset ('js/scripts.js') }}"></script>

</html>
