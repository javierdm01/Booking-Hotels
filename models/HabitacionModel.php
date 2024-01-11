<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/VideoClub/db/DB.php';
/**
 * Clase Habitacion 
 */
class HabitacionModel {
     /**
     * @var number identificador de la habitacion
     */
    private $id;
    /**
     * @var number id hotel, relacion
     */
    private $idHotel;
    /**
     * @var number numero de habitacion
     */
    private $numHabitacion;
    /**
     * @var varchar tipo de habitacion
     */
    private $tipo;
    /**
     * @var float precio de la habitacion
     */
    private $precio;
    /**
     * @var text descripcion de la habitacion
     */
    private $descripcion;
    
    //Conexion Atributtes
    private $bd;
    private $pdo;
    /**
     * Constructor de la clase Habitación
     */
    public function __construct() {
        $this->bd = new DB();
        $this->pdo = $this->bd->getPDO();
    }
    
    /**
     * Destructor de la clase Habitacion
     */
     public function __destruct() {
        $this->bd->closePDO();
    }
    
    /**
     * Getters and setters
     */

    public function getId(): number {
        return $this->id;
    }

    public function getIdHotel(): number {
        return $this->idHotel;
    }

    public function getNumHabitacion(): number {
        return $this->numHabitacion;
    }

    public function getTipo(): varchar {
        return $this->tipo;
    }

    public function getPrecio(): float {
        return $this->precio;
    }

    public function getDescripcion(): text {
        return $this->descripcion;
    }

    public function setId(number $id): void {
        $this->id = $id;
    }

    public function setIdHotel(number $idHotel): void {
        $this->idHotel = $idHotel;
    }

    public function setNumHabitacion(number $numHabitacion): void {
        $this->numHabitacion = $numHabitacion;
    }

    public function setTipo(varchar $tipo): void {
        $this->tipo = $tipo;
    }

    public function setPrecio(float $precio): void {
        $this->precio = $precio;
    }

    public function setDescripcion(text $descripcion): void {
        $this->descripcion = $descripcion;
    }

        
   
}
