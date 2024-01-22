<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/Booking_Hotels/view/ReservaView.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/Booking_Hotels/model/ReservaModel.php';
include_once $_SERVER['DOCUMENT_ROOT'].'\Booking_Hotels\templates\mensajeError.php';
include_once $_SERVER['DOCUMENT_ROOT'].'\Booking_Hotels\libraries\functions.php';
/**
 * Clase ReservaController
 */
class ReservaController {

    // Obtiene una instancia del modelo y de la vista de tareas
    private $model;
    private $view;

    /**
     * Constructor de la clase PeliculaController
     */
    public function __construct() {
        $this->model = new ReservaModel();
        $this->view = new ReservaView();
    }
    public function mostrarReservas(){
        
    }
}