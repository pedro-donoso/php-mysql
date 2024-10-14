<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorias</title>
    <link rel="stylesheet" href="./bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>

    <?php include './navbar/navbar.php'; ?>

    <div class="container my-3">
        <h2>Categorias</h2>
        <p>Aquí puedes ver las categorias del restaurante.</p>
    </div>

    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require_once "./data/conexion.php";

                $sql = "SELECT * FROM newschema.categoria";
                $resultados = $conexion->query($sql);
                $resultados->execute();

                while ($fila = $resultados->fetch(PDO::FETCH_OBJ)) {
                    echo "<tr>";
                    echo "<td>" . $fila->id . "</td>";
                    echo "<td>" . $fila->nombre . "</td>";
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