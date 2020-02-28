<?php

// inicio de llamado
include '../src/include/db_connect.php';
no_cache();


echo" <!doctype html>
    	<html lang='es'>
        <head>
        <meta charset='utf-8'>
        <meta http-equiv='content-type' content='text/html; charset=ISO-8859-1' />
        <title> unidad-2-docker </title> 
	<meta content='IE=edge,chrome=1' http-equiv='X-UA-Compatible'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
	</head>
	<body>
        <pre>Ultima acutalizacion: <script> miFecha = new Date()
                        document.write(miFecha.getHours() + ':' + miFecha.getMinutes() + ':' + miFecha.getSeconds())
	</script></pre>
	<div align=\"center\" >
              <table border=\"0\" >
              <tr> <td colspan=\"2\" align=\"center\"><b>equipo 1 - unidad-2-docker </b> </td></tr>
              <tr> <td width=\"2000px\" heigh=\"20%\" > <br/><br/></td>
	      </tr>
   ";

	$v_titulo="SELECT * FROM `welcome` ORDER BY nombre DESC";
	$restA = $connPDO -> query($v_titulo);
	$v_t = $restA -> fetch();

	#while ($v_t = $restA -> fetch(PDO::FETCH_ASSOC))
	while ($v_t = $restA -> fetch())
	{
    		$nombre = $v_t['nombre'];
    		$email = $v_t['email'];

		echo "<tr>
			<td align=\"center\" style=\"width:5%\">".$nombre."</td>
			<td align=\"center\" style=\"width:5%\">".$email."</td>		
			</td>
		      </tr>
		";
      }
	echo "</table>";
	echo "</div>
	     </body>
             </html>";

// pie de pagina


?>
