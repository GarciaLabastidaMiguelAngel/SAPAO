<?php
$Opcion_1=0;
$Opcion_2=0;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SAPAO Oaxaca</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  
<div class="container">
<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">SAPAO Oaxaca</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="registro.php"><span class="glyphicon glyphicon-phone"></span>Suscribirse</a></li>
        <li><a href="suministro.php"><span class="glyphicon glyphicon-time"></span> Consultar Suministro</a></li>

      </ul>
      <ul class="nav navbar-nav navbar-right">
	  <li><a href=""><span class="glyphicon glyphicon-user"></span> Administrador</a></li>
		<li><a href=""><span class="glyphicon glyphicon-envelope"></span> Enviar Correo</a></li>
            <li><a href="datos.html"><span class="glyphicon glyphicon-eye-open"></span> Conócenos</a></li>
      </ul>


    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="col-lg-12">
<img src="img/slogan.png" class="img-responsive" alt="Responsive image">
</div>
<div class="col-lg-5">
<div class="carousel slide" id="carousel-example-captions" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-captions" data-slide-to="0"></li>
        <li class="active" data-target="#carousel-example-captions" data-slide-to="1"></li>
        <li data-target="#carousel-example-captions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img alt="900x500" src="img/lasos.jpg" >
          <div class="carousel-caption">
            <h3>Hagámoslo juntos</h3>
            <p>En cooperación con el Gobierno y la Sociedad.</p>
          </div>
        </div>
        <div class="item">
          <img alt="900x500" src="img/agua.jpg" >
          <div class="carousel-caption">
		  <h3>Cuidemos el Agua</h3>
            <p>Estar al pendiete del día de suministro, ayudará a desperdiciar menos el agua.</p>
          </div>
        </div>
        <div class="item">
          <a href="registro.php"><img alt="900x500" src="img/telegram.png "></a>
          <div class="carousel-caption">
            <h3>Suscríbete!!!</h3>
            <p>Recibe información en Telegram sobre el Suministro de Agua en tu Colonia.</p>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#carousel-example-captions" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
      </a>
      <a class="right carousel-control" href="#carousel-example-captions" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
      </a>
    </div>
</div>
<div class="col-lg-5">
<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d7628.282210011843!2d-96.72160072219932!3d17.06574926677685!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sadosapaco!5e0!3m2!1ses-419!2s!4v1396806887675" width="430" height="270" frameborder="0" style="border:0"></iframe>

</div>
<div class="col-lg-2">

<form action="#" method="post">
            <strong>¿Te llegado el agua en las fechas y horas programadas?</strong> <br />
            <input name="Respuesta" type="radio" value="Respuesta 1"> Si <br />
            <input name="Respuesta" type="radio" value="Respuesta 2"> No <br />
            <input type="submit" value="Enviar">    
        </form>
<?php
	if($_POST){
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
	
		$Respuesta_1 = round($Respuesta_1).'%<br />';
		$Respuesta_2 = round($Respuesta_2).'%<br />';
		
		echo 'SI: '.$Respuesta_1;
		echo 'NO: '.$Respuesta_2;
	}
?>

</div>
</div>
<footer>
<div class="well">
<div class="container">
<div class="col-lg-8">
<address>
  <strong>SAPAO Oaxaca.</strong><br>
  Servicios de agua potable y alcantarillado de Oaxaca.<br>
  <br>
  <abbr title="Phone">P:</abbr> (123) 456-7890
</address>
<a href="https://twitter.com/SAPAOOaxaca"><img src="img/glyphicons_social_31_twitter.png"></a>
<img src="img/glyphicons_social_02_google_plus.png">
<img src="img/glyphicons_social_30_facebook.png">
</div>
<div class="col-lg-4">

<!-- Button trigger modal -->
<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Denuncia
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Describe el problema</h4>
      </div>
      <div class="modal-body">
       <div class="form-group">
    <input type="textarea" class="form-control" id="exampleInputPassword1" placeholder="Escribe tu comentario">
    
  </div>
  
  <div class="form-group">
    <label for="exampleInputEmail1">Tu email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="User@domain.com">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">O Tu Telefono para seguimiento por Telegram</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="9511234567">
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Guardar denuncia</button>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
</footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html