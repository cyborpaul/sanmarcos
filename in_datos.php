<?php

$dato= $_POST['dato'];
require("config.php");
mysqli_query($mysqli,"INSERT INTO datos (dato) VALUES('$dato')");



?>