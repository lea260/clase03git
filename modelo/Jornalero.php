<?php
require_once 'empleado.php';
class Jornalero extends Empleado
{
    //propiedades o atributos.
    private $diasTrabajados;
    private $jornal;
    public function __construct($nombre, $edad, $diasTrabajados, $jornal)
    {
        parent::__construct($nombre, $edad);
        //puedo hacer porque edad tiene el modificador protected
        //parent::edad= 21;
        $this->diasTrabajados = $diasTrabajados;
        $this->jornal = $jornal;
        # code...
    }
    public function calcularSueldo()
    {
        $sueldo = 0;
        $this->diasTrabajados * $this->jornal;
    }
    public function cobraBolson()
    {

    }

}
