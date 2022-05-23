<!DOCTYPE html>
<html>
  <head>
    <title>Nodo sesnsor en mapa</title>

<script type="text/javascript" >
        <?php
        require 'config.php';
        $consulta1= "SELECT * FROM `sanmarcos_nodo`";
        $ressql=mysqli_query($mysqli,$consulta1);
        while ($row=mysqli_fetch_row ($ressql)){
            $coordenax=$row[4];        
            $coordenay=$row[3]; 
                 
        }
        ?>
        // Initialize and add the map
function initMap() {
  // The location of Uluru
  const uluru = { lat: <?php echo $coordenax;?> , lng: <?php echo $coordenay;?> };
  // The map, centered at Uluru
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 16,
    center: uluru,
    mapTypeId: 'satellite'
  });
  const image ="sensor.png";
  //const image ="luz2.gif";
  const beachMarker = new google.maps.Marker({
    position: { lat: <?php echo $coordenax;?>, lng: <?php echo $coordenay;?> },
    map,
    icon: image,
  });

  // The marker, positioned at Uluru
  const marker = new google.maps.Marker({
    position: uluru,
    map: map,
  });
}

window.initMap = initMap;
    </script>
  </head>
  <style>
      /* Set the size of the div element that contains the map */
#map {
  height: 600px;
  /* The height is 400 pixels */
  width: 100%;
  /* The width is the width of the web page */
}
  </style>
  <body>
    <h3>Nodo sesnor en mapa</h3>
    <a href="sensores.php"><button class="btn btn-success">Volver</button></a>
    <!--The div element for the map -->
    <div id="map">
      
    </div>

    <!-- 
     The `defer` attribute causes the callback to execute after the full HTML
     document has been parsed. For non-blocking uses, avoiding race conditions,
     and consistent behavior across browsers, consider loading using Promises
     with https://www.npmjs.com/package/@googlemaps/js-api-loader.
    -->

    <script src="http://maps.google.com/maps/api/js?key=AIzaSyA68xOsLic_QKxD4EcnwZDrtv-iE09-95M&callback=initMap" type="text/javascript"></script>
  
  </body>
</html>