<?php
require("log.php");

$ScheduleID = $_GET[ScheduleID];


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




	<form name="Flight_info" method="post" action="processSchedule.php?action=PSchedule" >
		<table border="1" id="inputData">
			<th colspan="2">Enter Schedule Information</th>
			<tr><td>ScheduleID: </td><td> <input type="text" name="schID" ></input></td></tr>
			<tr><td>FlightNo:  </td><td><input type="text" name="FlightNo"></input></td></tr>
			<tr><td>Departure Date:  </td><td><?php datePicker();?></td></tr>
			<tr><td>Departure Time:  </td><td><?php timePicker();?></input></td></tr>
			<tr><td>Arrival Time:  </td><td><?php timePicker();?></input></td></tr>
			<tr><th colspan="2"><input type="submit" /></tr></tr>
		</table>
</form>

	
<?php include("footer.html"); ?>
