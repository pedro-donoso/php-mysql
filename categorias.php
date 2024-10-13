<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorías</title>
    <link rel="stylesheet" href="./bootstrap/bootstrap.min.css">
</head>

<body>

<?php include 'navbar.php'; ?>

<div class="container">
    <h1>Categorías</h1>
    <p>Aquí puedes encontrar nuestras categorías de platillos.</p>
</div>




    <div class="container">
        <h2>Tabla de categorías</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require_once "conexion.php";

                $sql = "SELECT * FROM newschema.categorias";
                $resultados = $conexion->query($sql);
                $resultados->execute(); 

                while ($fila = $resultados->fetch(PDO::FETCH_OBJ)) {
                    echo "<tr>";
                    echo "<td>".$fila->id."</td>";
                    echo "<td>".$fila->nombre."</td>";
                    echo "<td>".$fila->descripcion."</td>";
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