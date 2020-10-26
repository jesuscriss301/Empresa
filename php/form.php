<?php
 header('Access-Control-Allow-Origin: *');
 $conexion=mysqli_connect('localhost','root','','empresa_sql');


  $boton=$_POST['guardar_Empresa'];

  if(isset()$_POST['guardar_Empresa']){
    $nombre=$_POST['Nombre_Empresa'];
    $logo=$_POST['logo'];
    $correo=$_POST['email'];
    $telefono=$_POST['telefono'];
    $quiens_somos=$_POST['quienes_somos'];
    $url_fb=$_POST['facebook'];
    $url_tw=$_POST['twitter'];
    $url_wp=$_POST['whatsapp'];
  $sql="INSERT INTO empresa(id_empresa, nombre, quienessomos, logo, correo, telefono, facebook, twitter, whatsapp)
   VALUES ('','$nombre','$quiens_somos','$logo','$correo','$telefono','$url_fb','$url_tw','$url_wp')";
	$ejecutar= mysqli_query($conexion,$sql);

  }



?>
