<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ZonaCero</title>
    <link rel="stylesheet" href="/css/app.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap"
        rel="stylesheet" />
</head>

<body>
    <!-- Sector 1: Bienvenida y Menú de Navegación -->
    <section id="Bienvenida" class="sector">
        <h1 id="Cartel_b">Bienvenidos a Zona Cero</h1>
        <nav>
            <a href="#Bienvenida">Zona Cero</a>
            <a href="#Consolas">Consolas disponibles</a>
            <a href="#sector3">Reparaciones</a>
        </nav>
        <div id="slider">
            <img
                src="https://www.callofduty.com/content/dam/atvi/callofduty/cod-touchui/blog/hero/mw-wz/WZ-Season-Three-Announce-TOUT.jpg"
                alt="" />
            <img
                src="https://th.bing.com/th/id/R.ffbb48f63d40b4d0ccdd3f624562ac70?rik=fxDnzOVb1emdLQ&pid=ImgRaw&r=0"
                alt="" />
            <img
                src="https://cdn2.mediotiempo.com/uploads/media/2022/10/18/ea-sports-5.jpg"
                alt="" />
            <img src="https://thekoalition.com/images/2020/12/mk11u.jpg" alt="" />
            <img
                src="https://th.bing.com/th/id/R.8310f0b341e513f487877990a3079673?rik=T4ug9IqOeppKdQ&riu=http%3a%2f%2fgearnuke.com%2fwp-content%2fuploads%2f2016%2f08%2fCall-of-duty-black-ops-3-1.jpg&ehk=vvdcVS3jWyfdTJdZimzNh6WgiBOk6ICIPrTB97PxsLc%3d&risl=&pid=ImgRaw&r=0"
                alt="" />
            <img
                src="https://cdn2.unrealengine.com/Diesel%2Fproductv2%2Fgrand-theft-auto-v%2Fhome%2FGTAV_EGS_Artwork_1920x1080_Hero-Carousel_V06-1920x1080-1503e4b1320d5652dd4f57466c8bcb79424b3fc0.jpg"
                alt="" />
            <img
                src="https://assets-prd.ignimgs.com/2022/08/31/thelastofus-part1-review-blogroll-1661921378847.jpg"
                alt="" />
            <img src="https://wallpapercave.com/wp/wp7202139.jpg" alt="" />
            <img
                src="https://gameranx.com/wp-content/uploads/2017/09/860735.jpg"
                alt="" />
        </div>
    </section>

    <!-- Sector 2: Cuadros Simétricos -->
    <section id="Consolas" class="sector">
        <div class="cuadros">
            <div class="cuadro">
                <div class="imagen-container">
                    <img
                        src="https://rukminim1.flixcart.com/image/1664/1664/gamingconsole/g/a/t/playstation-4-ps4-500-sony-dualshock-4-controller-original-imadrhehpvvetkgf.jpeg?q=90"
                        alt="Descripción de la imagen" />
                </div>
                <div class="temporizador">Tiempo restante:</div>
                <div id="temporizador1" class="temporizador"></div>
            </div>
            <div class="cuadro">
                <div class="imagen-container">
                    <img
                        src="https://www.slickwraps.com/cdn/shop/products/xbox-one-s-green-glow-skin-slickwraps.jpg?v=1670612075"
                        alt="" />
                </div>
                <div class="temporizador">Tiempo restante:</div>
                <div id="temporizador3" class="temporizador"></div>
            </div>
            <div class="cuadro">
                <div class="imagen-container">
                    <img
                        src="https://rukminim1.flixcart.com/image/1664/1664/gamingconsole/g/a/t/playstation-4-ps4-500-sony-dualshock-4-controller-original-imadrhehpvvetkgf.jpeg?q=90"
                        alt="" />
                </div>
                <div class="temporizador">Tiempo restante:</div>
                <div id="temporizador2" class="temporizador"></div>
            </div>
        </div>
    </section>

    <!-- Sector 3: Espacio en Blanco -->
    <section id="sector3" class="sector"></section>


    <script src="/js/contador.js"></script>
    <script src="/js/slider.js"></script>
    <script src="/js/visuals.js"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        obtenerTiemposConsola(1, 'temporizador1'); // Consola 1
        obtenerTiemposConsola(2, 'temporizador2'); // Consola 2
        obtenerTiemposConsola(3, 'temporizador3'); // Consola 3
    });
</script>

</body>

</html>