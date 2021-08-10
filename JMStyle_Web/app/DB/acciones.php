<?php
    include('conn.php');
    session_start();

    if(isset($_GET['accion'],$_GET['dir'],$_GET['id'],$_GET['u'])){

        if(($_GET['accion']!="")or($_GET['dir']!="")or($_GET['id']!="")or($_GET['u']!="")){

            if($_GET['u']==$_SESSION['idusuario']){
                $idProducto=$_GET['id'];
                require("funciones.php");
                $objeto = new funcionesSQL();
                $query = "DELETE FROM producto WHERE id_producto='$idProducto'";
                $dir = "../ListarProducto.php?sms=1";
                echo($objeto->eliminar($query, $dir));
                
            }

        }else{
            include("cerrar_con.php")
            print("
            <script>
            window.location='cerrar_sesion.php';
            </script>");
        }

    }else{
        include("cerrar_con.php")
        print("
        <script>
        window.location='cerrar_sesion.php';
        </script>");
    }

        function eliminarProducto(){
            require("funciones.php");
            $idProducto = $_GET['id'];
            $objeto = new funcionesSQL();
            $query = "DELETE FROM producto WHERE id_producto='$idProducto'";
            $dir = "ListaProducto.php?sms=1";
            echo($objeto->eliminar($query, $dir));
        }

        // function guardarProducto(){
        //     require("funciones.php");
        //     $idProducto= $_GET['idProducto'];
        //     $Producto=$_POST['producto'];
        //     $Descripcion=$_POST['descripcion'];
        //     $Cantidad=$_POST['cantidad'];
        //     $Precio=$_POST['precio'];
        //     $foto=$_POST['foto'];
        //     $objeto = new funcionesSQL();
        //     $query = "INSERT INTO (producto,descripcion,cantidad,precio,foto,estado) VALUES ('$Prodcuto','$Descripcion',$Cantidad,$Precio,$foto,1)";
        //     $dir = "subirProducto.php?sms=1";
        //     echo($objeto->guardar($query, $dir));
        // }

        // function actualizarSalas(){
        //     require("../../../app/db/funciones.php");
        //     $idSala= $_GET['id'];
        //     $nombreS = $_POST['txtnombre'];
        //     $estadoS = $_POST['txtestado'];
        //     $objeto = new funcionesSQL();
        //     $query = "UPDATE rsalas SET NombreSala = '$nombresS',Estatus = $estadoS WHERE IdSala=$idSala";

        //     $dir = "gsalas.php?sms=2";
        //     echo($objeto->actualizar($query, $dir));
        // }
        
?>