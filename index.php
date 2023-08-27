<<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud en php y mysql</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('https://ejemplo.com/imagen-de-fondo.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: #ff4500; /* Cambia el color del texto aquí */
            font-family: Arial, sans-serif;
        }

        h1 {
            text-align: center;
            margin-top: 40px;
            color: #ff4500; /* Color del texto para h1 */
        }

        h3 {
            text-align: center;
            margin-top: 40px;
            color: #ff4500; /* Color del texto para h3 */
        }

        .container-fluid {
            padding: 30px;
        }

        .form-label {
            font-weight: bold;
            color: #006400; /* Color del texto para las etiquetas del formulario */
        }

        .btn {
            margin-top: 10px;
            background-color: #00007bff;
            color: #fff;
        }

        .table thead th {
            background-color: #00007bff;
            color: #fff;
        }

        .table tbody td {
            vertical-align: middle;
            border: 2px solid #00007bff; /* Contorno de color para las celdas */
        }

        .table .btn {
            font-size: 16px;
        }
    </style>
</head>

<body>
    <h1 class="text-center">App_Final</h1>
    <div class="container-fluid">
        <!-- ... tu formulario de registro, tabla y otros elementos aquí ... -->
    </div>

    <!-- ... tus scripts aquí ... -->

</body>

</html>


<body>
    <h1 class="text-center">INGRESE SU INFORMACIÓN</h1>
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
                    $sql = $conexion->query("SELECT * FROM App_Final");
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
            background-image: url('https://img.freepik.com/fotos-premium/logotipo-inteligencia-artificial-minimalista-3d-ai-simple-fondo-blanco-calidad-ultra-alta_950002-1371.jpg?w=2000');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }
        <style>
        body {
            background-image: url('https://ejemplo.com/imagen-de-fondo.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: #ff4500; /* Cambia el color del texto aquí */
            font-family: Arial, sans-serif;
        }

        h1 {
            text-align: center;
            margin-top: 40px;
            color: #ff4500; /* Color del texto para h1 */
        }

        h3 {
            text-align: center;
            margin-top: 40px;
            color: #ff4500; /* Color del texto para h3 */
        }

        .container-fluid {
            padding: 30px;
        }

        .form-label {
            font-weight: bold;
            color: #006400; /* Color del texto para las etiquetas del formulario */
        }

        .btn {
            margin-top: 10px;
            background-color: #00007bff;
            color: #fff;
        }

        .table thead th {
            background-color: #00007bff;
            color: #fff;
        }

        .table tbody td {
            vertical-align: middle;
            border: 2px solid #00007bff; /* Contorno de color para las celdas */
        }

        .table .btn {
            font-size: 16px;
        }
    </style>
</head>        /* ... tus otros estilos aquí ... */
    </style>
</head>

<body>
    <h1 class="text-center">App Final</h1>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">

            </div>
            <div class="col-md-6">
           
            </div>
        </div>
        <div class="col-12 p-4 m-auto">
        
        </div>
    </div>
    
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud en php y mysql</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
      
    </style>
</head>

<body>
    <h1 class="text-center">DUEÑOS, DAMIAN Y SALOMON</h1>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <form class="p-3" method="POST">
                    <h3 class="text-center text-secondary">Registro de persona</h3>
                    <?php
                    
                    ?>
                
                </form>
            </div>
            <div class="col-md-6">
                <form class="p-3" method="POST">
                    <h3 class="text-center text-secondary">Solicitud de reparación de computadoras</h3>
                    <div class="mb-3">
                        <label for="fecha_servicio" class="form-label">Fecha</label>
                        <input type="date" class="form-control" name="fecha_servicio" id="fecha_servicio">
                    </div>
                    <div class="mb-3">
                        <label for="hora_servicio" class="form-label">Hora</label>
                        <input type="time" class="form-control" name="hora_servicio" id="hora_servicio">
                    </div>
                    <div class="mb-3">
                        <label for="precio_servicio" class="form-label">Precio</label>
                        <input type="number" class="form-control" name="precio_servicio" id="precio_servicio">
                    </div>
                    <button type="submit" class="btn btn-primary" name="btnsolicitar" value="solicitar">Solicitar</button>
                </form>
            </div>
        </div>
        <div class="col-12 p-4 m-auto">
            <table class="table">
                
            </table>
        </div>
    </div>
   
</body>

</html>
