<?php
    include('conn.php');


    $mensajeOK=false;
    $mensajeError='El sistema no se encuentra disponible';
  
    if(isset($_GET['user'], $_GET['pass'])):
     
    if ($_GET['user']!=""):

    if ($_GET['pass']!=""):
        $usua=$_GET['user'];
        $pass=$_GET['pass'];

        $consulta=mysqli_query($conn, "SELECT *FROM usuario WHERE correo='$usua' AND contrasena='$pass' AND Estado='1'");
        if (mysqli_num_rows($consulta)>0):
        
            $mensajeOK=true;
            $datos=mysqli_fetch_array($consulta);

            session_start();
            $_SESSION['idusuario']=$datos[0];
            $_SESSION['user']=$datos[1];
            $_SESSION['status']=$datos[3];
            $_SESSION['tipo']=$datos[4];

        $mensajeError='logueado Correctamente';

        print "<script>
        alert(\"logueado Correctamente.\");
        window.location='../Admin.php';
        </script>";
        include "cerrar_con.php";
    else:
        $mensajeError='Usuario o contraseña incorrecta o usuario no existe';
        print "
        <script>alert(\"Usuario o contraseña incorrecta.\");
        window.location='../login.php?sms=1';
        </script>";
        include "cerrar_con.php";
       endif;
       else:
        $mensajeError='Contraseña incorrecta';
        print "<script>
        alert(\"Contraseña incorrecta.\");
        window.location='../login.php?sms=2';
        </script>";
        include "cerrar_con.php";
        endif;

        else:
        $mensajeError='Usuario no existente';
        print "
        <script>
          alert(\"Usuario no existente.\");
        window.location='../login.php?sms=2';
        </script>";
        include "cerrar_con.php";
        endif;

        else:
        $mensajeError='Todos los campos son requeridos';
        print "
        <script>
        alert(\"Todos los campos son requeridos.\");
        window.location='../login.php?sms=3';
        </script>";
        include "cerrar_con.php";
       endif;
       $salida=array('respuesta'=> $mensajeOK, 'mensaje'=>$mensajeError);
   
       
?>

