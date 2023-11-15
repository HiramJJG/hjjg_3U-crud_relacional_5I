<?php

include "../config/conexion.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recibir los datos del formulario de edición
    $ID_camion = $_POST['ID_camion'];
    $Marca = $_POST['Marca'];
    $Modelo = $_POST['Modelo'];
    $Capacidad = $_POST['Capacidad'];
    $Tipocombustible = $_POST['Tipocombustible'];
    $Fecha_fabricacion = $_POST['Fecha_fabricacion'];
    $Num_asientos = $_POST['Num_asientos'];
    $Disponibilidad = $_POST['Disponibilidad'];

    // Actualizar los datos en la base de datos (debes proporcionar tus propias consultas)
    $consulta = "UPDATE camion SET nombrecamion = '$nombreC',EstadoCategoria = '$estadoC',EstadoCategoria = '$nombreC',EstadoCategoria WHERE idCategoria = $id";

    if (mysqli_query($conexion, $consulta)) {
        // Redireccionar a alguna página después de la actualización exitosa
        header("location:../Formularios/categorias/index.php");
        exit();
    } else {
        // Mostrar un mensaje de error si la actualización falla
        echo "Error al actualizar el registro: " . mysqli_error($conexion);
    }
}
