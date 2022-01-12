<?php

/* Obtener URL */
$requestUrl = parse_url($_SERVER['REQUEST_URI']);
$urlPath = $requestUrl["path"];
$url =explode("/", $urlPath);

/* Formatear la url que ya es un arreglo */
$lastIndexUrl=count($url)-1;
if(empty($url[$lastIndexUrl])){
    array_shift($url);
    array_pop($url);
}else{
    array_shift($url);
}
/* Fin de formato de la Url */
require_once "config/config.php";

/* Incluir archivs de configuración */


/* Comprobación */
if(DEFAULT_PROYECT_PATH===$urlPath){
    echo "Rutas son iguales cargar controlador predeterminado";
}elseif(DEFAULT_PROYECT_PATH===($urlPath . "/")){
    echo "Rutas no son iguales cargar controlador predeterminado";
}else{
    echo "Otro controlador";
}
/* Fin comprobación de Url */
?>


<link rel="stylesheet" href="<?php echo BASE_URL?>style.css">