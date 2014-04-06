<?php
$id_colonia="";
$resultados=null;
if($_POST){
$id_colonia=$_POST['colonia'];
}
#Conectamos con MySQL
$conexion = mysql_connect("localhost","root","")
or die ("Fallo en el establecimiento de la ");

#Seleccionamos la base de datos a utilizar
mysql_select_db("sapao")
or die("Error en la selección de la base de datos");

#Efectuamos la consulta SQL
$result = mysql_query ("select * from colonia ORDER BY nombre_colonia ASC" )
or die("Error en la consulta SQL");

if($_POST){
$id_colonia=(int)$_POST['colonia'];
$fechaactual =date("Y-m-d");
$query="SELECT * FROM sapao.suministro WHERE id_colonia=$id_colonia AND fecha>=$fechaactual";
$resultados = mysql_query($query) or die("Error en la consulta.");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registro</title>

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
<div class=col-lg-3>

</div>
<div class="col-lg-6">
<form class="form-horizontal" role="form" action="" enctype="application/x-www-form-urlencoded" method="post" accept-charset="UTF-8"><fieldset class="form-horizontal" role="form"><legend>Suministro de Agua</legend>


<div class="form-group"><label class="col-lg-4 col-md-4 control-label required" for="email">Colonia</label>
<div class="col-lg-8 col-md-8" input="div">

<select name="colonia" class="form-control">
<?php

#Mostramos los resultados obtenidos
while( $row = mysql_fetch_array ( $result )) {
   echo '<option value='.$row [ "id_colonia" ].'>'.$row [ "nombre_colonia" ].'</option>';
   }
?>
</select>
</div></div>
<div class="form-group"><div class="col-sm-offset-4 col-sm-8">
<input name="Consultar" class="btn btn-default" id="Consultar" type="submit" value="Consultar"></div></div></fieldset></form>


<?php
$contador=0;
date_default_timezone_set("America/Mexico_City");

if($_POST){
if(count($resultados)==0){
echo "Sin resultados";
}
while( $fila = mysql_fetch_array ( $resultados )) {
if($contador<2){

   echo '<p class="alert alert-info">El día '.$fila [ "fecha" ].' se le suministrará el agua, en un horario '.$fila['horario'].'</p>';
   }
   $contador++;
   }
}
?>

</div>
<div class="col-lg-3">

</div>

</div>
<footer>
<div class="well">
<div class="container">
<div class="col-lg-4">
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
</div>
</div>
</footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html