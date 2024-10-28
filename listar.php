<?php
/* 
 * Este script procesa la busqueda de alumnos en la base de datos y devuelve los resultados en formato de tabla HTML.
 * Los resultados se muestran en una tabla HTML.
*/

session_start();

$data = file_get_contents("php://input");

require "conexion.php";

if ($data != "") {
    $consulta = $pdo->prepare("SELECT * FROM datos WHERE (nombre LIKE :data OR telefono LIKE :data OR correo LIKE :data) ORDER BY id ASC");
    $consulta->bindValue(':data', '%' . $data . '%');
    $consulta->execute();
} else {
    $consulta = $pdo->prepare("SELECT * FROM datos ORDER BY id ASC");
    $consulta->execute();
}

$resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);

foreach ($resultado as $data) {
    echo "<tr>
            <td>" . $data['nombre'] . "</td>
            <td>" . $data['telefono'] . "</td>
             <td>" . $data['correo'] . "</td>     
        </tr>";
}
?>