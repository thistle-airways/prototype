
<?php
require("log.php");


if($_GET['action'] == "PCost") {
$conn = mysql_pconnect ("anubis","cm226", "cm226") ;
$db = mysql_select_db("cm226");

$structure[0] = $_POST['ID'];
$structure[1] = $_POST['name'];
$structure[2] = $_POST['econ'];
$structure[3] = $_POST['buss'];
$structure[4] = $_POST['grou'];


$insert = "UPDATE prices SET  priceName='$structure[1]',  economyclass=$structure[2],businessclass = $structure[3], groupclass =$structure[4] WHERE priceID = $structure[0]";

include("header.html");
if (!mysql_query($insert)){
	echo '<table border="1" id="error">';
	echo'<th colspan="2">MySql database error</th>';
	echo '<tr bgcolor="#FF6633" ><td>Database Element</td><td>Error reason</td></tr>';
	echo'<tr><td>';
	echo'cannot update structure:';
		echo '<table id="displayInfo" border="1">';
		echo '<tr><td>ID:</td><td>'.$structure[0].'</td></tr>';
		echo '<tr><td>econemy price:</td><td>'.$structure[1].'</td></tr>';
		echo '<tr><td>business price:</td><td>'.$structure[2].'</td></tr>';
		echo '<tr><td>group price:</td><td>'.$structure[3].'</td></tr>';
		echo '<tr><td>name:</td><td>'.$structure[4].'</td></tr>';
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
		echo '<tr><td>ID:</td><td>'.$structure[0].'</td></tr>';
		echo '<tr><td>econemy price:</td><td>'.$structure[1].'</td></tr>';
		echo '<tr><td>business price:</td><td>'.$structure[2].'</td></tr>';
		echo '<tr><td>group price:</td><td>'.$structure[3].'</td></tr>';
		echo '<tr><td>name:</td><td>'.$structure[4].'</td></tr>';
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


