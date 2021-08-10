<?php

    class ElementosLogin
    {
        public $mensaje;

        public function mostrarSMS($parametro){

    

            if ($parametro==1){
                $mensaje="
                <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                <strong>Importante</strong> Usuario o Contraseña incorrecta.
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                </button>
                </div> ";

            }

            elseif ($parametro==2){
                $mensaje="
                <div class='alert alert-success alert-dismissible fade show' role='alert'>
                <strong>Importante</strong> Faltan parámetros.
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                </button>
                </div> ";

            }

            elseif ($parametro==3){
                $mensaje="
                <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                <strong>Importante</strong> No ha iniciado sesión.
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                </button>
                </div> ";

            }

            elseif (($parametro!=1)&&($parametro!=2)&&($parametro!=3))
            {
                $mensaje="
                <div class='alert alert-secondary alert-dismissible fade show' role='alert'>
                <strong>Importante</strong> Algo anda mal, revise nuevamente.
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                </button>
                </div> ";

            }

            return $mensaje;
        }
    }  
?>    

