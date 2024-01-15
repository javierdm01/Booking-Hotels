<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peliculas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" >
    
</head>

<body>
    <div class="container mt-4">
        <?php include $_SERVER['DOCUMENT_ROOT'].'/VideoClub/templates/headerStyle.php'; ?>
        <h1 class="text-center mb-5">Hoteles</h1>
        <!-- Caracteristicas de coches -->
        <table class="table">
                <tr>
                    <td class="w-25 border-0">
                        <img src="../assets/img/hoteles/hotel1.webp" class="w-75 rounded ms-5" alt="Foto Hotel"/>
                    </td>
                    <td colspan="2" class="w-100 d-flex flex-column mt-1 ms-2 border-0" >
                        <h2 class="ms-1">Hotel Madrid Palace</h2>
                        <p class="ms-2">Descripcion del hotel aqui va</p>
                        <ul class="list-unstyled ms-4">
                            <li><input type="checkbox" name="hab" value="ON" /> Individual- Habitación individual con vistas a la ciudad <strong class="ms-1">69 €</strong></li>
                            <li><input type="checkbox" name="hab" value="ON" /> Individual- Habitación individual con vistas a la ciudad <strong class="ms-1">69 €</strong></li>
                            <li>
                                <input type="checkbox" name="hab" value="ON" /> Individual- Habitación individual con vistas a la ciudad <strong class="ms-1">69 €</strong></li>
                        </ul>

                    </td>
                    <td class="border-0">
                        <div class="d-flex flex-column justify-content-end mt-5">
                            <p class="mt-4">Desde: </p>
                            <h3 class="text-danger fs-2"><strong>100€</strong></h3>
                        </div>
                    </td>
                </tr>
        </table>
    </div>
    


    <!-- JavaScript y jQuery para habilitar los componentes de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
