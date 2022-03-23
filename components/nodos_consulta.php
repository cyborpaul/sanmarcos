<?php 
require '../config.php';
header('Content-Type: application/json');
$sql = sprintf("SELECT 
sn.nod_txt_name,
SUM(CASE WHEN sp.par_int_id ='1' THEN sd.dat_txt_datos ELSE 0 END) AS case_temperatura,
SUM(CASE WHEN sp.par_int_id ='2' THEN sd.dat_txt_datos ELSE 0 END) AS case_humedad,
SUM(CASE WHEN sp.par_int_id ='3' THEN sd.dat_txt_datos ELSE 0 END) AS case_rayos_uv,
SUM(CASE WHEN sp.par_int_id ='4' THEN sd.dat_txt_datos ELSE 0 END) AS case_co2,
SUM(CASE WHEN sp.par_int_id ='5' THEN sd.dat_txt_datos ELSE 0 END) AS case_humo,
SUM(CASE WHEN sp.par_int_id ='6' THEN sd.dat_txt_datos ELSE 0 END) AS case_glp,
SUM(CASE WHEN sp.par_int_id ='7' THEN sd.dat_txt_datos ELSE 0 END) AS case_gas,
SUM(CASE WHEN sp.par_int_id ='8' THEN sd.dat_txt_datos ELSE 0 END) AS case_latitud,
SUM(CASE WHEN sp.par_int_id ='9' THEN sd.dat_txt_datos ELSE 0 END) AS case_longitud
FROM sanmarcos_datos sd 
INNER JOIN sanmarcos_parametros sp ON sd.par_int_id = sp.par_int_id 
INNER JOIN sanmarcos_nodo sn ON sd.nod_int_id=sn.nod_int_id
GROUP BY sn.nod_txt_name ");
	$query = $mysqli->query($sql);
	
	$response = array();
	
	while($rows = $query->fetch_array()) {
		
		$response []= array(

                    'nod_txt_name' => $rows['nod_txt_name'],
                    'case_temperatura' => $rows['case_temperatura'],
                    'case_humedad' => $rows['case_humedad'],
                    'case_rayos_uv' => $rows['case_rayos_uv'],
                    'case_co2' => $rows['case_co2'],
                    'case_humo' => $rows['case_humo'],
                    'case_glp' => $rows['case_glp'],
                    'case_gas' => $rows['case_gas'],
                    'case_latitud' => $rows['case_latitud'],
                    'case_longitud' => $rows['case_longitud']
      
					);
	}
	
	echo json_encode($response);