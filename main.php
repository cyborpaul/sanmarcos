<?php
require 'components/header.general.php';
?>

<style>

.card {
    margin-bottom: 20px;
    line-height: 1.42857143;
    background-color: #fff;
    border-radius: 2px;
    box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);
    transition: box-shadow .25s;
}
.card:hover {
  box-shadow: 0 8px 17px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
}
.img-card {
  width: 100%;
  height:200px;
  border-top-left-radius:2px;
  border-top-right-radius:2px;
  display:block;
    overflow: hidden;
}
.img-card img{
  width: 100%;
  height: 200px;
  object-fit:cover;
  transition: all .25s ease;
}
.card-content {
  padding:15px;
  text-align:left;
}
.card-title {
  margin-top:0px;
  font-weight: 700;
  font-size: 1.65em;
}
.card-title a {
  color: #000;
  text-decoration: none !important;
}
.card-read-more {
  border-top: 1px solid #D4D4D4;
}
.card-read-more a {
  text-decoration: none !important;
  padding:10px;
  font-weight:600;
  text-transform: uppercase
}
</style>
    <!--Container Main start-->
    <div class="height-100 bg-light">

       <div class="container">
          <div class="row" id="tarjeta">
        <!-- COMIENZO TARJETA -->
        
 
        <!-- TERMINO TARJETA -->               
          </div>
        </div>    
    </div>

<!-- 1 -->



      

<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>


<script>
    $(document).ready(function(){
        setInterval(function(){			
        allData();
               	
	    }, 2000)
    });
 
 function allData(){
        $.ajax({
            type:"GET",
            datatype:'json',
            url: 'components/nodos_consulta.php',
            success: function(response){
                var data=""
                $.each(response, function(key, value){
                  console.log(response);
                    data=data +"<div class='col-lg-4 col-6'>"+
                                  "<div class='card'>"+
                                    "<div class='card-content'>"+
                                      "<h4 class='card-title'>"+
                                        "<a href='http://www.fostrap.com/'>"+value.nod_txt_name+"</a>"+
                                      "</h4>"+                                      
                                      "<div class=''>"+
                                          "<table class='table table-striped'>"+
                                            "<thead>"+
                                              "<tr>"+
                                                "<th style='width: 10px'>#</th>"+
                                                "<th>Variable</th>"+
                                                "<th>Dato</th>"+
                                              "</tr>"+
                                            "</thead>"+
                                            "<tbody>"+
                                              "<tr>"+
                                                "<td>1.</td>"+
                                                "<td>Temperatura</td>"+
                                                "<td>"+
                                                  value.case_temperatura+ " °C"+
                                                "</td>"+
                                              "</tr>"+
                                              "<tr>"+
                                                "<td>2.</td>"+
                                                "<td>Humedad</td>"+
                                                "<td>"+
                                                  value.case_humedad+ " %"+
                                                "</td>"+
                                              "</tr>"+
                                              "<tr>"+
                                                "<td>3.</td>"+
                                                "<td>Radiación ultravioleta</td>"+
                                                "<td>"+
                                                  value.case_rayos_uv+ " mW/cm^2"+ 
                                                "</td>"+
                                              "</tr>"+
                                              "<tr>"+
                                                "<td>4.</td>"+
                                                "<td>CO2</td>"+
                                                "<td>"+
                                                  value.case_co2+ " ppm"+
                                                "</td>"+
                                              "</tr>"+
                                            "</tbody>"+
                                          "</table>"+
                                      "</div>"+
                                    "</div>"+
                                  "</div>"+
                                "</div>"
                })
                $('#tarjeta').html(data);
                
            }
        })
    }
    allData();

</script>
</body>
</html>