<?php
include "modelo/conexion.php";

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Obtener el ID del registro a eliminar
    $id = $_GET["id"];

    // Verificar si el ID es válido
    if (!empty($id)) {
        // Realizar la eliminación en la base de datos
        $sql = $conexion->query("DELETE FROM crud_php WHERE id_persona = $id");

        if ($sql) {
            // Redireccionar a la página principal después de la eliminación exitosa
            header("Location: index.php");
            exit();
        } else {
            // Mostrar un mensaje de error en caso de fallo en la eliminación
            echo "Error al eliminar el registro";
        }
    } else {
        // Mostrar un mensaje de error si no se proporcionó un ID válido
        echo "ID inválido";
    }
}
?>
