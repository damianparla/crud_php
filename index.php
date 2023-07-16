<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud en php y mysql</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f4f4;
            font-family: Arial, sans-serif;
        }

        h1 {
            text-align: center;
            margin-top: 30px;
        }

        .container-fluid {
            padding: 20px;
        }

        .form-label {
            font-weight: bold;
        }

        .btn {
            margin-top: 10px;
        }

        .table thead th {
            background-color: #007bff;
            color: #fff;
        }

        .table tbody td {
            vertical-align: middle;
        }

        .table .btn {
            font-size: 16px;
        }
    </style>
</head>

<body>
    <h1 class="text-center">DEBER DE RODRIGUEZ DAMIÁN</h1>
    <div class="container-fluid">
        <form class="col-4 p-3 m-auto" method="POST">
            <h3 class="text-center text-secondary">Registro de persona</h3>
            <?php
            include "modelo/conexion.php";
            include "controlador/registro_persona.php";
            ?>
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre de la persona</label>
                <input type="text" class="form-control" name="nombre" id="nombre">
            </div>
            <div class="mb-3">
                <label for="apellido" class="form-label">Apellido de la persona</label>
                <input type="text" class="form-control" name="apellido" id="apellido">
            </div>
            <div class="mb-3">
                <label for="dni" class="form-label">DNI de la persona</label>
                <input type="text" class="form-control" name="dni" id="dni">
            </div>
            <div class="mb-3">
                <label for="fecha" class="form-label">Fecha de nacimiento</label>
                <input type="date" class="form-control" name="fecha" id="fecha">
            </div>
            <div class="mb-3">
                <label for="correo" class="form-label">Correo</label>
                <input type="text" class="form-control" name="correo" id="correo">
            </div>

            <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>
        </form>
        <div class="col-8 p-4 m-auto">
            <table class="table">
                <thead class="bg-info">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NOMBRES</th>
                        <th scope="col">APELLIDOS</th>
                        <th scope="col">DNI</th>
                        <th scope="col">FECHA DE NACIMIENTO</th>
                        <th scope="col">CORREO</th>
                        <th scope="col">OPCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "modelo/conexion.php";
                    $sql = $conexion->query("SELECT * FROM crud_php");
                    while ($datos = $sql->fetch_object()) {
                        ?>
                        <tr>
                            <td><?= $datos->id_persona ?></td>
                            <td><?= $datos->nombre ?></td>
                            <td><?= $datos->apellido ?></td>
                            <td><?= $datos->dni ?></td>
                            <td><?= $datos->fecha_nac ?></td>
                            <td><?= $datos->correo ?></td>
                            <td>
                                <a href="modificar_producto.php?id=<?= $datos->id_persona ?>"
                                    class="btn btn-small btn-warning"><i class="fas fa-pen-to-square"></i></a>
                                <a onclick="return confirm('¿Estás seguro de eliminar este registro?')"
                                    href="eliminar_producto.php?id=<?= $datos->id_persona ?>"
                                    class="btn btn-small btn-danger"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>
