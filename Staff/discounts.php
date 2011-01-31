<?php
require("log.php");

	$conn = mysql_pconnect ("anubis","cm226", "cm226") ;
	$db = mysql_select_db("cm226");

	$q_user = mysql_query("SELECT * FROM prices");

	

	

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content= "text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="ta.css" />

</head>

<body>



<form name="Flight_info" method="post" action="">
	<table border="1" id="inputData">
	<tr><th colspan="2"><h4> Discount Form: </h4></th><tr>
	<tr><td>Discount On All Classes:</td><td><input type="text" name="all" ></input></td></tr>
	<tr><td>Discount Economy:</td><td><input type="text" name="decon" ></input></td></tr>
	<tr><td>Discount Business:</td><td><input type="text" name="dbus" ></input></td></tr>
	<tr><td>Discount Group:</td><td><input type="text" name="dgro" ></input></td></tr>
	<tr><td>Start Date:</td><td><input type="text" name="dgro" ></input></td></tr>
	<tr><td>Finish Date:</td><td><input type="text" name="dgro" ></input></td></tr>
	<tr><td colspan="2"><input type="submit" onClick="javascript:window.close();"/></td></tr>
	</table>

</form>

</body>
</html>
