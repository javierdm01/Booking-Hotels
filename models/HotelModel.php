<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/VideoClub/templates/mensajeError.php';

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
        include_once $_SERVER['DOCUMENT_ROOT'] . '/VideoClub/db/DB.php';

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
    public function getId(): number {
        return $this->id;
    }

    public function getNombre(): varchar {
        return $this->nombre;
    }

    public function getDireccion(): varchar {
        return $this->direccion;
    }

    public function getCiudad(): varchar {
        return $this->ciudad;
    }

    public function getPais(): varchar {
        return $this->pais;
    }

    public function getNum_habitaciones(): number {
        return $this->num_habitaciones;
    }

    public function getDescripcion(): text {
        return $this->descripcion;
    }

    public function getFoto(): img {
        return $this->foto;
    }

    public function setId(number $id): void {
        $this->id = $id;
    }

    public function setNombre(varchar $nombre): void {
        $this->nombre = $nombre;
    }

    public function setDireccion(varchar $direccion): void {
        $this->direccion = $direccion;
    }

    public function setCiudad(varchar $ciudad): void {
        $this->ciudad = $ciudad;
    }

    public function setPais(varchar $pais): void {
        $this->pais = $pais;
    }

    public function setNum_habitaciones(number $num_habitaciones): void {
        $this->num_habitaciones = $num_habitaciones;
    }

    public function setDescripcion(text $descripcion): void {
        $this->descripcion = $descripcion;
    }

    public function setFoto(img $foto): void {
        $this->foto = $foto;
    }

        
    /**
     * Obtener todas las peliculas
     *
     * 
     * @return array
     */
    public function getPeliculas() {
        try {
            $stmt = $this->pdo->prepare('SELECT * FROM peliculas');
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception) {
            mensajeError('Se ha producido un error al obtener películas.');
        }
    }
    /**
     * Modificar Peliculas
     *
     * @param array $post Datos para modificar
     */
    public function modificarPelicula($post) {
        try {
            $sql = "UPDATE peliculas SET 
                titulo = :titulo, 
                genero = :genero, 
                pais = :pais, 
                anyo = :anyo, 
                cartel = :cartel 
                WHERE id = :id";
            $stmt = $this->pdo->prepare($sql);

            $stmt->bindParam(':id', $post['id']);
            $stmt->bindParam(':titulo', $post['titulo']);
            $stmt->bindParam(':genero', $post['genero']);
            $stmt->bindParam(':pais', $post['pais']);
            $stmt->bindParam(':anyo', $post['anyo']);
            $stmt->bindParam(':cartel', $post['cartel']);

            $stmt->execute();
            mensajeCheck('Se ha modificado correctamente la pelicula');
        } catch (Exception) {
            mensajeError('Se ha producido un error al modificar la película.');
        }
    }
    /**
     * Insertar Peliculas
     *
     * @param array $post Datos para insertar Peliculas
     */
    public function insertarPelicula($post) {
        try {
            $sql = "INSERT INTO peliculas (id,titulo, genero, pais, anyo, cartel) 
                VALUES (:id, :titulo, :genero, :pais, :anyo, :cartel)";

            $stmt = $this->pdo->prepare($sql);

            $stmt->bindParam(':id', $post['id']);
            $stmt->bindParam(':titulo', $post['titulo']);
            $stmt->bindParam(':genero', $post['genero']);
            $stmt->bindParam(':pais', $post['pais']);
            $stmt->bindParam(':anyo', $post['anyo']);
            $stmt->bindParam(':cartel', $post['cartel']);

            $stmt->execute();
            mensajeCheck('Se ha insertado correctamente la pelicula');
        } catch (Exception) {
            mensajeError('Se ha producido un error al insertar la película.');
        }


        
    }
    /**
     * Eliminar Peliculas
     *
     * @param array $id identificador de la pelicula a eliminar
     */
    public function eliminarPelicula($id) {

        try {
            $sql2 = "DELETE FROM peliculas WHERE id = :id";

            $stmt2 = $this->pdo->prepare($sql2);

            $stmt2->bindParam(':id', $id);

            $stmt2->execute();
            mensajeCheck('Se ha eliminado correctamente');
        } catch (Exception) {
            mensajeError('Se ha producido un error al eliminar las peliculas');
        }
    }
}
