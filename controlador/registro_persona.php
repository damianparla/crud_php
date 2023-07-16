<?php
if (isset($_POST["btnregistrar"])) {
    if (!empty($_POST["nombre"]) && !empty($_POST["apellido"]) && !empty($_POST["dni"]) && !empty($_POST["fecha"]) && !empty($_POST["correo"])) {
        
        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellido"];
        $dni=$_POST["dni"];
        $fecha=$_POST["fecha"];
        $correo=$_POST["correo"];

        $sql=$conexion->query("insert into crud_php(nombre, apellido, dni, fecha_nac, correo) values('$nombre','$apellido','$dni','$fecha','$correo')");
        if ($sql) {
            echo '<div class="alert alert-success">Persona registrada correctamente</div>';
        } else {
            echo '<div class="alert alert-danger">Error al registrar persona</div>';
        }
        
                      
    }
    else {
        echo '<div class="alert alert-warning">Alguno de los campos está vacío</div>';
    }
}
?>


