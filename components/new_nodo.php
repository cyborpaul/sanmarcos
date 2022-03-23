<?php

use function PHPSTORM_META\sql_injection_subst;

$nod_name=$_POST['nodo_name'];
$nod_description=$_POST['nodo_description'];
$nod_latitud=$_POST['nodo_latitud'];
$nod_longitud=$_POST['nodo_longitud'];
$nod_distrito=$_POST['nodo_distrito'];
$nod_provincia=$_POST['nodo_provincia'];
$nod_region=$_POST['nodo_region'];
$nod_habilitado=$_POST['nodo_habilitado'];
$zonahoraria="-5";
$formato="Y-m-d H:i:s a";
$time=gmdate($formato, time()+($zonahoraria*3600));
$nod_registro=$time;
$nod_actualizacion=$time;

require("config.php");
$sql="INSERT INTO `sanmarcos_nodo`(`nod_txt_name`, `nod_txt_description`, `nod_double_latitud`, `nod_double_longitud`, `nod_txt_distrito`, `nod_txt_provincia`, `nod_txt_region`, `nod_int_habilitado`, `nod_date_registro`, `nod_date_actualizacion`) VALUES ('$nod_name','$nod_description','$nod_latitud','$nod_longitud','$nod_distrito,'$nod_provincia','$nod_region','$nod_habilitado','$nod_registro','$nod_actualizacion')";
$ejecutado=mysqli_query($mysqli,"INSERT INTO sanmarcos_nodo (nod_txt_name, nod_txt_description, nod_double_latitud, nod_double_longitud, nod_txt_distrito, nod_txt_provincia, nod_txt_region,nod_int_habilitado, nod_date_registro, nod_date_actualizacion) VALUES ('$nod_name','$nod_description','$nod_latitud','$nod_longitud','$nod_distrito','$nod_provincia','$nod_region','$nod_habilitado','$nod_registro','$nod_actualizacion')");

if($ejecutado>0){
    echo "Subido";
}else{
    echo "Nada";
}


?>