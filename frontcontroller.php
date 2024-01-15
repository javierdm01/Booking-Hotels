<?php
include_once $_SERVER['DOCUMENT_ROOT'].'\Booking_Hotels\models\UsuarioModel.php';
include_once $_SERVER['DOCUMENT_ROOT'].'\Booking_Hotels\controllers\UsuarioController.php';
include_once $_SERVER['DOCUMENT_ROOT'].'\Booking_Hotels\view\UsuarioView.php';

define('ACCION_DEFECTO', 'mostrarFormulario');
define('CONTROLADOR_DEFECTO', 'Usuario');



function lanzarAccion($controllerObj){
    
    if(isset($_GET["action"]) && method_exists($controllerObj, $_GET["action"])){
        cargarAccion($controllerObj, $_GET["action"]);
    } 
    else{
        cargarAccion($controllerObj, ACCION_DEFECTO);
    }
}

function cargarAccion($controllerObj, $action){
    $accion=$action;
    $controllerObj->$accion();
}

function cargarControlador($nombreControlador) {
    $controlador = $nombreControlador . 'Controller';
    if (class_exists($controlador)) {
        return new $controlador();
    } else {
        die ("controlador no válido");
    }
}

if(isset($_GET["controller"])){
    $controllerObj=cargarControlador($_GET["controller"]);
    lanzarAccion($controllerObj);
}else{
    $controllerObj=cargarControlador(CONTROLADOR_DEFECTO);
    lanzarAccion($controllerObj);
}
