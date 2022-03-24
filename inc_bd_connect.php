<?php 
//Conexión a la base de datos destino
	$connect = mysqli_connect("127.0.0.1", "USER", "PassWord", "BD");
	

	if ($connect) { // si la conexion fue exitosa
		
		print "OK ->La base de datos alumno  est&aacute;  conectada<br/>";		
	} else{
		print "ERROR ->No se logr&oacute; conectar a la base de datos, consulte al administrador del sistema.<br/>";
	}
?>
