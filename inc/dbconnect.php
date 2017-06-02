<?php

 $server   = "localhost";
 $user     = "root";
 $password = "";
 $dbname   = "rock";

 $db = mysql_connect($server,$user,$password) or die('Could not connect: ' . mysql_error());
	mysql_query("SET character_set_results=utf8", $db);
	mysql_select_db($dbname, $db);

	if(mysql_error()){
		echo "failed to connect MYsql:".mysql_error();
	}else{
		//echo "Connected successfully";
	}

?>