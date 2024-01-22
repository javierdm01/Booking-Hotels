<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/Booking_Hotels/db/DB.php';

/**
 * Clase Usuario
 */
class UsuarioModel {
    /**
     * @var int identificador de Usuario
     */
    private $id;
    /**
     * @var string nombre Usuario
     */
    private $nombre;
    /**
     * @var string contraseña Usuario
     */
    private $contraseña;
    /**
     * @var string fecha registro
     */
    private $fecha_registro;
    /**
     * @var int numero de rol
     */
    private $rol;

    // Atributos de conexión
    private $bd;
    private $pdo;

    /**
     * Constructor de la clase Usuario
     */
    public function __construct() {

        $this->bd = new DB();
        $this->pdo = $this->bd->getPDO();
    }
    
    /**
     * Getters and setters
     */
    public function getId(): int {
        return $this->id;
    }

    public function getNombre(): string {
        return $this->nombre;
    }

    public function getContraseña(): string {
        return $this->contraseña;
    }

    public function getFecha_registro(): string {
        return $this->fecha_registro;
    }

    public function getRol(): int {
        return $this->rol;
    }

    public function setId(int $id): void {
        $this->id = $id;
    }

    public function setNombre(string $nombre): void {
        $this->nombre = $nombre;
    }

    public function setContraseña(string $contraseña): void {
        $this->contraseña = $contraseña;
    }

    public function setFecha_registro(string $fecha_registro): void {
        $this->fecha_registro = $fecha_registro;
    }

    public function setRol(int $rol): void {
        $this->rol = $rol;
    }

    /**
     * Destructor de la clase Usuario
     */
    public function __destruct() {
        $this->bd->closePDO();
    }

    /**
     * Obtener todos los usuarios
     *
     * @return array
     */
    public function getUsuarios() {
        try {
            $stmt = $this->pdo->prepare('SELECT * FROM usuarios');
            $stmt->execute(); 
            return $stmt->fetchAll(PDO::FETCH_CLASS, 'UsuarioModel');
        } catch (Exception $e) {
            mensajeError('Se ha producido un error al obtener usuarios');
        }
    }

    /**
     * Comprobar inicio de Sesión
     *
     * @param string $username nombre de usuario
     * @param string $password contraseña codificada
     * @return UsuarioModel|array|null
     */
    public function comprobarLogin($username, $password) {
        try {
            $sql = "SELECT * FROM usuarios WHERE nombre = :username AND contraseña = :password";

            $stmt = $this->pdo->prepare($sql);

            $stmt->bindParam(':username', $username, PDO::PARAM_STR);
            $stmt->bindParam(':password', $password, PDO::PARAM_STR);
            $stmt->setFetchMode( PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'UsuarioModel');
            $stmt->execute(); 
            return $stmt->fetchAll();
        } catch (Exception) {
            mensajeError('Se ha producido un error al comprobar usuarios');
        }
    }
    public function obtenerUsuarios($id){
        try {
            $sql = "SELECT * FROM usuarios WHERE id=:idUsuario";

            $stmt = $this->pdo->prepare($sql);

            $stmt->bindParam(':idUsuario', $id);
            $stmt->setFetchMode( PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'UsuarioModel');
            $stmt->execute(); 
            return $stmt->fetchAll();
        } catch (Exception) {
            mensajeError('Se ha producido un error al comprobar usuarios');
        }
    }
}
