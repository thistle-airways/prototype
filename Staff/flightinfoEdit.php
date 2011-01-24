<?php
require("log.php");

$flightNo = $_GET['flightNo'];


if (!is_null($flightNo))
{
	$conn = mysql_pconnect ("anubis","cm226", "cm226") ;
	$db = mysql_select_db("cm226");
	$q_user = mysql_query("SELECT * FROM flight WHERE flightNo = $flightNo");

	if(mysql_num_rows($q_user) != 1)
	{
		echo 'something really weard just happened';
	}
	$data = mysql_fetch_array($q_user);
	
}


include("header.html");
?>





	<form name="Flight_info" method="post" action="processFlightEdit.php?action=PFlight" >
		<table border="1" id="inputData">
			<th colspan="2">Enter Flight Information</th>
			<tr><td>flight Number: </td><td><input type="text" name="FNo" value=<?php echo $data['flightNo'];?> /></td></tr>
			<tr><td>Flight Destination: </td><td><input type="text" name="dest" value=<?php echo $data['destination'];?> /></td></tr>
			<tr><td>Flight Departure: </td><td><input type="text" name="depart" value=<?php echo $data['departure'];?> /></td></tr>
			<tr><td>Flight Capacity: </td><td><input type="text" name="cap" value=<?php echo $data['capacity'];?> /></td></tr>
			<tr><td>No of Economy seats:</td><td> <input type="text" name="econmySeats"value=<?php echo $data['econemyseats'];?> /></td></tr>
			<tr><td>No of Business seats:</td><td> <input type="text" name="busSeats"value=<?php echo $data['businessseats'];?> /></td></tr>
			<tr><td>No of Group seats: </td><td><input type="text" name="groupSeats" value=<?php echo $data['groupseats'];?> /></td></tr>
			<tr><td>Costing Structure: </td><td><input type="text" name="price" value=<?php echo $data['price'];?> /></td></tr>
			<tr><th colspan="2"><input type="submit" /></th></tr>
		</table>
	</form>

	
<?php include("footer.html"); ?>
