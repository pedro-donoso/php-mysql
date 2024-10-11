<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservaciones</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
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
                    echo "<td>".$fila->id."</td>";
                    echo "<td>".$fila->nombre_cliente."</td>";
                    echo "<td>".$fila->fecha_reservacion."</td>";
                    echo "<td>".$fila->hora_reservacion."</td>";
                    echo "<td>".$fila->numero_personas."</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

</body>

</html>