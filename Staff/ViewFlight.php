
<?php
require("log.php");



$conn = mysql_pconnect ("anubis","cm226", "cm226") ;
$db = mysql_select_db("cm226");
$flightNo = $_GET['FNo'];


$query = "SELECT * FROM flight WHERE flightNo = $flightNo";


$result = mysql_query($query);

  $data = mysql_fetch_array($result);
include("header.html");
?>
<div id="flightContainer">
<table border="1" align=left id="displayInfo" width="50%">

	<tr><th colspan="2"><h4> Flight Details</h4></th></tr>
	<tr><td>FlightNo:</td><td> <?php echo $data['flightNo'];?></td></tr>
	<tr><td>destination: </td><td><?php echo $data['destination'];?></td></tr>
	<tr><td>departure: </td><td><?php echo $data['departure'];?></td></tr>
	<tr><td>capacity: </td><td><?php echo $data['capacity'];?></td></tr>
	<tr><td>Econemy Seats:</td><td> <?php echo $data['econemyseats'];?></td></tr>
	<tr><td>Business Seats: </td><td><?php echo $data['businessseats'];?></td></tr>
	<tr><td>Group Seats: </td><td><?php echo $data['groupseats'];?></td></tr>
	<tr><td>Costing Structure </td><td><?php echo $data['price'];?></td></tr>
	<tr><th colspan="2">
	<form>
		<input type="button" value="Edit" name="Edit_flight" onClick="window.location='flightinfoEdit.php?flightNo=<?php echo $data['flightNo'];?>'"> 
	</form></th></tr>
</table>

</div>
<?php $FNo = $data['flightNo'];?>


<div id="scheduleContainer">

<h3> flight number: <?php echo $flightNo?> flight schedules </h3>

<table border="1" align=left id="displayInfo">
<tr>
<th><h4>ScheduleID</h4></th>
<th><h4>FlightNo</h4></th>
<th><h4>Departure Date</h4></th>
<th><h4>Departure Time</h4></th>
<th><h4>Arrival time</h4></th>
<th><h4>Available Economy Seats</h4></th>
<th><h4>Available Business Seats</h4></th>
<th><h4>Available Group Seats</h4></th>
<th><h4>Available Seats</h4></th>
</tr>

<?php 
$schedules = "SELECT * FROM flightSchedule WHERE flightNo = $flightNo";
$schedules_result = mysql_query($schedules);

for ($i =0;  $i<mysql_num_rows($schedules_result); $i++)
{
$schedule_data = mysql_fetch_array($schedules_result);
$ScheduleID = $schedule_data['ScheduleID'];
$FlightNo = $schedule_data['FlightNo'];

echo '<tr>';
echo '<td>';
echo "<a href=\"scheduleInfoEdit.php?ScheduleID=".$ScheduleID."\">$ScheduleID</a>";
echo '</td>';

echo '<td>';
echo "<a href=\"ViewFlight.php?FNo=".$FlightNo."\">$FlightNo</a>";  
echo '</td>';

echo '<td>';
echo $schedule_data['departuredate'];
echo '</td>';

echo '<td>';
echo $schedule_data['departureTime'];
echo '</td>';

echo '<td>';
echo $schedule_data['arrivalTime'];
echo '</td>';

echo '<td>';
echo $schedule_data['availableEconomySeats'];
echo '</td>';

echo '<td>';
echo $schedule_data['availableBusinessSeats'];
echo '</td>';

echo '<td>';
echo $schedule_data['availableGroupSeats'];
echo '</td>';

echo '<td>';
echo $schedule_data['availableSeats'];
echo '</td>';

echo '</tr>';

}?>
</table>
</div>
</div>
<?php include("footer.html"); ?>


