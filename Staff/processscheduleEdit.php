
<?php
require("log.php");


if($_GET['action'] == "PSchedule") {
$conn = mysql_pconnect ("anubis","cm226", "cm226") ;
$db = mysql_select_db("cm226");

$schedule[0] = $_POST['schID'];
$schedule[1] = $_POST['FlightNo'];
$schedule[2] = $_POST['depdate'];
$schedule[3] = $_POST['depTime'];
$schedule[4] = $_POST['arrivTime'];

$insert = "UPDATE flightSchedule SET FlightNo=$schedule[1], departuredate='$schedule[2]', departureTime='$schedule[3]', arrivalTime='$schedule[4]' WHERE ScheduleID = $schedule[0]";

include("header.html");

if (!mysql_query($insert))
{
	echo '<table border="1" id="error">';
	echo'<th colspan="2">MySql database error</th>';
	echo '<tr bgcolor="#FF6633" ><td>Database Element</td><td>Error reason</td></tr>';
	echo'<tr><td>';
	echo'cannot insert update schedule:';
		echo '<table id="displayInfo" border="1">';
		echo '<tr><td>schedule ID:</td><td>'.$schedule[0].'</td></tr>';
		echo '<tr><td>Flight Number:</td><td>'.$schedule[1].'</td></tr>';
		echo '<tr><td>departure date:</td><td>'.$schedule[2].'</td></tr>';
		echo '<tr><td>departure time:</td><td>'.$schedule[3].'</td></tr>';
		echo '<tr><td>arriavl time:</td><td>'.$schedule[4].'</td></tr>';
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
		echo '<tr><td>schedule ID:</td><td>'.$schedule[0].'</td></tr>';
		echo '<tr><td>flight number:</td><td>'.$schedule[1].'</td></tr>';
		echo '<tr><td>departure date:</td><td>'.$schedule[2].'</td></tr>';
		echo '<tr><td>departure time:</td><td>'.$schedule[3].'</td></tr>';
		echo '<tr><td>arrival time:</td><td>'.$schedule[4].'</td></tr>';
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

