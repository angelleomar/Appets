

<?php
 //conectamos Con el servidor
 $host ="localhost";
 $user ="root";
 $pass ="";
 $db="appets_company";

 //funcion llamada conexion con (dominio,usuarios,contraseña,base_de_datos)
 $con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
 mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");


 //recuperar las variables
 $nombres=$_POST['nombres'];
 $apellidos=$_POST['apellidos'];
 $emails=$_POST['emails'];
 $citas=$_POST['citas'];
 $idm=$_POST['idm'];
 $horas=$_POST['horas'];
 //hacemos la sentencia de sql
 $sql="INSERT INTO citas VALUES
 ('$nombres',
 '$apellidos',
 '$emails',
 '$citas',
 '$idm',
 '$horas')";
 //ejecutamos la sentencia de sql
 $ejecutar=mysqli_query($con,$sql);
 //verificamos la ejecucion
 if(!$ejecutar){
  echo"Hubo Algun Error";
 }else{
  echo"Datos Guardados Correctamente<br><a href='adopta.php'>Volver</a>";
 }
?>