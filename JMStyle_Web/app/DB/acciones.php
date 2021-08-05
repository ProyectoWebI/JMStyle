<?php

        function eliminarSalas(){
            require("../app/db/funciones.php");
            $idSala = $_GET['id'];
            $objeto = new funcionesSQL();
            $query = "DELETE FROM rsalas WHERE IdSala='$idSala'";
            $dir = "rsalas.php?sms=1";
            echo($objeto->eliminar($query, $dir));
        }

        function guardarSalas(){
            require("../../../app/db/funciones.php");
            $idSala= $_GET['id'];
            $nombreS = $_POST['txtnombre'];
            $estadoS = $_POST['txtestado'];
            $objeto = new funcionesSQL();
            $query = "INSERT INTO rsalas(NombreSala, Estatus) VALUES ('$nombresS',$estadoS)";
            $dir = "gsalas.php?sms=1";
            echo($objeto->guardar($query, $dir));
        }

        function actualizarSalas(){
            require("../../../app/db/funciones.php");
            $idSala= $_GET['id'];
            $nombreS = $_POST['txtnombre'];
            $estadoS = $_POST['txtestado'];
            $objeto = new funcionesSQL();
            $query = "UPDATE rsalas SET NombreSala = '$nombresS',Estatus = $estadoS WHERE IdSala=$idSala";

            $dir = "gsalas.php?sms=2";
            echo($objeto->actualizar($query, $dir));
        }