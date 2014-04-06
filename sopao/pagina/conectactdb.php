<?php

#Conectamos con MySQL
$conexion = mysql_connect("localhost","prueba","prueba")
or die ("Fallo en el establecimiento de la conexión");

#Seleccionamos la base de datos a utilizar
mysql_select_db("sapao")
or die("Error en la selección de la base de datos");

#Efectuamos la consulta SQL
$result = mysql_query ("select * from personal" )
or die("Error en la consulta SQL");

#Mostramos los resultados obtenidos
while( $row = mysql_fetch_array ( $result )) {
   echo $row [ "id" ];
   echo $row [ "nombre" ];
}

?>