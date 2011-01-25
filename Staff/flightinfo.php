<?php
require("log.php");

$FlightId = $_GET['FlightID'];


if (!is_null($FlightId))
{
	$conn = mysql_pconnect ("anubis","cm226", "cm226") ;
	$db = mysql_select_db("cm226");

	$q_user = mysql_query("SELECT * FROM flightSchedule WHERE FlightID = $FlightId");

	if(mysql_num_rows($q_user) != 1)
	{
		echo 'something really weard just happened';
	}
	$data = mysql_fetch_array($q_user);
	
}
else
	$data['FlightID'] = "";

include("header.html");
?>


<form name="Flight_info" method="post" action="processFlight.php?action=PFlight">
	<table border="1" id="inputData">
		<tr ><th colspan="2"><h4>Enter Flight Information</h4></th></tr>
		<tr><td>flight Number:</td><td> <input type="text" name="FNo"/></td></tr>
		<tr><td>Flight Destination: </td><td><input type="text" name="dest" /></td></tr>
		<tr><td>Flight Departure: </td><td><input type="text" name="depart" /></td></tr>
		<tr><td>Flight Capacity: </td><td><input type="text" name="cap"  /></td></tr>
		<tr><td>No of Economy seats: </td><td><input type="text" name="econmySeats" /></td></tr>
		<tr><td>No of Business seats: </td><td><input type="text" name="busSeats" /></td></tr>
		<tr><td>No of Group seats:</td><td> <input type="text" name="groupSeats" /></td></tr>
		<tr><td>Costing Structure: </td><td><input type="text" name="price" /><br/>
		<FORM> 
			<INPUT type="button" value="View avalable structures" onClick="window.open('viewCostingStructures.php','costing structures','width=600,height=800')"> 
		</FORM></td></tr>
		
		<tr><td>Temp Flight: </td><td><input type="checkbox" name="price" />weeks:<input value="grayed out untill <- clicked" type="text" name="dureation" /></td></tr>
		<tr><th colspan="2"><input type="submit" /></th></tr>
	</table>
	
</form>
<br/><br/>
	
</div>
<?php include("footer.html")?>
