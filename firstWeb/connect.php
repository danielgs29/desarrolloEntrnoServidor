<?php


	define('DBHOST', 'localhost');
	define('DBUSER', 'webuser');
	define('DBPASS', 'Soloyo29@');
	define('DBNAME', 'jardineria');
	
	$conn = mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME);

      	
	if ( !$conn ) {
		die("Connection failure: " . mysqli_connect_error());
	}
        else echo "Connection succeeded!<br/>";
        


