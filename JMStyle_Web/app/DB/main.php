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
         <i class='fas fa-edit border border-success p-2 botoneditar'></i>
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

    public function mostrarHeader($parametro){

    }
}
?>