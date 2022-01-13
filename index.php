<?php
include "config.php";
/* 
if(isset($_POST['but_submit'])){
  $username=$_POST['txt_uname'];
	$pass=$_POST['txt_pwd'];
  $query="SELECT * FROM usuarios WHERE username='$username'";
	$sql=mysqli_query($mysqli,$query);
	if($f=mysqli_fetch_assoc($sql )){
		if($pass==$f['password']){
			$_SESSION['id']=$f['id'];
			$_SESSION['name']=$f['name'];
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

 */

include "config.php";

// Encrypt cookie
function encryptCookie( $userid ) {
   
    $key = hex2bin(openssl_random_pseudo_bytes(4));

    $cipher = "aes-256-cbc";
    $ivlen = openssl_cipher_iv_length($cipher);
    $iv = openssl_random_pseudo_bytes($ivlen);

    $ciphertext = openssl_encrypt($userid, $cipher, $key, 0, $iv);
    

    return( base64_encode($ciphertext . '::' . $iv.'::'.$key) );
}

// Decrypt cookie
function decryptCookie( $ciphertext ) {
    
    $cipher = "aes-256-cbc";

    list($encrypted_data, $iv,$key) = explode('::', base64_decode($ciphertext));
    return openssl_decrypt($encrypted_data, $cipher, $key, 0, $iv);

}


// Check if $_SESSION or $_COOKIE already set
if( isset($_SESSION['userid']) ){
   header('Location: home.php');
   exit;
}else if( isset($_COOKIE['rememberme']  )){
    
    // Decrypt cookie variable value
    $userid = decryptCookie($_COOKIE['rememberme']);
        
    // Fetch records
    $stmt = $conn->prepare("SELECT count(*) as cntUser FROM users WHERE id=:id");
    $stmt->bindValue(':id', (int)$userid, PDO::PARAM_INT);
    $stmt->execute(); 
    $count = $stmt->fetchColumn(); 

    if( $count > 0 ){
        $_SESSION['userid'] = $userid; 
        echo '<script>location.href="main.php"</script>';
        exit;
    }
}

// On submit
if(isset($_POST['but_submit'])){

    $username = $_POST['txt_uname'];
    $password = $_POST['txt_pwd'];
    
    if ($username != "" && $password != ""){


        // Fetch records
        $stmt = $conn->prepare("SELECT count(*) as cntUser,id FROM usuarios WHERE username=:username and password=:password ");
        $stmt->bindValue(':username', $username, PDO::PARAM_STR);
        $stmt->bindValue(':password', $password, PDO::PARAM_STR);
        $stmt->execute(); 
        $record = $stmt->fetch(); 
    
        $count = $record['cntUser'];

        if($count > 0){
            $userid = $record['id'];

            if( isset($_POST['rememberme']) ){

                // Set cookie variables
                $days = 30;
                $value = encryptCookie($userid);

                setcookie ("rememberme",$value,time()+ ($days *  24 * 60 * 60 * 1000));
                
            }
            
            $_SESSION['userid'] = $userid; 
            header('Location: main.php');
            exit;
        }else{
            echo "Invalid username and password";
        }

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
