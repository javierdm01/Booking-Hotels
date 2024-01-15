<?php
/**
 * Clase HotelView
 */
class HotelView {
    function mostratHoteles($hoteles) {
        echo '<tr>
                <td class="w-25 border-0">
                    <img src="../assets/img/hoteles/'.$hoteles["nombre"].'.webp" class="w-75 rounded ms-5" alt="Foto Hotel"/>
                </td>
                <td colspan="2" class="w-100 d-flex flex-column mt-1 ms-2 border-0" >
                    <h2 class="ms-1">'.$hoteles['nombre'].'</h2>
                    <p class="ms-2">'.$hoteles['descripcion'].'</p>'
            . '<ul class="list-unstyled ms-4">';
    }
}