<?php 
 $host = "localhost";
 $user = "root";
 $pass ="";
 $db= "boletos";
    
 $conection = new mysqli($host,$user,$pass,$db);

 if($conection->connect_error) {
    die("error en la conexion");
 }else {
    echo "conexion exitosa";
 }
?>