<?php
$conn = new mysqli("localhost","root","","nuse");
$buscar = "SELECT * FROM empleados";
$query = mysqli_query($conn,$buscar);

foreach($query as $res){
    echo("<br>Legajo:". $res['legajo']);
    echo("<br>Apellido y Nombres:". $res['apellido_nombre']);
    echo("<br>Puesto: ".$res['puesto']);
    echo("<br>Fecha de ingreso. ".$res['fecha_ingreso']);
    echo("<hr>");

}



?>

