

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Consultoría Financiera</title>
    <link rel="icon" href="img/img4.png">
</head>
<body>
    <main class="principal">
        <section class="contenedor-1">
            <header class="cabecera">
                <div class="logo">
                    <a href="landingpage.php"><img src="img/img5.png" alt="Logo"></a>
                </div>
                <nav class="navegacion">
                    <a href="landingpage.php" class="linkl">Inicio</a>
                    <a href="historia.html" class="linkl">Nosotros</a>
                    <a href="convenios.html" class="linkl">Convenios</a>
                    <a href="sucursales.html" class="linkl">Sucursales</a>
                    <a href="contacto.php" class="linkl">Contacto</a>
                    <a href="login.php" class="linkl">Login</a>

                </nav>
            </header>

            <div class="banner">
                <div class="textos">
                    <h2>Cumplimos 8 años </h2>
                    <h1>BRINDANDO LA MEJOR OPCIÓN</h1>
                    <p>En Consultoría Financiera sentimos un gran orgullo
                    de contribuir a cambiar la vida de miles de trabajadores
                    mexicanos y sus familias desde 2015.
                    </p>
                    <br>
                    <a href="historia.html">CONOCE MÁS</a>
                </div>

            </div>
        </section>
		
		<section class="contenedor-2" >
            <div class="videos">
                <video src="img/video2.mp4" class="videofin" autoplay loop controls></video>
            </div>
		
        <!--<section class="contenedor-2">
            <div class="text">
                <h2>¿A QUIÉN VA DIRIGIDO EL CRÉDITO PERSONAL?</h2>
                <p>Si eres trabajador del gobierno del estado, sector salud o educación, puedes solicitar tu efectivo con nosotros, con la seguridad de recibir una respuesta en menos de 24 horas.                
                </p>
                <p>¿Tienes alguna situación de pago en buró? No te preocupes, puedes disfrutar de nuestros beneficios sin importar tu estatus en el buró, pues el pago de tu crédito se descontará automáticamente de tu salario o pensión.</p>
            </div>
            <div class="fotos">
                <div class="imagen">
                <img src="img/img13.png" alt="Sector Salud">
                </div>
            </div>
            </section>
        <section class="contenedor-3">
            <div class="contenedor-3-imagen">
                <img src="img/img6.jpg" alt="Imagen1">
            </div>
            <div class="contenedor-3-texto">
                <h2>Vela por tu futuro</h2>
                <p>Te ofrecemos un lugar seguro para guardar tu fondo de ahorro y de inversion.</p>
                <a href="historia.html">Saber más</a>
            </div>-->
        </section>

        <section class="contenedor-4">
           
            <div class="contenedor-4-texto">
                <h2>Realiza cotizaciones de forma eficaz</h2>
                <p>Con tan solo una imagen de tu nómina</p>
                <a href="contacto.php">Saber más</a>
            </div>
            <div class="contenedor-4-img">
                <img src="img/img7.png" alt="Imagen2">
            </div>
        </section>

        <section class="contenedor-5">
            <div class="contenedor-5-texto">
                <h2>Estadísticas</h2>
            </div>
            <div class="contenedor-5-data">
                <div class="data">
                    <h3>+3,000</h3>
                    <p>Clientes</p>
                </div>
                <div class="data">
                    <h3>10</h3>
                    <p>Sucursales</p>
                </div>
                <div class="data">
                    <h3>15</h3>
                    <p>Ciudades</p>
                </div>
            </div>
        </section>

        <section class="contenedor-6">
            <h2 class="titulo">Estamos para servirte</h2>
            <div class="contenedor-6-servicios">
                <div class="servicio">
                    <h3>Atención al cliente</h3>
                    <img src="img/img8.png" alt="Imagen3">
                    <p>Atendemos personalmente tus dudas.</p>
                </div>
                <div class="servicio">
                    <h3>Plazos</h3>
                    <img src="img/img9.png" alt="Imagen4">
                    <p>Desde 6 a 60 meses.</p>
                </div>
                <div class="servicio">
                    <h3>Créditos</h3>
                    <img src="img/img10.png" alt="Imagen5">
                    <p>Llévate hasta $500,000</p>
                </div>
            </div>
        </section>
        <section class="contenedor-8">
            <div class="contenedor-8-formulario">
                <h2 class="contenedor-8-titulo">No te pierdas nuestras promociones</h2>
                <p class="contenedor-8-parrafo"> Para recibir más información puedes enviarnos tu dirección de correo electrónico y nos comunicaremos contigo. !Te esperamos¡</p>
                <form action="landingpage.php" class="contenedor-8-form">
                    <input type="email" name="correo" id="correo" class="input-email" placeholder="Correo Electrónico"/>
                    <input type="submit" name="submit" class="input-submit" value="Enviar">
                </form>
                <?php
                include("solicitar.php");
                ?>

            </div>
        </section>
        <section class="contenedor-9">
            <div class="footer-texto">
                <div class="caja1">
                    <h3>Búscanos en</h3>
                    <p>Siervo de la Nación #1264-B. Fraccionamiento Libertad. Morelia, Mich. Télefono (443) 427 1209</p>
                    <div class="rs">
                        <img src="img/WhatsApp.png" alt="WhatsApp" class="fa-whattsapp">
                    </div>
                </div>
                <div class="caja2">
                    <h3>Acerca de</h3>
                    <a href="historia.html">Historia</a>
                    <a href="terycon.html">Términos y Condiciones</a>
                   
                </div>
                <div class="caja3">
                    <h3>Servicios</h3>
                    <a href="Preguntas.html">Preguntas frecuentes</a>
                    
                </div>
                <div class="caja4">
                    <h3>Otros</h3>
                    <a href="contacto.php">Contáctanos</a>
                    
                </div>
            </div>
            <footer class="pie">
                <p>Copyright &copy; 2023. <a href="">Consultoría Financiera </a> | Todos los derechos reservados</p>
            </footer>
        </section>
        

    </main>
</body>
</html>