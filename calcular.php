<?php

// AQUÍ ASOCIO LAS VARIABLES PHP CON LAS VARIABLES DEL FORMULARIO
$email = $_POST['Email1'];
$peli = $_POST['pelicula'];
$numero = $_POST['cantidad'];
$fecha = $_POST['fecha'];



// AQUÍ CALCULO EL VALOR DE LAS ENTRADAS Y, ADEMÁS, GENERO UN NUMERO ALEATORIO


$precio = ($numero * 3000);
$reserva = mt_rand(1, 10000);

$pelicula = "";
switch ($peli) {
    case "a":
        $pelicula = "INDIANA JONES: LOS CAZADORES DEL ARCA PERDIDA";
        break;
    case "b":
        $pelicula = "STAR WARS VI: EL RETORNO DEL JEDI";
        break;
    case "c":
        $pelicula = "2001: ODISEA AL ESPACIO";
        break;
    case "d":
        $pelicula = "MEDIANOCHE EN PARÍS";
        break;

}

$hora = "";
switch ($peli) {
    case "a":
        $hora = "17.30hs";
        break;
    case "b":
        $hora = "20hs";
        break;
    case "c":
        $hora = "15hs";
        break;
    case "d":
        $hora = "23.30hs";
        break;

}

// AQUÍ ELIGE LA IMAGEN A MOSTRAR
$imagen = "";
switch ($peli) {
    case "a":
        $imagen = "gallery/1_INDIANA.jpg";
        break;
    case "b":
        $imagen = "gallery/2_STAR.jpg";
        break;
    case "c":
        $imagen = "gallery/3_ODISEA.jpg";
        break;
    case "d":
        $imagen = "gallery/4_MEDI.jpg";
        break;

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CINE RETRO OLAVARRIA</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="gallery/logo.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
</head>


<body>
    <div class="php-container">
        <!-- HEADER -->
        <header class="header" id="p0">
            <logo class="logo"><img src="gallery/logo.png" alt=""></logo>
            <h1>CINE RETRO OLAVARRIA</h1>
            <nav class="nav">
                <ul class="navbar">
                    <li><a href="index.html" target="_blank">INICIO</a></li>
                    <li><a href="index.html#p4" target="_blank">PROMOCIONES</a></li>
                    <li><a href="index.html#p6" target="_blank">RESERVA</a></li>

                </ul>
            </nav>
        </header>
        <!-- SECCION 1 -->
        <section class="sec1" id="p6">
            <h2>¡SU RESERVA HA SIDO REALIZADA!</h2>
            <br>
            <p>¡Gracias por sumarte a la experiencia del cine retro en nuestra sala! Esperamos que disfrutes de la
                película
                que has seleccionado y que tengas una experiencia inolvidable en nuestra sala. La información de la
                función,
                reserva y datos de pago se detallan a continuación:
            </p>
            <br>

            <div class="reserva-container">
                <div class="reserva">
                    <img src="<?php echo $imagen; ?>" alt="Póster de Película 2">
                    <h2>
                        <?php echo $pelicula; ?>
                    </h2>
                    <h3>Número de reserva:</h3>
                    <p>
                        <?php echo $reserva; ?>
                    </p>
                    <h3>Reserva asociada a email:</h3>
                    <p>
                        <?php echo $email; ?>
                    </p>
                    <h3>Cantidad de entradas:</h3>
                    <p>
                        <?php echo $numero; ?>
                    </p>
                    <h3>Valor total</h3>
                    <p>
                        <?php echo $precio; ?>
                    </p>
                    <h3>Fecha</h3>
                    <p>
                        <?php echo $fecha, (" - ");
                        echo $hora; ?>
                    </p>
                </div>
            </div>
            <br>
            <p>Si desea pagar su reserva de forma online, haga click en el botón de debajo. Una vez realizado el pago
                (alias "cine.retro.olav"),
                enviar comprobante a cineretroolav@gmail.com</p>

            <br>
            <a href="https://www.mercadopago.com.ar/" target="_blank" class="boton-pago">
                <img src="gallery/mp_logo.png" alt="Pagar con Mercado Pago">
            </a>


        </section>
        <!-- FOOTER -->

        <footer class="footer" id="p9">
            <div class="footer-content">
                <div class="footer-info">
                    <h3>NUESTRAS REDES</h3>
                    <br>
                    <div class="ic">
                        <a href="https://www.instagram.com/cineparis/" target="_blank"><img src="gallery/ig_icon.png"
                                alt="" class="icono">
                        </a>
                        <h4>@cineretroolav</h4>
                    </div>
                    <br>
                    <div class="ic">
                        <a href="https://www.facebook.com/CineParisOlavarria" target="_blank"><img
                                src="gallery/fb_icon.png" alt="" class="icono">
                        </a>
                        <h4>@cineretroolav</h4>
                    </div>
                </div>
                <div class="footer-links">
                    <a href="https://static.cinepolis.com/resources/mx/documents/terminos-y-condiciones-generales.pdf"
                        target="_blank">Política
                        de Privacidad</a>
                    <a href="https://tickets.cinemarkhoyts.com.ar/NSTicketing/StaticContent/Terminos_y_CondicionesCinemarkStore.pdf?v=00002282&_gl=1*1w7bofa*_ga*MTc0NDA3NDMwNS4xNzA4Mjg0Mjg1*_ga_PT9RP27V93*MTcwODI4NDI4NS4xLjAuMTcwODI4NDI5Mi41My4wLjA."
                        target="_blank">Términos
                        y Condiciones</a>
                    <a href="index.html">Acerca de Nosotros</a>
                </div>
            </div>
        </footer>

    </div>

</body>

</html>