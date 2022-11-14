<?php
$conn = new mysqli("localhost","root","","nuse");
$ape_nom = $_POST['apellido_nombre'];
$puesto = $_POST['puesto'];
$fecha_ingreso = $_POST['fecha_ing'];
$legajo = $_POST['legajo'];
$actualizar = "UPDATE empleados SET apellido_nombre = '$ape_nom',puesto = '$puesto',fecha_ingreso = '$fecha_ingreso' WHERE legajo = '$legajo'";
$query = mysqli_query($conn, $actualizar);

if($query){
    echo("Se han actualizado correctamente los datos....");
}
?>