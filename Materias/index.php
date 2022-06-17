<?php 
require_once("../lib/connect.php");
$consulta = "SELECT * FROM materias";
$resultado = mysqli_query($connect, $consulta);
$array = mysqli_fetch_array($resultado);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>materias</title>
</head>
<body>
    <hr>
    <table>
        <thead>
            <tr>
                <th>id               </th>
                <th>nombre            </th>
                <th>cuatrimestre       </th>
                <th>licenciatura      </th>
            </tr>
        </thead>
        <tbody>    
            <?php
                while ($fila = mysqli_fetch_array ($resultado)) {

            ?>
            <tr> 
                <td><?php echo $fila['id'];?></td>
                <td><?php echo $fila['nombre'];?></td>
                <td><?php echo $fila['Cuatrimestre'];?></td>
                <td><?php echo $fila['Licenciatura'];?></td>
            </tr>        
            <?php
                    }
            ?> 
        </tbody>
    </table>
</body>
</html>

