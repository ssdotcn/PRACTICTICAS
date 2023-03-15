<?php

  	$host = 'localhost'; //'148.222.7.8'
	$user = 'root';
	$pass = '1111';
   $db = 'empone';

   try {
      $cxn = new PDO (
         'mysql:host=localhost;
         dbname='.$db,$user,$pass,
         array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
      );      
   } catch (Exception $e) {
      echo "ERROR DE CONEXION ".$e->getMessage();
   }

?>