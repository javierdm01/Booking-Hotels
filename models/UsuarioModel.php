<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/Booking_Hotels/db/DB.php';

/**
 * Clase Usuario
 */
class UsuarioModel {

    /**
     * @var number identificador de Usuario
     */
    private $id;
    /**
     * @var varchar nombre Usuario
     */
    private $nombre;
    /**
     * @var varchar contraseña Usuario
     */
    private $apellido;
    /**
     * @var date fecha registro
     */
    private $fotografia;
    /**
     * @var number numero de rol
     */
    private $rol;
    
    
    //Conexion Atributtes
    private $bd;
    private $pdo;

    /**
     * Constructor de la clase Actor
     */
    public function __construct() {
        $this->bd = new DB();
        $this->pdo = $this->bd->getPDO();
    }
    /**
     * Destructor de la clase Actor
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

    public function getApellido() {
        return $this->apellido;
    }

    public function getFotografia() {
        return $this->fotografia;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function setNombre($nombre): void {
        $this->nombre = $nombre;
    }

    public function setApellido($apellido): void {
        $this->apellido = $apellido;
    }

    public function setFotografia($fotografia): void {
        $this->fotografia = $fotografia;
    }
    /**
     * Obtener Actores todos los actores
     *
     * 
     * @return array
     */
     /**
     * Obtener todos los usuarios
     *
     * 
     * @return array
     */
    public function getUsuarios() {
        try {
            $stmt = $this->pdo->prepare('SELECT * FROM usuarios');
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception) {
            mensajeError('Se ha producido un error al obtener usuarios');
        }
    }
    /**
     * Comprobar inicio de Sesion
     *
     * @param String $username nombre de usuario
     * @param String $password contraseña codificiada
     * 
     * @return array usuario
     */
    public function comprobarLogin($username, $password) {
        try {
            $sql = "SELECT * FROM usuarios WHERE nombre = :username AND contraseña = :password";

            $stmt = $this->pdo->prepare($sql);

            $stmt->bindParam(':username', $username, PDO::PARAM_STR);
            $stmt->bindParam(':password', $password, PDO::PARAM_STR);

            $stmt->execute();

            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (Exception) {
            mensajeError('Se ha producido un error al comprobar usuarios');
        }
    }
    /**
     * Crear tabla log si no existe
     *
     */
    public function comprobarLogs() {
        try {
            $sql = "CREATE TABLE IF NOT EXISTS logs (mensaje varchar(255))";

            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
        } catch (Exception) {
            mensajeError('Se ha producido un error al crearLogs');
        }
    }
    /**
     * Enviar logs de acceso
     *
     * @param String $mensaje mensaje para guardar en log
     * 
     */
}
