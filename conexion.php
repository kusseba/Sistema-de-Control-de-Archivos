<?php
/* GRUPO: ALVAREZ, KUS, GODOY.
Hicimos el login con partes del sistema Login de VaidrollTeam:  
https://vaidrollteam.blogspot.com/2020/08/login-basico-registrar-datos-ejercicio.html */

$conn = new mysqli("localhost","root","","asistencia");
	
	if($conn->connect_errno)
	{
		echo "No hay conexión: (" . $conn->connect_errno . ") " . $conn->connect_error;
	}
?>