<?php
		
		$mysqli = new mysqli('localhost', 'root', 'Jarvis@3000', 'sanmarcos');
		if ($mysqli->connect_errno) {
			echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
		}


		
?>