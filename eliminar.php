<?php
$conn = new mysqli("localhost","root","","nuse");
$id_empleado = $_GET['id'];
$baja = "DELETE FROM empleados WHERE legajo = '$id_empleado'";
$query = mysqli_query($conn, $baja);
if($query){
    echo("Se ha dado de baja correctamente.");
}


?>