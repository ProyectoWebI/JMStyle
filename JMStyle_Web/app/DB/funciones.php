<?php

    class funcionesSQL
    {

        public $tipoUser;

        public function eliminar($sql, $enlace){
            include "conn.php";
            $query = mysqli_query($conn, $sql)
            or die('error '.mysqli_error($conn));
            if ($query){
                echo(" <script>window.location='$enlace';</script> ")
            }
        }
        
        public function guardar($sql, $enlace){
            include "conn.php";
            $query = mysqli_query($conn, $sql)
            or die('error '.mysqli_error($conn));
            if ($query){
                echo(" <script>window.location='$enlace';</script> ")
            }
        }

        public function actualizar($sql, $enlace){
            include "conn.php";
            $query = mysqli_query($conn, $sql)
            or die('error '.mysqli_error($conn));
            if ($query){
                echo(" <script>window.location='$enlace';</script> ")
            }
        }
    }
?>