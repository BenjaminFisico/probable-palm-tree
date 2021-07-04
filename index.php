<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Benjamin Fisico Desarrollo</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css'>
    <link rel='stylesheet' href='./css/style.css'>
</head>

<body>
    <header>
        <h1> Benjamin Fisico </h1>
        <nav>
            <ul>
                <li><a href="#pry"><i class="fas fa-archive"></i> Proyectos</a></li>
                <li><a href="#herram"><i class="fas fa-code"></i> Herramientas</a></li>
                <li><a href="#ctc"><i class="fas fa-phone-alt"></i> contacto</a></li>
                <li><a href="#sbrmi"><i class="fas fa-address-card"></i> sobre mi</a></li>
            </ul>
        </nav>
        <ul class="slider">
            <li id="slide1">¡Bienvenido a mi pagina WEB!</li>
            <li id="slide2">Soy un analista de sistemas</li>
            <li id="slide3">Aca encontraras todo sobre mi</li>
        </ul>
    </header>

    <main>
        <div class = "containerw" id="sbrmi">
            <h2> ¿quien soy? </h2><br>
            <p>Mi nombre es Benjamín Alejandro Fisico<br> naci el 1/11/1998, por lo que actualmente tengo 22 años.
                <br>Mi principal trabajo es el de un analista, programador y/o diseñador de aplicaciones. Lo que incluye
                paginas webs, software de escritorio (enlatado y a medida), bases de datos, automatizacion, etc.<br>
                Aun que por cuestiones de tiempo, no siempre es posible, en mi tiempo libre me gusta buscar innovaciones
                creando aplicaciones unicas.
            </p>
            <br>
            <h2><a>Quiero saber más</a></h2>
        </div>

        <div class = "containerb" id="trbjnts">
            <h2> ¿Quieres trabajar conmigo?</h2>
            <br> <br>
            <p>Juntos podemos lograr cosas increibles, no dudes en <a href="#ctc"> contactarme </a></p>
            <br> <br>
        </div>

        <div class = "containerw" id="pry">
            <h2> Proyectos </h2>
            <p>Aca encontraras todo lo referente a los proyectos que realice, o estoy realizando</p>
            <br>
            <h2><a href="#">Quiero saber más</a></h2>
        </div>

        <div class = "containerb" id="herram">
            <h2> Herramientas </h2>
            <p>Estas son algunas de las herrramientas que ya utilice</p>
            <div class = "items">
                <img src="src/icon_html5.png" title="HTML 5"> <img src="src/icon_css3.png" title="CSS 3"> <img src="src/icon_javascript.png" title="JavaScript">
                <img src="src/icon_java.png" title="Java"> <img src="src/icon_mysql.png" title="MySql"> <img src="src/icon_arduino.png" title="Arduino"> <img src="src/icon_gamemaker.png" title="Game Maker">
            </div>
            <h2><a href="#">Quiero saber más</a></h2>
        </div>

        <div class = "containerw">
            <h2> Redes sociales </h2>
            <p>(Clickea en el icono para acceder directamente )</p>
            <div class = "items">
                <a href="https://www.instagram.com/benjafisico/"><img src="src/icon_instagram.png" title="Instagram"></a>
                <a href="https://www.facebook.com/benjaminkpoooo"><img src="src/icon_facebook.png" title="Facebook"></a>
            </div>
        </div>

        <div class = "containerb" id="ctc">
            <h2> Contactame </h2>
            <p> La forma mas facil y rapida de contactarme es en mi whatsapp </p>
            <p> (clickea el icono para enviarme un mensaje)</p>
            <div class = "items">
                <a href="https://api.whatsapp.com/send?phone=542342463886"><img src="src/icon_whatsapp.png"></a>
            </div>
            <div id="qrdiv">
                <span><img src="src/img_qr.png"></span>
                <p> o escanea el codigo QR de la derecha</p>
            </div>
            <br>
            <h2><?php¡Tambien podes enviarme un correo electronico!?></h2>
            <form action="" method="post">
                <fieldset>
                    <label for="email">Correo electronico:</label>
                    <input type="email" name="email" required>
                    <br>
                    <label for="ast">Asunto:</label>
                    <input type="text" name="ast">
                    <p>mensaje</p>
                    <textarea id="mensaje" name="msj" rows="7" cols="50" maxlength="350" minlength="30" placeholder="Introduce tu mensaje..." class="TxtBox" required></textarea>
                    <input type="submit">

                </fieldset>
            </form>
        </div>

        <div class = "btnInicio">
            <a href="#"><i class="fas fa-chevron-circle-up"></i></a>
        </div>
    </main>

    <footer>Benjamin Fisico <i class="fas fa-globe-americas"></i></footer>

    <!-- Script's zone -->
    <script src="js/AutomatiChange.js"></script>
    <link href="js/AutomatiChange.js" rel="text/javascript">
    <script src="database/databaseconnect.php"></script>
    <link href="database/databaseconnect.php" rel="text/php">
</body>

</html>