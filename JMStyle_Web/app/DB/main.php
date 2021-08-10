<?php

session_start();

class elementosmenu
{

    public function establecertabla(){
        include "conn.php";

        $query = mysqli_query($conn, "SELECT * FROM categoria")
        or die('error: ' .mysqli_error($conn));

        echo "
        <table class='table table-hover'>
        <thead>
        <tr class='text-center'>
        <th scope='col'>Id</th>
        <th scope='col'>Nombre</th>
        <th scope='col'>Descripcion</th>
        <th scope='col'>Acciones</th>
        </tr>
        </thead>
        <tbody class='text-center'>
        ";

        while ($data = mysqli_fetch_assoc($query)){
         echo "
         <tr>
         <th scope='row'>$data[id_categoria]</th>
         <td>$data[nombre]</td>
         <td>$data[descripcion]</td>
         <td class='text-center'>
             <a name='modiPro' id='modiPro' href='acciones.php'> <i class='fas fa-edit border border-success p-2 botoneditar'></i></a>        
         <a class='botoneliminar' href='acciones.php?accion=3&dir=salas&id=$data[id_categoria] onclick='return confirm(\"Desea eliminar la $data[nombre]\");' >
            <i class='fas fa-trash-alt border border-danger p-2 botoneliminar'></i>
            </a>
            </td>
            </tr>
            ";
        }
        echo"
        </tbody>
        </table>";
    }

    public function tablaProducto(){
        include "conn.php";

        $query = mysqli_query($conn, "SELECT *, CONVERT(foto USING utf8) as Foto FROM producto")
        or die('error: ' .mysqli_error($conn));

        echo "
        <table class='table table-hover'>
        <thead>
        <tr class='text-center'>
        <th scope='col'>Codigo</th>
        <th scope='col'>Producto</th>
        <th scope='col'>Descripcion</th>
        <th scope='col'>Cantidad</th>
        <th scope='col'>Precio</th>
        <th scope='col'>Estado</th>
        <th scope='col'>Acciones</th>
        </tr>
        </thead>
        <tbody class='text-center'>
        ";

        while ($data = mysqli_fetch_assoc($query)){
         echo "
         <tr>
         <th scope='row'>$data[id_producto]</th>
         <td>$data[producto]</td>
         <td>$data[descripcion]</td>
         <td>$data[cantidad]</td>
         <td>$data[precio]</td>
         <td>$data[estado]</td>
         <td class='text-center'>
         
         <i class='fas fa-edit border border-success p-2 botoneditar'></i>
         <a class='botoneliminar' href='../../DB/acciones.php?accion=3&dir=salas&id=$data[id_producto] onclick='return confirm(\"Desea eliminar la $data[producto]\");' >
            <i class='fas fa-trash-alt border border-danger p-2 botoneliminar'></i>
            </a>
            </td>
            </tr>
            ";
        }
        echo"
        </tbody>
        </table>";
    }

    public function tablaPedido(){
        include "conn.php";

        $query = mysqli_query($conn, "SELECT p.fecha fecha,CONCAT(c.nombre,' ',c.apellido) AS cliente,cu.ciudad ciudad,po.producto producto,
        dp.cantidad cantidad,dp.total total FROM detalle_pedido dp INNER JOIN pedido p ON dp.id_pedido=p.id_pedido INNER JOIN producto po ON dp.id_producto=po.id_producto INNER JOIN usuario u on p.id_usuario=u.id_usuario INNER JOIN cliente c on u.id_cliente=c.id_cliente INNER JOIN ciudad cu ON p.id_ciudad=cu.idCiudad")
        or die('error: ' .mysqli_error($conn));

        echo "
        <table class='table table-hover'>
        <thead>
        <tr class='text-center'>
        <th scope='col'>Fecha Hora</th>
        <th scope='col'>Cliente</th>
        <th scope='col'>Ciudad</th>
        <th scope='col'>Producto</th>
        <th scope='col'>Cantidad</th>
        <th scope='col'>Total</th>
        </tr>
        </thead>
        <tbody class='text-center'>
        ";

        while ($data = mysqli_fetch_assoc($query)){
         echo "
         <tr>
         <th scope='row'>$data[fecha]</th>
         <td>$data[cliente]</td>
         <td>$data[ciudad]</td>
         <td>$data[producto]</td>
         <td>$data[cantidad]</td>
         <td>$data[total]</td>
        </tr>";
        }
        echo"
        </tbody>
        </table>";
    }

    public function mostrarHeader($parametro){

    }
}
?>