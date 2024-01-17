<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/Booking_Hotels/view/HabitacionView.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/Booking_Hotels/models/HabitacionModel.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/Booking_Hotels/view/HotelView.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/Booking_Hotels/models/HotelModel.php';
include_once $_SERVER['DOCUMENT_ROOT'].'\Booking_Hotels\templates\mensajeError.php';
include_once $_SERVER['DOCUMENT_ROOT'].'\Booking_Hotels\libraries\functions.php';
/**
 * Clase HabitacionHotelController
 * Este controlador es un intermediario entre Habitacion y Hotel
 */
class HabitacionHotelController {

    // Obtiene una instancia del modelo y de la vista de tareas
    private $modelHabitacion;
    private $viewHabitacion;
    private $modelHotel;
    private $viewHotel;

    /**
     * Constructor de la clase Habitacion-Hotel Controller
     */
    public function __construct() {
        $this->modelHabitacion= new HabitacionModel();
        $this->modelHotel=new HotelModel();
        $this->viewHabitacion=new HabitacionView();
        $this->viewHotel=new HotelView();
    }
    /**
     * Esta funcion devuelve una tabla de hoteles con sus respectivas habitaciones
     */
    public function mostrarTabla(){
        $hoteles=$this->modelHotel->getHoteles();
        for ($i = 0; $i < count($hoteles); $i++) {
            $habitaciones=$this->modelHabitacion->getHabitaciones($hoteles[$i]);
            $this->viewHotel->mostratHoteles($hoteles[$i]);
            $valorMin=$habitaciones[0]['precio'];
            for ($j = 0; $j < count($habitaciones); $j++) {
                $this->viewHabitacion->mostrarHabitaciones($habitaciones[$j]);
                if($habitaciones[$j]['precio']<$valorMin){
                    $valorMin=$habitaciones[$j]['precio'];
                }
            }
            $this->viewHabitacion->mostrarPrecioHabitaciones($valorMin);
        }
       
    }
}