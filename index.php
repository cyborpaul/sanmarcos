<?php
session_start();
include "config.php";
/* echo '<script>location.href="sensores.php"</script>'; */

if(isset($_POST['but_submit'])){
  $username=$_POST['txt_uname'];
	$pass=$_POST['txt_pwd'];
  $query="SELECT * FROM usuarios WHERE username='$username'";
	$sql=mysqli_query($mysqli,$query);
	if($f=mysqli_fetch_assoc($sql )){
		if($pass==$f['password']){
			$_SESSION['id']=$f['id'];
			//echo '<script>alert("BIENVENIDO IDENTIARBOL")</script> ';
			echo '<script>location.href="main.php"</script>';
			//header("Location: starter.php"); 
		}else{
			echo '<div class="alert alert-danger" role="alert">Contraseña incorrecta.</div> ';			
		}		
	}else{		
		echo '<div class="alert alert-danger" role="alert">Este usuario no existe. Por favor registrese para poder ingresar.</div>';			
	}

}

?>
<!DOCTYPE html>
<html lang="es" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<title>Sistema monitoreo - UNMSM</title>

    </head>
    <body class="d-flex flex-column h-100">
    
    <header>
  <!-- Fixed navbar -->
  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">SISTEMA MONITOREO - UNMSM</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

  </nav>
</header>

<!-- Begin page content -->
<hr>
<br>
<main>
<div class="container">

      <div class="row">
      <div class="col-md-12">
        <h3>Iniciar sesión</h3>
        <hr>
	  </div>
      <div class="col-md-6">
      <div id="div_login"><div>
<form method="post" action="">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Usuario</label>
    <input type="text" class="form-control" name="txt_uname"  aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="txt_pwd">
  </div>

  <button type="submit" class="btn btn-primary" name="but_submit">Iniciar sesión</button>
</form>


      </div>
      </div>

      
</div>
	  </div>
<footer>
      <hr>
        <div class="copyright"> &copy; <?=date("Y")?> Todos los derechos reservados </div>
        <div class="footerlogo"><a href="https://baulcode.com" target="_blank"></a> </div>
</footer>
</div>

</main>
  </body>
</html>
