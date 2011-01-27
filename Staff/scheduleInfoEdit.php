<?php
require("log.php");

$ScheduleID = $_GET['ScheduleID'];


if (!is_null($ScheduleID))
{
	$conn = mysql_pconnect ("anubis","cm226", "cm226") ;
	$db = mysql_select_db("cm226");

	$q_user = mysql_query("SELECT * FROM flightSchedule WHERE ScheduleID = $ScheduleID");

	if(mysql_num_rows($q_user) != 1)
	{
		echo 'something really weard just happened';
	}
	$data = mysql_fetch_array($q_user);
	
}

include("header.html");
?>



	<form name="Flight_info" method="post" action="processscheduleEdit.php?action=PSchedule" >
		<table border="1" id="inputData">
				<tr><th colspan="2"><h4>Enter Schedule Information</h4></th></tr>
				<tr><td>ScheduleID: </td><td> <input type="text" name="schID" value=<?php echo $data['ScheduleID'];?> ></input></td></tr>
				<tr><td>FlightNo: </td><td><input type="text" name="FlightNo" value=<?php echo $data['FlightNo'];?>></input></td></tr>
				<tr><td>Departure Date(yyyy:mm:dd):</td><td> <input type="text" name="depdate" value=<?php echo $data['departuredate'];?> ></input></td></tr>
				<tr><td>Departure Time(hh:mm): </td><td><input type="text" name="depTime" value=<?php echo $data['departureTime'];?> ></input></td></tr>
				<tr><td>Arrival Time(hh:mm): </td><td><input type="text" name="arrivTime"value=<?php echo $data['arrivalTime'];?> ></input></td></tr>
				<tr><th colspan="2"><input type="submit" /></th></tr>
		</table>
	</form>

	
<?php include("footer.html");?>
