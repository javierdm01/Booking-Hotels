<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/VideoClub/db/DB.php';

/**
 * Clase Reserva
 */
class ReservaModel{
    
    /**
     * @var number identificador de Reserva
     */
    private $id;
    
    /**
     * @var number identificador de Usuario
     */
    private $id_usuario;
    /**
     * @var number identificador de Hotel
     */
    private $id_hotel;
    /**
     * @var number identificador de Habitacion
     */
    private $id_habitacion;
    /**
     * @var date fecha de entrada
     */
    private $fecha_entrada;
    /**
     * @var date fecha de salida
     */
    private $fecha_salida;
    
    //Conexion Atributtes
    private $db;
    private $pdo; 


    /**
     * Constructor de la clase Reserva
     */
    public function __construct() {
        $this->db=new DB();
        $this->pdo= $this->db->getPDO();
    }
    /**
     * Destructor de la clase Reserva
     */
    public function __destruct() {
        $this->pdo = null;
    }
    /**
     * Getters and setters
     */
    public function getId(): number {
        return $this->id;
    }

    public function getId_usuario(): number {
        return $this->id_usuario;
    }

    public function getId_hotel(): number {
        return $this->id_hotel;
    }

    public function getId_habitacion(): number {
        return $this->id_habitacion;
    }

    public function getFecha_entrada(): date {
        return $this->fecha_entrada;
    }

    public function getFecha_salida(): date {
        return $this->fecha_salida;
    }

    public function setId(number $id): void {
        $this->id = $id;
    }

    public function setId_usuario(number $id_usuario): void {
        $this->id_usuario = $id_usuario;
    }

    public function setId_hotel(number $id_hotel): void {
        $this->id_hotel = $id_hotel;
    }

    public function setId_habitacion(number $id_habitacion): void {
        $this->id_habitacion = $id_habitacion;
    }

    public function setFecha_entrada(date $fecha_entrada): void {
        $this->fecha_entrada = $fecha_entrada;
    }

    public function setFecha_salida(date $fecha_salida): void {
        $this->fecha_salida = $fecha_salida;
    }

    
    /**
     * Devuelve un array con todas los valores de la tabla Reservas
     *
     * @return array
     */
    public function getReservas(){
        try {
            $stmt= $this->pdo->prepare('SELECT * FROM reservas');
            $stmt->setFetchMode( PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'ReservaModel');
            $stmt->execute(); 
            return $stmt->fetchAll();
        } catch (Exception) {
            mensajeError('Se ha producido un error al obtener las reservas.');
        }
    }
    
}
