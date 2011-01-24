
<?php
require("log.php");



$conn = mysql_pconnect ("anubis","cm226", "cm226") ;
$db = mysql_select_db("cm226");

$criteria[0] = $_POST['Dest'];
$criteria[1] = $_POST['Dep'];
$criteria[2] = $_POST['DepDat'];
$criteria[3] = $_POST['DepTim'];

$query = "SELECT * FROM flight, flightSchedule WHERE flight.flightNo = flightSchedule.FlightNo";

if(!empty($criteria[0]))
{
	$query = $query." AND destination ='$criteria[0]'";
}
if(!empty($criteria[1]))
{
	$query = $query." AND departure ='$criteria[1]'";
}
if(!empty($criteria[2]))
{
	$query = $query." AND departuredate ='$criteria[2]'";
}
if(!empty($criteria[3]))
{
	$query = $query." AND departureTime ='$criteria[3]'";
}

//$query = "SELECT * FROM flight, flightSchedule WHERE flight.flightNo = flightSchedule.FlightNo AND destination =  '$criteria[0]' AND departure = '$criteria[1]' AND  departuredate = '$criteria[2]' AND departureTime = '$criteria[3]'";

$result = mysql_query($query);

include("header.html");

?>


<table border="1" align=left id="displayInfo">
<tr>
<th><h4>ScheduleID</h4></th>
<th><h4>FlightNo</h4></th>
<th><h4>Departure</h4></th>
<th><h4>Destination</h4></th>
<th><h4>Departure Date</h4></th>
<th><h4>Departure Time</h4></th>
<th><h4>Arrival time</h4></th>
<th><h4>Available Economy Seats</h4></th>
<th><h4>Available Business Seats</h4></th>
<th><h4>Available Group Seats</h4></th>
<th><h4>Available Seats</h4></th>
</tr>

<?php 



for ($i =0;  $i<mysql_num_rows($result); $i++)
{
  $data = mysql_fetch_array($result);
 
  $ScheduleID = $data['ScheduleID'];
  $FlightNo = $data['flightNo'];

echo '<tr>';
echo '<td>';
echo "<a href=\"scheduleInfoEdit.php?ScheduleID=".$ScheduleID."\">$ScheduleID</a>";
echo '</td>';

echo '<td>';
echo "<a href=\"ViewFlight.php?FNo=".$FlightNo."\">$FlightNo</a>";  
echo '</td>';

echo '<td>';
echo $data['departure'];
echo '</td>';

echo '<td>';
echo $data['destination'];
echo '</td>';

echo '<td>';
echo $data['departuredate'];
echo '</td>';

echo '<td>';
echo $data['departureTime'];
echo '</td>';

echo '<td>';
echo $data['arrivalTime'];
echo '</td>';

echo '<td>';
echo $data['availableEconomySeats'];
echo '</td>';

echo '<td>';
echo $data['availableBusinessSeats'];
echo '</td>';

echo '<td>';
echo $data['availableGroupSeats'];
echo '</td>';

echo '<td>';
echo $data['availableSeats'];
echo '</td>';

echo '</tr>';

}?>
</table>



</div>
<div id="logout">
		<h4>logout button</h4>
	</div>
</body>
</html>


