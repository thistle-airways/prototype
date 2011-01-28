<?php
require("log.php");
include("header.html");
?>

<?php
$conn = mysql_pconnect ("anubis","cm226", "cm226") ;
$db = mysql_select_db("cm226");

$q_user = mysql_query("SELECT * FROM flightSchedule");



?>
<div id="refine">

	<form name="Flight_info" method="post" action="" align=right>
						<table border="0" id="ResultRefine">
								
								<tr><th colspan="2">Refine Schedules</th></tr>
								<tr><td>FlightNo:</td> <td><input type="text" name="Dest" ></input></td></tr>
								<tr><td>Departure Date:</td> <td><?php datePicker();?></td></tr>
								<tr><td>Departure Time:</td> <td><?php datePicker();?></td></tr>
	
							<tr>
								<td colspan="2"><input type="submit" value="Search" /></td>
							</tr>
						</table>
	</form>


</div>

<div id="disInfo">

<table border="1" align=left id="displayInfo">
<tr>
<th><h4>ScheduleID</h4></th>
<th><h4>FlightNo</h4></th>
<th><h4>Departure Date</h4></th>
<th><h4>Departure Time</h4></th>
<th><h4>Arrival time</h4></th>
<th><h4>Delete</h4></th>
</tr>

<?php 
for ($i =0;  $i<mysql_num_rows($q_user); $i++)
{
$data = mysql_fetch_array($q_user);
$ScheduleID = $data['ScheduleID'];
$FlightNo = $data['FlightNo'];
echo '<tr>';
echo '<td onClick="select('.$ScheduleID.',2);"">';
echo "<a href=\"scheduleInfoEdit.php?ScheduleID=".$ScheduleID."\">$ScheduleID</a>";
echo '</td>';

echo '<td>';
echo "<a href=\"ViewFlight.php?FNo=".$FlightNo."\">$FlightNo</a>";  
echo '</td>';

echo '<td onClick="select('.$ScheduleID.',2);"">';
echo $data['departuredate'];
echo '</td>';

echo '<td onClick="select('.$ScheduleID.',2);"">';
echo $data['departureTime'];
echo '</td>';

echo '<td onClick="select('.$ScheduleID.',2);"">';
echo $data['arrivalTime'];
echo '</td>';

echo '<td>';
echo '<a href="page.htm"><img src="icons/delete.gif" /></a>';
echo '</td>';

echo '</tr>';

}?>
</table>

</div>



	
<?php include("footer.html"); ?>
