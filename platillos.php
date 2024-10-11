<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Platillos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>

<?php include 'navbar.php'; ?>

<div class="container">
    <h1>Platillos</h1>
    <p>Aquí puedes encontrar nuestros platillos.</p>
</div>


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
                require_once "conexion.php";

                $sql = "SELECT * FROM newschema.platillos";
                $resultados = $conexion->query($sql);
                $resultados->execute(); 

                while ($fila = $resultados->fetch(PDO::FETCH_OBJ)) {
                    echo "<tr>";
                    echo "<td>".$fila->id."</td>";
                    echo "<td>".$fila->nombre."</td>";
                    echo "<td>".$fila->precio."</td>";
                    echo "<td>".$fila->disponible."</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

</body>
               