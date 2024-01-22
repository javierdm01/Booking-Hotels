<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/Booking_Hotels/db/DB.php';
/**
 * Clase Habitacion 
 */
class HabitacionModel {

    private $id;

    private $id_hotel;

    private $num_habitacion;

    private $tipo;

    private $precio;

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
    public function getId() {
        return $this->id;
    }

    public function getId_hotel() {
        return $this->id_hotel;
    }

    public function getNum_habitacion() {
        return $this->num_habitacion;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function getPrecio() {
        return $this->precio;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setId_hotel($id_hotel) {
        $this->id_hotel = $id_hotel;
    }

    public function setNum_habitacion($num_habitacion) {
        $this->num_habitacion = $num_habitacion;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    public function setPrecio($precio) {
        $this->precio = $precio;
    }

    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    public function getHabitaciones($hotel) {
        $idHotel=$hotel->getId();
        try {
            $stmt = $this->pdo->prepare('SELECT * FROM habitaciones where id_hotel =:hotelId');
            $stmt->bindParam(':hotelId', $idHotel);
            $stmt->setFetchMode( PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'HabitacionModel');
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (Exception) {
            mensajeError('Se ha producido un error al obtener las habitaciones.');
        }
    }
    public function obtenerHabitaciones($reserva) {
        $idReserva=$reserva->getId_habitacion();
        try {
            $stmt = $this->pdo->prepare('SELECT * FROM habitaciones where id=:habitacion_id');
            $stmt->bindParam(':habitacion_id', $idReserva);
            $stmt->setFetchMode( PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'HabitacionModel');
            $stmt->execute(); 
            return $stmt->fetchAll();
        } catch (Exception) {
            mensajeError('Se ha producido un error al obtener los habitaciones.');
        }
    }
}
