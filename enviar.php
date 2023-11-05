<?php
include("configuracion.php");
if(isset($_POST['enviar'])){
    if(
        strlen($_POST['correo']) >=1 &&
        strlen($_POST['nombre']) >=1 &&
        strlen($_POST['apellido']) >=1 &&
        strlen($_POST['dependencia']) >=1 &&
        strlen($_POST['rfc']) >=1 &&
        strlen($_POST['telefono']) >=1 &&
        strlen($_POST['comentarios']) >=1 
    ){
        $correo = trim($_POST['correo']);
        $nombre = trim($_POST['nombre']);
        $apellido = trim($_POST['apellido']);
        $dependencia = trim($_POST['dependencia']);
        $rfc = trim($_POST['rfc']);
        $telefono = trim($_POST['telefono']);
        $comentarios = trim($_POST['comentarios']);
        $consulta = "INSERT INTO cliente(correo, nombre, apellido, dependencia, rfc, telefono, comentarios)
            VALUES('$correo', '$nombre', '$apellido', '$dependencia', '$rfc', '$telefono', '$comentarios') ";
        
        $resultado = mysqli_query($conexion,$consulta);

        if($consulta){
            ?>
                <h3>Tu mensaje ha sido enviado</h3>
            <?php
        }else{
            ?>
                <h3>Ocurrió un error</h3>
            <?php    
        }

    }else{
        ?>
            <h3>Llena todos los campos</h3>
        <?php
    }
}

?>