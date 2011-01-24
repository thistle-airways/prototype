<?php
error_reporting(E_ALL); 
ini_set('display_errors', 1); 

function dbConnect($username, $password) {
	$dbConn = mysql_connect ("anubis", $username, $password) ;
	if (!$dbConn )
	{
		print "<p>Cannot connect to database - check username and password<br/>";
		print mysql_error()."</p>";
		print "</body>";
   	print "</html>";
		exit();
	}
}


//select the database
function dbSelect( $dbname) {
	$db = mysql_select_db($dbname);
	if (!$db)
	{
		print "<p>Cannot connect to database $dbname</br>";
		print mysql_error()."</p>";
		print "</body>";
   	print "</html>";
		exit("Bye");
	}
}

?>
