<?php
 include("libs/conex.php");
 include("libs/personas.lib.php");
$titulo="Insertar Persona";
if ($_GET and $_GET['id'])
    {
       // echo $_GET['id'];
        $titulo="Editar Persona";
        $rs=traerPersona($_GET['id'],$conn);
        //echo "<pre>";
        $dato=$rs->fetch_assoc();
       // echo "</pre>";
    } else 
    {
        $dato['id']=-1;
        $dato['nombre']="";
        $dato['apellido']="";
        $dato['cin']="";
        $dato['direccion']="";
        $dato['fecha_nac']="";
        $dato['ciudad_id']="";
    }

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personas - <?php echo $titulo; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="row vh-100 justify-content-center align-items-center">
            <div class="col-auto bg-light p-5 shadow-lg bg-body rounded">
                <h3 class="mb-4 text-primary"><?php echo $titulo; ?></h3>
                <form action="guardar.php" method="post">
                    <input type="hidden"  id="id" name="id" value="<?php echo $dato['id']; ?>" />
                    
                        <div class="mb-3">
                            <label class="form-label fw-bold">Nombre:</label>
                            <input type="text" id="nombre" class="form-control" name="nombre" required value="<?php echo $dato['nombre']; ?>" /> 
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Apellido:</label>
                            <input type="text" id="apellido" class="form-control" name="apellido" required value="<?php echo $dato['apellido']; ?>" /> 
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Numero de Cedula:</label>
                            <input type="text" id="cin" class="form-control" name="cin" required value="<?php echo $dato['cin']; ?>" /> 
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Direccion:</label>
                            <input type="text" id="direccion" class="form-control" name="direccion" required value="<?php echo $dato['direccion']; ?>" /> 
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Fecha de Nacimiento:</label>
                            <input type="date" id="fecha_nac" class="form-control" name="fecha_nac" required value="<?php echo $dato['fecha_nac']; ?>" /> 
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Ciudad:</label>
                            <input type="number" id="ciudad_id" class="form-control" name="ciudad_id" required value="<?php echo $dato['ciudad_id']; ?>" /> 
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-warning">Enviar</button>
                            <a href="index.php" class="btn btn-primary">Volver</a> 
                        </div>
                    
                </form>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>