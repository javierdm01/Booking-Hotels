<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/Booking_Hotels/view/HabitacionView.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/Booking_Hotels/models/HabitacionModel.php';
include_once $_SERVER['DOCUMENT_ROOT'].'\Booking_Hotels\templates\mensajeError.php';
include_once $_SERVER['DOCUMENT_ROOT'].'\Booking_Hotels\libraries\functions.php';
/**
 * Clase HabitacionController
 */
class HabitacionController {

    // Obtiene una instancia del modelo y de la vista de tareas
    private $model;
    private $view;

    /**
     * Constructor de la clase HabitacionController
     */
    public function __construct() {
        $this->model = new HabitacionModel();
        $this->view = new HabitacionView();
    }
    
}