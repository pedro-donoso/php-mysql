<?php

require_once "conexion.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Base de Datos Restaurant</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>

    <div class="container">
        <h2>Tabla de platillos</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Disponible</th>
                </tr>
            </thead>
            <tbody>
                <?php

                $resultado = $conexion->query("SELECT * FROM newschema.platillos");

                while ($row = mysqli_fetch_array($resultado)) {
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["nombre"] . "</td>";
                    echo "<td>" . $row["precio"] . "</td>";
                    echo "<td>" . $row["disponible"] . "</td>";
                    echo "<tr/>";
                }

                ?>
            </tbody>
        </table>
    </div>

</body>

</html>