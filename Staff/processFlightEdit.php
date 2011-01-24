
<?php
require("log.php");


if($_GET['action'] == "PFlight") {
$conn = mysql_pconnect ("anubis","cm226", "cm226") ;
$db = mysql_select_db("cm226");

$flight[0] = $_POST['FNo'];
$flight[1] = $_POST['dest'];
$flight[2] = $_POST['depart'];
$flight[3] = $_POST['cap'];
$flight[4] = $_POST['econmySeats'];
$flight[5] = $_POST['busSeats'];
$flight[6] = $_POST['groupSeats'];
$flight[7] = $_POST['price'];


// THIS IS FLIMBSY AS FUCK!!!! NEED TO CHANGE BEFORE WE FINISH PROJECT IDEALY
// this crap got complicated so i should write psudo
// ok
// basic query to update the flight information
$insert = "UPDATE flight SET destination='$flight[1]', departure='$flight[2]', capacity=$flight[3], econemyseats=$flight[4], businessseats=$flight[5], groupseats=$flight[6], price=$flight[7] WHERE flightNo = $flight[0] ";

// next we have to update the avalible seats in the schedule table because the total seatch have changed
// but we still need to keep the number of bookings that have already been made for those seats sooo..

// get the old ammount of TOTAL seats
$oldEconSeats = "SELECT econemyseats FROM flight WHERE flightNo = $flight[0]";
$econseats =mysql_query($oldEconSeats);
$resultecon = mysql_fetch_array($econseats);

$oldBusSeats = "SELECT businessseats FROM flight WHERE flightNo = $flight[0]";
$busseats =mysql_query($oldBusSeats);
$resultbus = mysql_fetch_array($busseats);

$oldGroupSeats = "SELECT groupseats FROM flight WHERE flightNo = $flight[0]";
$groupseats =mysql_query($oldGroupSeats);
$resultgroup = mysql_fetch_array($groupseats);

// get the difference between the new and the old TOTAL seats
$differenceEcon = $flight[4] -$resultecon['econemyseats'];
$differenceBus = $flight[5] -$resultbus['businessseats'];
$differenceGroup = $flight[6] -$resultgroup['groupseats'];


// get the number of avalable seats for the flight that we are editing
$curentAvalableEcon = "SELECT ScheduleID, availableEconomySeats FROM flightSchedule WHERE FlightNo = $flight[0]";
$avalavleEconSeats =mysql_query($curentAvalableEcon);

$curentAvalableBus = "SELECT ScheduleID, availableBusinessSeats FROM flightSchedule WHERE FlightNo = $flight[0]";
$avalavleBusSeats =mysql_query($curentAvalableBus);

$curentAvalableGroup = "SELECT ScheduleID, availableGroupSeats FROM flightSchedule WHERE FlightNo = $flight[0]";
$avalavleGroupSeats =mysql_query($curentAvalableGroup);


// for all the flight schedules that have this flight in them
for($i=0; $i<mysql_num_rows($avalavleEconSeats); $i++)
{
	$resultAvalEcon = mysql_fetch_array($avalavleEconSeats);
	$resultAvalBus = mysql_fetch_array($avalavleBusSeats);
	$resultAvalGroup = mysql_fetch_array($avalavleGroupSeats);
	
	// the new avalability is the current avalability + the difference in TOTAL seats(calculated above)
	$newEcon = $resultAvalEcon['availableEconomySeats'] + $differenceEcon;
	$newBus = $resultAvalBus['availableBusinessSeats'] + $differenceBus;
	$newGroup = $resultAvalGroup['availableGroupSeats'] + $differenceGroup;
	
	$scheduleID = $resultAvalEcon['ScheduleID']; // get the current schedule ID (used to identify the schedule we are currently editing
	
	
	// update the schedule with the new seat avalability
	$insertEcon = "UPDATE flightSchedule SET availableEconomySeats = $newEcon WHERE ScheduleID = $scheduleID";
	mysql_query($insertEcon);
	
	$insertBus = "UPDATE flightSchedule SET availableBusinessSeats = $newBus WHERE ScheduleID = $scheduleID";
	mysql_query($insertBus);
	
	$insertGroup = "UPDATE flightSchedule SET availableGroupSeats = $newGroup WHERE ScheduleID = $scheduleID";
	mysql_query($insertGroup);
	//update total seats avalable
	$updateTotals = "UPDATE flightSchedule SET availableSeats= availableEconomySeats+availableBusinessSeats+availableGroupSeats WHERE ScheduleID = $scheduleID";
	mysql_query($updateTotals);
}
//get old
//difference = new - old
//schedule avalable = shcedule avalable + difference

include("header.html");


if (!mysql_query($insert)){
	echo '<table border="1" id="error">';
	echo'<th colspan="2">MySql database error</th>';
	echo '<tr bgcolor="#FF6633" ><td>Database Element</td><td>Error reason</td></tr>';
	echo'<tr><td>';
	echo'cannot edit flight:';
		echo '<table id="displayInfo" border="1">';
		echo '<tr><td>flightNo:</td><td>'.$flight[0].'</td></tr>';
		echo '<tr><td>destination:</td><td>'.$flight[1].'</td></tr>';
		echo '<tr><td>departure:</td><td>'.$flight[2].'</td></tr>';
		echo '<tr><td>capacity:</td><td>'.$flight[3].'</td></tr>';
		echo '<tr><td>ecconemy seats:</td><td>'.$flight[4].'</td></tr>';
		echo '<tr><td>business seats:</td><td>'.$flight[5].'</td></tr>';
		echo '<tr><td>group seats:</td><td>'.$flight[6].'</td></tr>';
		echo '<tr><td>price:</td><td>'.$flight[7].'</td></tr>';
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
		echo '<tr><td>flightNo:</td><td>'.$flight[0].'</td></tr>';
		echo '<tr><td>destination:</td><td>'.$flight[1].'</td></tr>';
		echo '<tr><td>departure:</td><td>'.$flight[2].'</td></tr>';
		echo '<tr><td>capacity:</td><td>'.$flight[3].'</td></tr>';
		echo '<tr><td>ecconemy seats:</td><td>'.$flight[4].'</td></tr>';
		echo '<tr><td>business seats:</td><td>'.$flight[5].'</td></tr>';
		echo '<tr><td>group seats:</td><td>'.$flight[6].'</td></tr>';
		echo '<tr><td>price:</td><td>'.$flight[7].'</td></tr>';
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


