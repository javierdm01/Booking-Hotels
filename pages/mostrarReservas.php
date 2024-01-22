<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" >
    
</head>

<body>
    <div class="container mt-4">
        <?php include $_SERVER['DOCUMENT_ROOT'].'/Booking_Hotels/templates/headerStyle.php'; ?>
        <h1 class="text-center mb-5">Reservas</h1>
            <?php
               // session_start();
               // include '../frontcontroller.php';
            ?>
            <!-- MENÚ DE NAVEGACIÓN -->
            <div class="list-group">
                <button type="button" class="list-group-item list-group-item-action"><a class="nav-link text-dark" data-bs-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample"> <strong>Hotel Madrid Luxary</strong> </a>  </button>
                <div class="collapse" id="collapseExample1">
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
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>121</td>
                                <td>Individual</td>
                                <td>Habitación individual en madrid</td>
                                <td>12/12/23</td>
                                <td>14/12/23</td>
                                <td>75€</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
            <div class="list-group">
                <button type="button" class="list-group-item list-group-item-action"><a class="nav-link text-dark" data-bs-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample"> <strong>Hotel Madrid Luxary</strong> </a>  </button>
                <div class="collapse" id="collapseExample2">
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
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>121</td>
                                <td>Individual</td>
                                <td>Habitación individual en madrid</td>
                                <td>12/12/23</td>
                                <td>14/12/23</td>
                                <td>75€</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
    </div>
    


    <!-- JavaScript y jQuery para habilitar los componentes de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  
</body>
</html>
