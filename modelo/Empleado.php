<?php
abstract class Empleado
{
    //propiedades o atributos.
    private $nombre;
    protected $edad;
    public static $cantidadDiasLaborales;

    //constructor
    //Java Empleado(String nombre)
    public function __construct($nombre, $edad)
    {
        $this->nombre = $nombre;
        if ($edad >= 16) {
            $this->edad = $edad;
        } else {
            # code...
            $this->edad = 0;
        }
        # code...
    }
    abstract public function calcularSueldo();
    abstract public function cobraBolson();

    //funciones que me sirven
    /**
     * Get the value of nombre
     */
    //getters y setters
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *dgzdgashjdgsjh
     * @return  self
     */
    public function setNombre($nombre)
    { /*comentario*/

        $this->nombre = $nombre;
        //comentario de una linea

    }
}
