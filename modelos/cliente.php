<?php
require_once 'modelos/datosPersona.php';

class Cliente extends DatosPersona{
    public $Nombre;
    public $Apellido;
    public $Dni;
}