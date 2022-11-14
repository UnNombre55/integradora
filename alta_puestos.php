<?php
$conn = new mysqli("localhost","root","","nuse"); 
$puesto = $_POST['puesto'];
$sueldo = $_POST['sueldo'];
$alta = "INSERT INTO puestos(puesto,sueldo) VALUES ('$puesto','$sueldo')";
$query = mysqli_query($conn,$alta);

if($query){
    echo("Se ha dado de alta:". $puesto);
    echo("<br><a href='crear_puestos.html'>Volver</a>");
}
?>