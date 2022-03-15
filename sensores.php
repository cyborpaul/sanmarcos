<?php
require 'components/header.general.php';
?>

    <!--Container Main start-->
    <div class="height-100 bg-light">
        <div class="container">
        <a href="nodos.php"><button class="btn btn-success">Crear nuevo nodo <i class="bx bx-plus nav_icon"></i></button></a>
        <!-- Generador de nodos o sensores -->

        <?php
          $query = "SELECT * FROM sanmarcos_nodo";
          require 'config.php';                    
          $result_tasks = mysqli_query($mysqli, $query);
          $contador=1;
          while($row = mysqli_fetch_assoc($result_tasks)) {
        ?>
        <div class="card m-3 " style="max-width: 300px;">
       
          <div class="row no-gutters">
            <div class="col-md-4">
              <img src="img/sensor.JPG" class="card-img" alt="...">
          </div>
           <div class="col-md-8">
            <div class="card-body">
               <h5 class="card-title"><?php echo $row['nod_txt_name']; ?></h5>
               <p class="card-text"><?php echo $row['nod_txt_description']; ?></p>
               <p class="card-text"><small class="text-muted"><?php echo $row['nod_date_actualizacion']; ?></small></p>
             </div>
           </div>
          </div>
        </div>
        <?php $contador++;} ?>
        <!-- Fin de  generador de nodos de sensores -->

        </div>

        
    </div>
</body>
</html>