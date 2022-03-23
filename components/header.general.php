<?php 
session_start();
include "config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sensores</title>
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>
    <style>
    .height-100.bg-light {
       margin-top: 7%;
     }
    </style>

</head>
<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="header_img"> <img src="img/stark.png" alt=""> </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> <a href="#" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name">SM - UNMSM</span> </a>
                <div class="nav_list"> <a href="main.php" class="nav_link active"><i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Ver sensores</span> </a> 
                <a href="users.php" class="nav_link"><i class='bx bx-user nav_icon'></i> <span class="nav_name">Gestión de usuarios</span> </a> 
                <a href="sensores.php" class="nav_link"><i class='bx bx-message-square-detail nav_icon'></i> <span class="nav_name">Gestión de nodo</span> </a> 
                <a href="sedes.php" class="nav_link"><i class='bx bx-bookmark nav_icon'></i> <span class="nav_name">Gestión de sede</span> </a> 
                <a href="fotos.php" class="nav_link"><i class='bx bx-folder nav_icon'></i> <span class="nav_name">Gestión de variables</span> </a> 
                <a href="bitacora.php" class="nav_link"><i class='bx bx-bar-chart-alt-2 nav_icon'></i> <span class="nav_name">Bitácora</span> </a> </div>
<?php
if(isset($_POST['but_logout'])){
    session_destroy();
    header("location:index.php");
}
?>
      <form method='post' action="">
            
          </div> <a href="#" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <input class="btn btn-danger" type="submit" value="Salir" name="but_logout"> </a>
      </form>
            
    </nav>
</div>