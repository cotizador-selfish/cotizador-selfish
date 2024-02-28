// animation.js

import lottie from 'lottie-web';

const animationPath = '/lottie/01-header.json';

const animation = lottie.loadAnimation({
    container: document.getElementById('nombre-del-contenedor'),
    path: animationPath,
    renderer: 'svg',
    loop: true,
    autoplay: true
});
