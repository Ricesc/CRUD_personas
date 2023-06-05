<?php
  include("libs/conex.php");
  include("libs/personas.lib.php");
    if ($_GET and $_GET['id'])
        {

            $rs=borrarPersona($_GET['id'],$conn);

        }
  header('Location:index.php');   
?>