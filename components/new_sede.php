<?php 
$institucion=$_POST['institucion'];
$responsable=$_POST['responsable'];
$contacto=$_POST['contacto'];
$correo=$_POST['correo'];
$celular=$_POST['celular'];
$descripcion=$_POST['descripcion'];
require("config.php");
$sql= "INSERT INTO `sanmarcos_sedes`(`sed_txt_institucion`, `sed_txt_responsable`, `sed_txt_contacto`, `sed_txt_correo`, `sed_txt_celular`, `sed_txt_descripcion`) VALUES ('$institucion','$responsable','$contacto','$correo','$celular','$descripcion')";
$ejecutado=mysqli_query($mysqli,$sql);
?>