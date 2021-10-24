<?php
include './conexion_bd.php';

$correo= $_POST['correo'];
$contrasena =$_POST['contrasena'];

$validar_login=mysqli_query($conexion,"Select*from usarios where correo='$correo'
and contrasena='contrasena'");

if(mysqli_num_rows($validar_login)>0){
    header("location:Inicio.html");
}else{
    echo'
    <script>
    alert("Usuario no existe, por favor verifique los datos introducidos)";
    window.location="./index.php";
    </script>
    ';
    exit;
}


?>