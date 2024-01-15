<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/Booking_Hotels/view/UsuarioView.php';
include_once $_SERVER['DOCUMENT_ROOT'].'\Booking_Hotels\models\UsuarioModel.php';
include_once $_SERVER['DOCUMENT_ROOT'].'\Booking_Hotels\templates\mensajeError.php';
include_once $_SERVER['DOCUMENT_ROOT'].'\Booking_Hotels\libraries\functions.php';
/**
 * Clase UsuarioController
 */
class UsuarioController {

    // Obtiene una instancia del modelo y de la vista de tareas
    private $model;
    private $view;
    /**
     * Constructor de la clase UsuarioController
     */
    public function __construct() {
        $this->model = new UsuarioModel();
        $this->view = new UsuarioView();
    }

    /**
     * Controlador para comprobar si es correcta el formulario de inicio
     * 
     * @param string $username nombre de usuario
     * @param string $password contraseña de usuario
     */
    public function iniciarSesion(){
        $username=$_POST['usr'];
        $password=$_POST['pass'];
        $usuario= $this->model->comprobarLogin($username, hash('sha256', $password));
        $fechaActual=new DateTime();
        $fechaActualFormato = $fechaActual->format('Y-m-d H:i:s');
        if($usuario){
            $_SESSION['obj']=base64_encode(serialize($usuario));
            setcookie('ultCone', $fechaActualFormato, time() + 300, '/');            
            header("Location: ./pages/mostrarHoteles.php?controller=Usuario&action=comprobarCookie");
        }
        else{
            echo mensajeError('El usuario o la contraseña no son válidas.');
            $this->mostrarFormulario();
        }
    }
    /**
     * Controlador para mostrar el Login
     * 
     */
    public function mostrarFormulario() {
        if (isset($_GET['crr'])) {
            cerrarSesion($_SESSION);
        }
        comprobarInicio();
        $this->view->mostrarLogin();
    }
    
    
}