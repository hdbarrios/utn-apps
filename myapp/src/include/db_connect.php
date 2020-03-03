<?php

	/*try
	{
		$server='127.0.0.1';
		$user='root';
		$passwd='root';
		$db='devops_app';

		$opc=array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
		$connPDO=new PDO('mysql:host='.$server.';dbname='.$db.'',$user,$passwd);
	}
	catch(PDOException $e)
	{
		echo "Falla de conexion: ".$e->getMessage()."<br/>";
	}*/


	$server='127.0.0.1';
	$user='root';
	$passwd='root';
	$db='devops_app';

	 $conn = mysqli_connect($server,$user,$passwd,$db);
  	// Check connection
  	if (mysqli_connect_errno())
 	 {
    		echo "Failed to connect to MySQL: " . mysqli_connect_error($conn);
	 }
  	if (!$conn->set_charset("utf8")) {
   		 printf("Error cambiando el juego de caracteres utf8: %s\n", $conn->error);
	}

        return $conn;

?>
