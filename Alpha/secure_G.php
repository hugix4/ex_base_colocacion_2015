<?php
//inicio la sesi�n
session_start();
//comprueba que el usuario sea v�lido
if($_SESSION["a1"]!="1"){
	//si no existe, se dirige a la p�gina de inicio 
	echo"<a href='ecG.html'><u>Inicio</u></a>";	
	//salimos del script
	exit();
}
?>