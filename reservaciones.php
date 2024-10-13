<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservaciones</title>
    <link rel="stylesheet" href="./bootstrap/bootstrap.min.css">
</head>

<body>

    <?php include 'navbar.php'; ?>

    <div class="container">
        <h1>Reservaciones</h1>
        <p>Aquí puedes hacer una reservación en nuestro restaurante.</p>
    </div>


    <div class="container">
        <h2>Tabla de reservaciones</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre del cliente</th>
                    <th>Fecha de reservación</th>
                    <th>Hora de reservación</th>
                    <th>Número de personas</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require_once "conexion.php";

                $sql = "SELECT * FROM newschema.reservaciones";
                $resultados = $conexion->query($sql);
                $resultados->execute();

                while ($fila = $resultados->fetch(PDO::FETCH_OBJ)) {
                    echo "<tr>";
                    echo "<td>" . $fila->id . "</td>";
                    echo "<td>" . $fila->nombre_cliente . "</td>";
                    echo "<td>" . $fila->fecha_reservacion . "</td>";
                    echo "<td>" . $fila->hora_reservacion . "</td>";
                    echo "<td>" . $fila->numero_personas . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"></script>
    <script src="./bootstrap/bootstrap.bundle.min.js"></script>

</body>

</html>