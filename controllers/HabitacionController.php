<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/VideoClub/view/ActorView.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/VideoClub/models/Actor.php';
/**
 * Clase ActorController
 */
class ActorController {

    // Obtiene una instancia del modelo y de la vista de tareas
    private $model;
    private $view;

    /**
     * Constructor de la clase ActorController
     */
    public function __construct() {
        $this->model = new Actor();
        $this->view = new ActorView();
    }
    
}