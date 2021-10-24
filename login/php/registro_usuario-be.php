<?php
// Acceso de bd
include './conexion_bd.php';
// Variables 
$nombre_completo=$_POST['nombre_completo'];
$correo=$_POST['correo'];
$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];
$contrasena=hash('sha512',$contrasena);

$query = "INSERT INTO usuarios(Nombre_completo,Correo,Usuario,Contrasena)
            Values('$nombre_completo','$correo','$usuario','$contrasena')";
//  Verificar que el correo del usuario no se repita en la bd
$verificar_correo=mysqli_query($conexion,"SELECT *FROM usuarios where correo='$correo' ");
if(mysqli_num_rows($verificar_correo)>0 ){
echo '
<script>
alert("Este correo ya esta registrado, intente con otro diferente");
window.location="/login/php/index.php";
</script>';
exit();
}
 $verificar_usuario=mysqli_query($conexion,"Select*from usuarios where usuario='$usuario'");
 
if(mysqli_num_rows($verificar_usuario)>0) {
echo '
<script>
alert("Este usuario ya esta registrado, intente con otro diferente");
window.location="/login/php/index.php";
</script>';
exit(); 
  }

$ejecutar= mysqli_query($conexion,$query);
 if($ejecutar){
     echo '
     <script>
     alert("Usuario almacenado exitosamente");
     window.location="/login/php/index.php"
     </script>
     ';
 }else{
    echo '
    <script>
    alert("Intenta lo de nuevo, usuario no almacenado");
    window.location="/login/php/index.php"
    </script>
    ';
 }
 mysqli_close($conexion);
?>