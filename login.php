<?php
include 'funciones.php';

if (isset($_POST['submit'])) {
 
  $resultado = [
    'error' => false,
    'mensaje' => 'Usuario agregado con éxito'
  ];

  $config = include 'configuracion.php';

  try {
    $dsn = 'mysql:host=' . $config['db']['host'] . ';dbname=' . $config['db']['name'];
    $conexion = new PDO($dsn, $config['db']['user'], $config['db']['pass'], $config['db']['options']);

    $usuario = [
        "nombre"   => $_POST['nombre'],
        "apellidopaterno"    => $_POST['apellidopaterno'],
        "apellidomaterno"     => $_POST['apellidomaterno'],
        "correo" => $_POST['correo'],
        "rfc" => $_POST['rfc'],
        "contraseña" => $_POST['contraseña'],
      ];


        $consultaSQL = " INSERT INTO usuario (nombre_usuario, A_Paterno, A_Materno, eMail, rfc, contraseña)";
        $consultaSQL .= "values (:" . implode(", :", array_keys($usuario)) . ")";

        $sentencia = $conexion->prepare($consultaSQL);
        $sentencia->execute($usuario);

  } catch(PDOException $error) {
    $resultado['error'] = true;
    $resultado['mensaje'] = $error->getMessage();
  }


}

?>

<?php
	ob_start();
	session_start();
?>

<?
	error_reporting(E_ALL);
	ini_set("display errors", 1);
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="icon" href="img/img4.png">
    <link rel="stylesheet" href="estilos.css">
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="loginCSS.css" />
    <title>Login</title>
  </head>

  <body>
    <!-- Código de Login -->
		
    <div class="container">
	
	<?php
		if(isset($_POST['login']) && !empty($_POST['username']) && !empty($_POST['password']))
			echo 'Has ingresado';
		else {
			$msg = 'El nombre de usuario o contraseña no es válido';
		}
	?>
	
      <div class="forms-container">
        <div class="signin-signup">
          <form action="#" class="sign-in-form">
            <img class="logoTEC" src="fotos/TECNMorelia.png" alt="">
              <h2 class="title">Bienvenido</h2>
                <div class="input-field">
                  <i class="fas fa-user"></i>
                    <input type="text" placeholder="Correo Electrónico" />
                </div>
                <div class="input-field">
                  <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Contraseña" />
                </div>
                <input href="landingpage.php" type="submit" value="Login" class="btn" />
                
                <input href="landingpage.php" type="submit" value="Regresar" class="btn" />
                

                

          </form>

          <!-- Código de Registro -->
		  
		 <?php
			if (isset($resultado)) {
		  ?>
			<div class="container">
				<div class="input-field">
					<div class="alert alert-<?= $resultado['error'] ? 'danger' : 'success' ?>" role="alert">
						<?= $resultado['mensaje'] ?>
					</div>
				</div>
			</div>
        <?php
			}
		?>
		  
          <form action="login.php" class="sign-up-form" method="post">
            <h2 class="title">Regístrate</h2>
              <div class="input-field">
                <i class="fas fa-user"></i>
                  <input type="text" name="nombre" id="nombre" placeholder="Nombre(s)" />
              </div>
              <div class="input-field">
                <i class="fas fa-user"></i>
                  <input type="text" name="apellidopaterno" id="apellidopaterno" placeholder="Apellido Paterno" />
              </div>
              <div class="input-field">
                <i class="fas fa-user"></i>
                  <input type="text" name="apellidomaterno" id="apellidomaterno" placeholder="Apellido Materno" />
              </div>
              <div class="input-field">
                <i class="fas fa-envelope"></i>
                  <input type="email" name="correo" id="correo" placeholder="Correo electronico" />
              </div>
              <div class="input-field">
                <i ></i>
                  <input type="text" name="rfc" id="rfc" placeholder="Ingrese RFC" />
              </div>
              <div class="input-field">
                <i class="fas fa-lock"></i>
                  <input type="password" name="contraseña" id="contraseña" placeholder="Contraseña" />
              </div>

            <button href="landingpage.php" class="btn" value="Registrar">
             Regístrate
            </button>
            
            
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>¿No tienes cuenta?</h3>
            <p>
              Registrate ahora
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Registrarme
            </button>
          </div>
          <img src="img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>¿Ya tienes una cuenta?</h3>
            <p>
              Inicia Sesión
            </p>
            <button href="landingpage.php" class="btn transparent" id="sign-in-btn">
              Iniciar sesión
            </button>
          </div>
          <img src="img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="loginJS.js"></script>
  </body>
</html>