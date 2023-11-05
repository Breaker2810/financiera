<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contáctanos</title>
    <link rel="icon" href="img/img4.png">
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <main class="principal">
        <div class="contenedor1">
        <header class="cabecera">
        <div class="logo">
            <a href="landingpage.php"><img src="img/img5.png" alt="Logo"></a>
        </div>
        <nav class="navegacion">
            <a href="landingpage.php" class="link">Inicio</a>
            <a href="historia.html" class="link">Nosotros</a>
            <a href="convenios.html" class="link">Convenios</a>
            <a href="sucursales.html" class="link">Sucursales</a>
            <a href="contacto.php" class="link">Contacto</a>
            <a href="login.php" class="link">Login</a>
        </nav>
        </header>
        <div class="textocon">
            <h1>CONTACTO</h1>
            <h2>¡COTIZA HOY MISMO TU CRÉDITO!</h2>
            <p class="inscon">Llena el siguiente formulario y pronto un asesor se comunicará contigo con un préstamo hecho a tu medida.</p>
            
        </div>



        <div class="formulariocon">
            <div class="formulariocon1">
                <form action="landingpage.php" method="post" class="formcon">
                    <input type="email" name="correo" id="correo" class="item3" placeholder="Correo electrónico">
                    <input type="text" name="nombre" id="nombre" class="item1" placeholder="Nombre(s)">
                    <input type="text" name="apellido" id="apellido" class="item1" placeholder="Primer Apellido">
                    <select title="Dependencia" name="dependencia" id="item2" class="item2">
                        <option value="">Dependencia</option>
                        <option value="">Estatales</option>
                        <option value="">Federales</option>
                        <option value="">Sector Salud</option>
                        <option value="">Pensionado o Jubilado IMSS</option>
                        <option value="">UNAM</option>
                        <option value="">IMSS Confianza y estatuto 'A'</option>
                        <option value="">IMSS Pensionados ley</option>
                    </select>
                    <input type="text" name="rfc" id="rfc" class="item1" placeholder="RFC">
                    <input type="text" name="telefono" id="telefono" class="item1" placeholder="Télefono">
                    <textarea name="comentarios" id="comentarios" cols="30" rows="10" class="textarea1" placeholder="Comentarios">Comentarios</textarea>
                    <input type="submit" name="enviar" value="Enviar" class="Submit1">
                    <!--<input type="submit" name="submit" class="btn btn-primary" value="Enviar">-->
                </form>
                <?php
                    include("enviar.php");
                ?>


            </div>
			<div class="inform">
                <h2>¿Te preocupa tu información?</h2>
                <br>
                <p>Puedes estar tranquil@, en Consultoria Financiera somos muy cuidadosos y responsables
                    con el manejo de información personal, si necesitas conocer mas detalles acerca del manejo 
                    y uso de tus datos no dudes en consultar:
                </p>
                <br>
                <a href="terycon.html">Términos y Condiciones</a>
                <br>
                <br>
                <a href="Preguntas.html">Preguntas Frecuentes</a>
                         </div>
        </div>
			
        </div>
		


        <div class="dudas">
            <p class="schedule-text">
                Si tienes alguna duda o aclaración
            </p>
            <p class="schedule-text">sobre nuestros servicios, comunícate a nuestra…</p>
            <img src="img/img4.png" alt="">
            <p class="schedule-text">Llama al</p>
            <p class="schedule-hour">4432575821</p>
            <p class="schedule-text">Lunes a viernes de </p>
            <p class="schedule-hour">9:00 am a 5:00 pm</p>

        </div>
        <div class="contenedor-9">
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
        </div>    
    </main>
</body>
</html>