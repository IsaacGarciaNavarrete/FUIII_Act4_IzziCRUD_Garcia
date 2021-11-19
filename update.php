<?php

include("conexion.php");
$con=conectar();

$id_empleado=$_POST['id_empleado'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$edad=$_POST['edad'];
$INE=$_POST['INE'];
$CURP=$_POST['CURP'];

$sql="UPDATE empleado SET  nombre='$nombre',apellido='$apellido',edad='$edad',INE='$INE',CURP='$CURP' WHERE id_empleado='$id_empleado' ";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: empleado.php");
    }
?>