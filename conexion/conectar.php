<?php

session_start();

include 'conexion/conexion.php';

$username = $_POST['Usuario'];
$password = $_POST['Password'];

$sql = $conexion->query($sql);

$result = $conexion->query($sql);

if($result->num_rows > 0 ){}
$row = $result-> fetch_array(MYSQLI_ASSOC);

if($password==$row['password']){

    $_SESSION['loggedin']=true;
    $_SESSION['username']=$username;
    $_SESSION['start'] = time();
    $_SESSION['expire']= $_SESSION['start'] + (5 * 60);

    echo "Bienvenido ". $_SESSION['username'];
    header('Location: ../admin/admin.html')
}else{
    echo "Usuario o Contraseña incorrectos";
}
mysqli_close($conexion);
?>