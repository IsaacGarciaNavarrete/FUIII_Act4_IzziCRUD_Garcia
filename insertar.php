<?php
include("conexion.php");
$con=conectar();

$id_empleado=$_POST['id_empleado'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$edad=$_POST['edad'];
$INE=$_POST['INE'];
$CURP=$_POST['CURP'];


$sql= "INSERT INTO empleado(id_empleado, nombre, apellido, edad, INE, CURP) VALUES ('$id_empleado','$nombre','$apellido','$edad','$INE','$CURP')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: empleado.php");
    
}else {
}
?>