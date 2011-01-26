<?php
error_reporting(0);
include ("connect.php");
session_name("MyLogin");
session_start();

if($_GET['action'] == "login") {
mysql_pconnect ("anubis","cm226", "cm226") ;
$db = mysql_select_db("cm226");



$name = $_POST['uname'];
echo $name;
$q_user = "SELECT * FROM users WHERE username='$name'";
$query = mysql_query($q_user);


if(mysql_num_rows($query) == 1) 
{

	$query = mysql_query("SELECT * FROM users WHERE username='$name'");
	$data = mysql_fetch_array($query);

	if($_POST['pw'] == $data['password']) 
	{ 
		$_SESSION['name']=$data['displayName'];
		header("Location: main.php");
		exit;
	} 
	else 
	{
		header("Location: login.php?login=failed&cause=".urlencode('Wrong Password'));
		exit;
	}
}
else 
{
	header("Location: login.php?login=failed&cause=".urlencode('Invalid User'));
	exit;
}
}

//if the session is not registered
if(session_is_registered("name") == false) {
header("Location: login.php");
}

?>

