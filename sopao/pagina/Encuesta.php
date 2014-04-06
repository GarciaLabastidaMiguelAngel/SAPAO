<form action="#" method="post">
            <strong>¿Te llegado el agua en las fechas y horas programadas?</strong> <br />
            <input name="Respuesta" type="radio" value="Respuesta 1"> Si <br />
            <input name="Respuesta" type="radio" value="Respuesta 2"> No <br />
            <input type="submit" value="Enviar">    
        </form>
<?php
	if($_POST['Respuesta'] != ''){
		$Respuesta = $_POST['Respuesta'];
		/* Nombre del Archivo que contiene los resultados */
		$Archivo = "db.txt";
		
		/* Abrimos el archivo como lectura */
		$Lectura = fopen($Archivo, "a+");
		
		/* Guardamos la respuesta del usuario y separamos los valores con el signo "|" */
		$Gurdado = fputs($Lectura, $Respuesta.'|');
		
		/* Recargamos el Archivo */
		$Lectura = fopen($Archivo, "r");
		
		/* Exporamos el contenido del Archivo */
		$Resultados_Lectura = fread($Lectura, filesize ($Archivo));
		
		/* Separamos el contenido por el simbolo "|" */
		$Contenido = explode("|", $Resultados_Lectura);
		
		/* Contamos el total de Respuestas */
		$Total_Respuestas = count($Contenido) - 1;
		
		//for, para sumar ++voto
		for($B = 0; $B < $Total_Respuestas; ++$B){
			if($Contenido[$B] == "Respuesta 1"){
				$Opcion_1++;
			}
			if($Contenido[$B] == "Respuesta 2"){
				$Opcion_2++;
			}
		}
		/* Redondeamos las respuestas */
		$Respuesta_1 = ($Opcion_1 * 100) / $Total_Respuestas;
		$Respuesta_2 = ($Opcion_2 * 100) / $Total_Respuestas;
	
		$Respuesta_1 = round($Respuesta_1);
		$Respuesta_2 = round($Respuesta_2);
		
		echo 'SI: '.$Respuesta_1.' %<br />';
		echo 'NO: '.$Respuesta_2.' %<br />';
	}
	else{	
	}
?>
