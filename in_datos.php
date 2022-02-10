<?php

$dato= $_GET['dato'];
require("config.php");
mysqli_query($mysqli,"INSERT INTO datos (dato) VALUES('$dato')");

?>