<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/Booking_Hotels/models/HotelModel.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/Booking_Hotels/view/HotelView.php';
include_once $_SERVER['DOCUMENT_ROOT'].'\Booking_Hotels\templates\mensajeError.php';
include_once $_SERVER['DOCUMENT_ROOT'].'\Booking_Hotels\libraries\functions.php';
/**
 * Clase HotelController
 */
class HotelController {

    // Obtiene una instancia del modelo y de la vista de tareas
    private $model;
    private $view;

    /**
     * Constructor de la clase HotelController
     */
    public function __construct() {
        $this->model = new HotelModel();
        $this->view= new HotelView();
    }

}