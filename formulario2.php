<?php
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];
    $direccion = $_POST['direccion'];
    $salario = $_POST['salario'];

    echo "<h2>Información del Empleado</h2>";
    echo "Nombre: " . $nombre . "<br>";
    echo "Edad: " . $edad . "<br>";
    echo "Dirección: " . $direccion . "<br>";
    echo "Salario: $" . $salario . "<br>";
?>
