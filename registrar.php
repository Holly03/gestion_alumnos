<?php
/* 
 * Este script procesa los datos recibidos por POST para agregar alumnos en la base de datos.
 * Los datos esperados son nombre, teléfono y correo electrónico. 
*/

if (isset($_POST)) {
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];

    require("conexion.php");

    if (empty($_POST['id'])) {
        $query = $pdo->prepare("INSERT INTO datos (nombre, telefono, correo) VALUES (:nombre, :telefono, :correo)");
        $query->bindParam(":nombre", $nombre);
        $query->bindParam(":telefono", $telefono);
        $query->bindParam(":correo", $correo);

        $query->execute();
        $pdo = null;

        echo "ok";
    } 
 
}
?>