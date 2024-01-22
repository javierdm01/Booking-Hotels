<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/Booking_Hotels/view/HabitacionView.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/Booking_Hotels/models/HabitacionModel.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/Booking_Hotels/view/HotelView.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/Booking_Hotels/models/HotelModel.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/Booking_Hotels/models/ReservaModel.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/Booking_Hotels/view/ReservaView.php';
include_once $_SERVER['DOCUMENT_ROOT'].'\Booking_Hotels\templates\mensajeError.php';
include_once $_SERVER['DOCUMENT_ROOT'].'\Booking_Hotels\libraries\functions.php';
/**
 * Clase ReservaController
 */
class ReservaHotelHabitacionUsuarioController {

    // Obtiene una instancia del modelo y de la vista de tareas
    private $modelReserva;
    private $viewReserva;
    private $modelHabitacion;
    private $modelHotel;
    private $modelUsuario;

    /**
     * Constructor de la clase PeliculaController
     */
    public function __construct() {
        $this->modelReserva = new ReservaModel();
        $this->viewReserva = new ReservaView();
        $this->modelHotel = new HotelModel();
        $this->modelHabitacion = new HabitacionModel();
        $this->modelUsuario= new UsuarioModel();

        
    }
    public function mostrarReservas(){
        $hoteles=$this->modelHotel->getHoteles();
        
        for ($h = 0; $h < count($hoteles); $h++) {
            $reservas=$this->modelReserva->getReservas($hoteles[$h]);
            $this->viewReserva->mostrarHotelesReservados($hoteles[$h]);
            if(count($reservas)>0){
                $this->viewReserva->mostrarCabeceraReservas($hoteles[$h]->getId());
                for ($j = 0; $j < count($reservas); $j++) {
                    $habitaciones=$this->modelHabitacion->obtenerHabitaciones($reservas[$j]);
                    for ($i = 0; $i < count($habitaciones); $i++) {
                        $usuarios=$this->modelUsuario->obtenerUsuarios($reserva[$j]);
                        $this->viewReserva->mostrarReservas($reservas[$j],$habitaciones[$i],$usuarios);
                    }
                    $this->viewReserva->terminarHotelesReservados();
                }
            }
        }
       
        
    }
}
