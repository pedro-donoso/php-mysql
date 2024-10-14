<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Platillos</title>
    <link rel="stylesheet" href="./bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>

    <?php include './navbar/navbar.php'; ?>

    <div class="container my-3">
        <h2>Tabla Platillos</h2>
        <p>Aquí puedes encontrar nuestros platillos.</p>
    </div>

    <div class="container tabla-platillos">
    <table class="table table-striped w-75">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Disponible</th>
                <th>Categoria</th>
            </tr>
        </thead>
        <tbody>
            <?php
            require_once "./data/conexion.php";

            $sql = "SELECT p.id, p.nombre, p.precio, p.disponible, c.nombre AS categoria 
                    FROM newschema.platillos p 
                    INNER JOIN newschema.categoria c ON p.categoriaId = c.id
                    ORDER BY p.id ASC";
            $resultados = $conexion->prepare($sql);
            $resultados->execute();

            while ($fila = $resultados->fetch(PDO::FETCH_OBJ)) {
                echo "<tr>";
                echo "<td>" . $fila->id . "</td>";
                echo "<td>" . $fila->nombre . "</td>";
                echo "<td>" . $fila->precio . "</td>";
                echo "<td>" . $fila->disponible . "</td>";
                echo "<td>" . $fila->categoria . "</td>";
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