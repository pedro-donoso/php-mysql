<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Base de Datos Restaurant</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>

                 <?php

                require_once "conexion.php";

                $sql = "SELECT * FROM newschema.platillos";
                $resultados = $conexion->query($sql);
                $resultados->execute(); 

                while ($fila = $resultados->fetch(PDO::FETCH_OBJ)) {

                    echo $fila->nombre."<br/>";


                }

                ?>


</body>

</html>