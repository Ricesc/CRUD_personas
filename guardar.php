<?php
include("libs/conex.php");
include("libs/personas.lib.php");

if ($_POST)
{
    $err=validarPersonas($_POST);    
    if (sizeof($err)==0) 
    {    
        if ($_POST['id']==-1)
        {
            agregarPersona($_POST,$conn);  
        } 
        else 
        {
            editarPersona($_POST,$conn);
        }
        header('Location:index.php');
    } 
    else 
    {
        header('Location:index.php?mod=persona&accion=edit&errores='.$errores);    
    }
}

?>
<p>soy guardar</p>