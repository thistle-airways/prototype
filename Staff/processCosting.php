
<?php
require("log.php");


if($_GET['action'] == "PCost") {
$conn = mysql_pconnect ("anubis","cm226", "cm226") ;
$db = mysql_select_db("cm226");

$cost[0] = $_POST['ID'];
$cost[1] = $_POST['econ'];
$cost[2] = $_POST['buss'];
$cost[3] = $_POST['grou'];
$cost[4] = $_POST['name'];



$insert = "INSERT INTO prices(priceID, priceName,businessclass, economyclass, groupclass) VALUES ($cost[0],'$cost[4]',$cost[1],$cost[2],$cost[3])";
include("header.html");


if (!mysql_query($insert)){
	echo '<table border="1" id="error">';
	echo'<th colspan="2">MySql database error</th>';
	echo '<tr bgcolor="#FF6633" ><td>Database Element</td><td>Error reason</td></tr>';
	echo'<tr><td>';
	echo'cannot insert structure:';
		echo '<table id="displayInfo" border="1">';
		echo '<tr><td>ID:</td><td>'.$cost[0].'</td></tr>';
		echo '<tr><td>econemy price:</td><td>'.$cost[1].'</td></tr>';
		echo '<tr><td>business price:</td><td>'.$cost[2].'</td></tr>';
		echo '<tr><td>group price:</td><td>'.$cost[3].'</td></tr>';
		echo '<tr><td>name:</td><td>'.$cost[4].'</td></tr>';
		echo '</table>'; 
	echo '</td><td>';
	die('Error: ' . mysql_error());
	echo'</td></tr>';
	echo '</table>';
	}   
  else{
	  echo '<table border="1" id="sucessful">';
	echo'<th>flight sucessfully entered</th>';
	echo'<tr><td>';
		echo '<table id="displayInfo" border="1" width=100%>';
		echo '<tr><td>ID:</td><td>'.$cost[0].'</td></tr>';
		echo '<tr><td>econemy price:</td><td>'.$cost[1].'</td></tr>';
		echo '<tr><td>business price:</td><td>'.$cost[2].'</td></tr>';
		echo '<tr><td>group price:</td><td>'.$cost[3].'</td></tr>';
		echo '<tr><td>name:</td><td>'.$cost[4].'</td></tr>';
		echo '</table>'; 
	echo'</td></tr>';
	echo '</table>';
	  
  }
 echo '<br/>';
		echo date('l jS \of F Y h:i:s A');
		echo '<br/>';
 		echo '<form>'; 
		echo '<input type="button" value="print"/> ';
		echo '</form>';

include("footer.html");

}

?>


