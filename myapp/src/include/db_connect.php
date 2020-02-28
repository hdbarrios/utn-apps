<?php

	try
	{
		$server='127.0.0.1'
		$user='root';
		$passwd='root';
		$db='devops_app';

		$opc=array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
		$connPDO=new PDO('mysql:host='.$server.';dbname='.$db.'',$user,$passwd);
	}
	catch(PDOException $e)
	{
		echo $falla de conexion: ".$e->getMessage();
	}
?>
