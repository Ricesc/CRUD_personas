<?php
 include("libs/conex.php");
 include("libs/personas.lib.php");
$datos=traerPersonas($conn);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>
<body>
    <h1 align="center"">Personas</h1>
    <div class="container table-responsive shadow-lg p-3 mb-5 bg-body rounded">
        <a href="nuevo.php" class="btn btn-primary">Nuevo</a>
        <table class="table table-hover table-light align-middle text-center">
            <thead class="table-dark">
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Cin</th>
                    <th>Direccion</th>
                    <th>Fecha Nac.</th>
                    <th>Ciudad ID</th>
                    <th>Editar</th>
                    <th>Borrar</th>
                </tr>
            </thead>
            <tbody>
                    <?php
                    foreach($datos as $d) {
                    ?>
                 <tr>    
                    <td><?php echo $d['id'];  ?> </td>
                    <td><?php echo $d['nombre'];  ?></td>
                    <td><?php echo $d['apellido'];  ?></td>
                    <td><?php echo $d['cin'];  ?></td>
                    <td><?php echo $d['direccion'];  ?></td>
                    <td><?php echo $d['fecha_nac'];  ?></td>
                    <td><?php echo $d['ciudad_id'];  ?></td>
                    <td><a href="nuevo.php?mod=edtpersona&&id=<?php  echo $d['id'];  ?>"class="btn btn-warning">Editar</a> </td>
                    <td><a href="borrar.php?mod=delpersona&&id=<?php  echo $d['id'];  ?>"class="btn btn-danger">Borrar</a> </td>
                </tr>
                   <?php 
                   }
                   ?> 
            </tbody>    
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>