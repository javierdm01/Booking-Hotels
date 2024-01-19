<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/Booking_Hotels/db/DB.php';
/**
 * Clase Hotel
 */
class HotelModel {
    /**
     * @var number identificador del hotel
     */
    private $id;
    /**
     * @var varchar nombre del hotel
     */
    private $nombre;
    /**
     * @var varchar direccion del hotel
     */
    private $direccion;
    /**
     * @var varchar nombre de la ciudad
     */
    private $ciudad;
    /**
     * @var varchar nombre del pais
     */
    private $pais;
    /**
     * @var number numero de habitaciones
     */
    private $num_habitaciones;
    /**
     * @var text descripcion
     */
    private $descripcion;
    /**
     * @var img foto del hotel      
     */
    private $foto;
    
    //Conexion Atributtes
    private $bd;
    private $pdo;

    /**
     * Constructor de la clase Hotel
     */
    public function __construct() {

        $this->bd = new DB();
        $this->pdo = $this->bd->getPDO();
    }
    /**
     * Destructor de la clase Hotel
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

    public function getNombre() {
        return $this->nombre;
    }

    public function getDireccion() {
        return $this->direccion;
    }

    public function getCiudad() {
        return $this->ciudad;
    }

    public function getPais() {
        return $this->pais;
    }

    public function getNum_habitaciones() {
        return $this->num_habitaciones;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function getFoto() {
        return $this->foto;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    public function setCiudad($ciudad) {
        $this->ciudad = $ciudad;
    }

    public function setPais($pais) {
        $this->pais = $pais;
    }

    public function setNum_habitaciones($num_habitaciones) {
        $this->num_habitaciones = $num_habitaciones;
    }

    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    public function setFoto($foto) {
        $this->foto = $foto;
    }

        
    /**
     * Obtener todas las peliculas
     *
     * 
     * @return array
     */
    public function getHoteles() {
        try {
            $stmt = $this->pdo->prepare('SELECT * FROM hoteles');
            $stmt->setFetchMode( PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'HotelModel');
            $stmt->execute(); 
            return $stmt->fetchAll();
        } catch (Exception) {
            mensajeError('Se ha producido un error al obtener las hoteles.');
        }
    }
}
