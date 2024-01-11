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
    private $idUsuario;
    /**
     * @var number identificador de Hotel
     */
    private $idHotel;
    /**
     * @var number identificador de Habitacion
     */
    private $idHabitacion;
    /**
     * @var date fecha de entrada
     */
    private $fechaEntrada;
    /**
     * @var date fecha de salida
     */
    private $fechaSalida;
    
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

    public function getIdUsuario(): number {
        return $this->idUsuario;
    }

    public function getIdHotel(): number {
        return $this->idHotel;
    }

    public function getIdHabitacion(): number {
        return $this->idHabitacion;
    }

    public function getFechaEntrada(): date {
        return $this->fechaEntrada;
    }

    public function getFechaSalida(): date {
        return $this->fechaSalida;
    }

    public function setId(number $id): void {
        $this->id = $id;
    }

    public function setIdUsuario(number $idUsuario): void {
        $this->idUsuario = $idUsuario;
    }

    public function setIdHotel(number $idHotel): void {
        $this->idHotel = $idHotel;
    }

    public function setIdHabitacion(number $idHabitacion): void {
        $this->idHabitacion = $idHabitacion;
    }

    public function setFechaEntrada(date $fechaEntrada): void {
        $this->fechaEntrada = $fechaEntrada;
    }

    public function setFechaSalida(date $fechaSalida): void {
        $this->fechaSalida = $fechaSalida;
    }

    
    /**
     * Devuelve un array con todas los valores de la tabla Actuan
     *
     * @return array
     */
    public function getActuaciones(){
        try {
            $stmt= $this->pdo->prepare('SELECT * FROM actuan');
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC); 
        } catch (Exception $exc) {
            mensajeError('Se ha producido un error al obtener la tabla Actuan');
        }
    }
    
    /**
     * Hace una insercción en la tabla Actuan 
     * 
     *@param array $post Datos para la insercción.
     */
    public function insertarActuacion($post){
        try {
            for ($i = 0; $i < count($post['actores']); $i++) {
                $sql = "INSERT INTO actuan (idPelicula, idActor) 
                    VALUES (:idPelicula, :idActor)";
                $stmt = $this->pdo->prepare($sql);
                $stmt->bindParam(':idPelicula', $post['id']);
                $stmt->bindParam(':idActor', $post['actores'][$i]);
                $stmt->execute();
            }
        } catch (Exception $exc) {
            mensajeError('Se ha producido un error al insertar los actores en la pelicula');
        }
         
        
    }
    
    /**
     * Actualiza en la tabla Actuan 
     *
     * @param number $id identificador de la Pelicula
     */
    public function eliminarActuacion($id) {
        try {
            $sql = "DELETE FROM actuan WHERE idPelicula = :id";

            $stmt = $this->pdo->prepare($sql);

            $stmt->bindParam(':id', $id);

            $stmt->execute();

        } catch (Exception) {
            mensajeError('Se ha producido un error al eliminar las peliculas');
        }
    }
}
