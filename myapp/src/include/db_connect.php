<?php

include 'env.php';

    $conn = mysqli_connect($ipv4_DB,$DB_USERNAME,$DB_PASSWORD,$DB_DATABASE);
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
