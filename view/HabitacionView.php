<?php

class HabitacionView {

    function mostrarHabitaciones($habitaciones) {
    echo '<li><input type="checkbox" name="check[]" value="'.$habitaciones['id'].'" /> '.$habitaciones['tipo'].'- '.$habitaciones['descripcion'].' <strong class="ms-1">'.$habitaciones['precio'].' €</strong></li>
        ';
    }

    function mostrarPrecioHabitaciones($minPrice) {
        echo '</ul>
        </td>
        <td class="border-0">
            <div class="d-flex flex-column justify-content-end mt-5">
                <p class="mt-4">Desde: </p>
                <h3 class="text-danger fs-2"><strong>' . $minPrice . ' €</strong></h3>
                <input type="submit" value="¡Reservar!" class="btn btn-danger">
                </form>
            </div>
        </td>
    </tr>';
    }
}
