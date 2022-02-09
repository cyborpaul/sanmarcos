<?php
	$mail=$_POST['email'];
	$name=$_POST['name'];	
	$lastname=$_POST['lastname'];
	$nickname=$_POST['nickname'];
	$password=$_POST['pass'];
	$passcifrada=password_hash($password, PASSWORD_DEFAULT);
	$rol= $_POST['check'];
	require("config.php");
	
	$checkemail=mysqli_query($mysqli,"SELECT * FROM usuarios WHERE email='$mail'");
	$check_mail=mysqli_num_rows($checkemail);	
	if($check_mail>0){
		echo ' <div class="alert alert-danger" role="alert">Atención!!. El email ya está designado para un usuario del sistema. Por favor verifique sus datos.</div>';
	}else{
		mysqli_query($mysqli,"INSERT INTO usuarios (email,name, lastname, nickname,password,rol) VALUES('$mail','$name','$lastname','$nickname','$passcifrada','$rol')");				
		echo ' <div class="alert alert-success" role="alert">Nuevo usuario para el sistema SM-UNMSM.</div> ';
		
	}			


?>