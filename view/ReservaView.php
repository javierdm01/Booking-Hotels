<?php

class ReservaView{
    function mostrarHotelesReservados($hotel){
        echo '<div class="list-group">
                <button type="button" class="list-group-item list-group-item-action"><a class="nav-link text-dark" data-bs-toggle="collapse" href="#'.$hotel->getId().'" role="button" aria-expanded="false" aria-controls="'.$hotel->getId().'"> <strong>'.$hotel->getNombre().'</strong> </a>  </button>
                ';
    }
    function mostrarCabeceraReservas($id){
        echo '<div class="collapse" id="'.$id.'">
                    <table border="1" class="w-100 text-center">
                        <thead class="border border-dark border-bottom">
                            <tr>
                                <th>Cod Reserva</th>
                                <th>Cod Habitación</th>
                                <th>Tipo Habitación</th>
                                <th>Descripcion Habitación</th>
                                <th>Fecha de entrada</th>
                                <th>Fecha de salida</th>
                                <th>Precio</th>
                            </tr>
                        </thead>
                        <tbody>';
    }
    function mostrarReservas($reserva,$habitacion,$usuarios){
        echo '
            <tr>
                <td>'.$reserva->getId().'</td>
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    '.$usuarios->getNombre().'
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                        <button class="dropdown-item" type="button">Action</button>
                        <button class="dropdown-item" type="button">Another action</button>
                        <button class="dropdown-item" type="button">Something else here</button>
                    </div>
                </div>
                <td>'.$reserva->getId().'</td>
                <td>'.$reserva->getId_habitacion().'</td>
                <td>'.$habitacion->getTipo().'</td>
                <td>'.$habitacion->getDescripcion().'</td>
                <td>'.$reserva->getFecha_entrada().'</td>
                <td>'.$reserva->getFecha_salida().'</td>
                <td>'.$habitacion->getPrecio().' €</td>
            </tr>
        ';
    }
    function terminarHotelesReservados(){
        
        echo '</tbody>
                    </table>

                </div>
                </div>';
    }
}
