<?php

include('database.php');

if(isset($_POST['nombre'])) {

$nombre =$_POST['nombre'];
$des = $_POST['descripcion'];

$query="INSERT INTO  tareas(nombre, descripcion) VALUES ('$nombre','$des')";
$result = mysqli_query($connection,$query);
if(!$result){
    die('consulta fallida');
}else{
    echo "insersion realizada";
}
}

?>