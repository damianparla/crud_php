<?php
include "modelo/conexion.php";

$id = $_GET["id"];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Procesar formulario de modificación
    if (!empty($_POST["nombre"]) && !empty($_POST["apellido"]) && !empty($_POST["dni"]) && !empty($_POST["fecha"]) && !empty($_POST["correo"])) {
        // Obtener los datos del formulario
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $dni = $_POST["dni"];
        $fecha = $_POST["fecha"];
        $correo = $_POST["correo"];

        // Actualizar los datos en la base de datos
        $sql = $conexion->query("UPDATE crud_php SET nombre = '$nombre', apellido = '$apellido', dni = '$dni', fecha_nac = '$fecha', correo = '$correo' WHERE id_persona = $id");

        if ($sql) {
            // Redireccionar a la página principal después de la actualización exitosa
            header("Location: index.php");
            exit();
        } else {
            // Mostrar un mensaje de error en caso de fallo en la actualización
            echo "Error al modificar el registro";
        }
    } else {
        // Mostrar un mensaje de error si hay campos vacíos en el formulario
        echo "Todos los campos son obligatorios";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Obtener los datos del registro correspondiente al ID de la base de datos
    $sql = $conexion->query("SELECT * FROM crud_php WHERE id_persona = $id");
    $registroEncontrado = $sql->fetch_object();

    // Verificar si se encontró el registro
    if ($registroEncontrado) {
        // Asignar los valores obtenidos a las variables correspondientes
        $nombre = $registroEncontrado->nombre;
        $apellido = $registroEncontrado->apellido;
        $dni = $registroEncontrado->dni;
        $fecha = $registroEncontrado->fecha_nac;
        $correo = $registroEncontrado->correo;
    } else {
        // Redireccionar a la página principal si el registro no se encontró
        header("Location: index.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar persona</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <form class="col-4 p-3 m-auto" method="POST">
        <h3 class="text-center text-secondary">Modificar persona</h3>
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre de la persona</label>
            <input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo $nombre; ?>">
        </div>
        <div class="mb-3">
            <label for="apellido" class="form-label">Apellido de la persona</label>
            <input type="text" class="form-control" name="apellido" id="apellido" value="<?php echo $apellido; ?>">
        </div>
        <div class="mb-3">
            <label for="dni" class="form-label">DNI de la persona</label>
            <input type="text" class="form-control" name="dni" id="dni" value="<?php echo $dni; ?>">
        </div>
        <div class="mb-3">
            <label for="fecha" class="form-label">Fecha de nacimiento</label>
            <input type="date" class="form-control" name="fecha" id="fecha" value="<?php echo $fecha; ?>">
        </div>
        <div class="mb-3">
            <label for="correo" class="form-label">Correo</label>
            <input type="text" class="form-control" name="correo" id="correo" value="<?php echo $correo; ?>">
        </div>

        <button type="submit" class="btn btn-primary" name="btnmodificar" value="ok">Modificar</button>
    </form>
</body>

</html>
