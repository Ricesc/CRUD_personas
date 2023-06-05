<?php
function traerPersonas($con)
{
    $sql="SELECT * FROM personas";
    $filas=$con->query($sql);
    return $filas;
}
function traerPersona($id,$con)
{
    $sql="SELECT * FROM personas where id=".$id;
    $filas=$con->query($sql);
    return $filas;
}
function agregarPersona($datos,$con)
{
   $sql="INSERT INTO personas (nombre,apellido,cin,direccion,fecha_nac,ciudad_id) VALUES ('".$datos['nombre']."','".$datos['apellido']."','".$datos['cin']."','".$datos['direccion']."','".$datos['fecha_nac']."','".$datos['ciudad_id']."');";
   $con->query($sql);
}
function editarPersona($datos,$con)
{
    // update personas set nombre = CAMPO where id= ID
    $sql="update personas set nombre ='".$datos['nombre']."', apellido ='".$datos['apellido']."', cin ='".$datos['cin']."', direccion ='".$datos['direccion']."', fecha_nac ='".$datos['fecha_nac']."', ciudad_id ='".$datos['ciudad_id']."' where id=".$datos['id'];
   $con->query($sql);
}
function borrarPersona($id,$con)
{
   // delete from personas where id == ID
    $sql="delete from Personas where id=".$id;
    $filas=$con->query($sql);
    return $filas;
}

function validarPersonas($dato)
{
    $errores=[];
    $patron= "/^[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]*$/u";
    if (empty($dato['id'])) 
    {
    array_push($errores, "El campo id debe estar definido");
    }
    
    if (!preg_match($patron,$dato['nombre'])) 
    {
    array_push($errores, "El campo nombre debe estar definido");
    }

    if (!preg_match($patron,$dato['apellido'])) 
    {
    array_push($errores, "El campo apellido debe estar definido");
    }
    
    if (is_nan($dato['cin'])) 
    {
    array_push($errores, "El campo Nro de Cedula debe ser un numero");
    }

    if (!preg_match($patron,$dato['direccion'])) 
    {
    array_push($errores, "El campo direccion debe estar definido");
    }

    if (!preg_match('/^\d{4}-\d{2}-\d{2}$/', $dato['fecha_nac']))
    {
    array_push($errores,"La fecha ingresada no tiene el formato correcto (YYYY-MM-DD)");
    }

    if (is_nan($dato['ciudad_id'])) 
    {
    array_push($errores, "El campo Ciudad debe ser un numero");
    }

    return  $errores;
}

?>