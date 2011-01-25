
<?php
require("log.php");



$conn = mysql_pconnect ("anubis","cm226", "cm226") ;
$db = mysql_select_db("cm226");
$customerID = $_GET['custID'];


$query = "SELECT * FROM customer, flightSchedule, Bookings WHERE customer.customerID = $customerID AND Bookings.customerID = $customerID AND Bookings.FlightScheduleID = flightSchedule.ScheduleID" ;


$result = mysql_query($query);

  $data = mysql_fetch_array($result);
include("header.html");
?>
<table id="displayInfo" border=1>
<tr><th colspan=2>Customer Details</th></tr>
<tr><td>customerID:</td> <td><?php echo $data['customerID'];?></td></tr>
<tr><td>First Name: </td> <td><?php echo $data['Firstname'];?></td></tr>
<tr><td>Last name: </td> <td><?php echo $data['LastName'];?></td></tr>
<tr><td>Date Of Birth: </td> <td><?php echo $data['DOB'];?></td></tr>
<tr><td>Sex: </td> <td><?php echo $data['Sex'];?></td></tr>
<tr><td>EmailAddress: </td> <td><?php echo $data['EmailAddress'];?></td></tr>
<tr><th colspan=2>
	<form>
		<input type="button" value="Edit" name="Edit_customer" onClick="window.location='custInfoEdit.php?custID=<?php echo $customerID;?>'"> 
	</form>
</th></tr>

</table>
<br></br>


<h3> Customer Bookings </h3>

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

for ($i =0;  $i<mysql_num_rows($result); $i++)
{

$ScheduleID = $data['ScheduleID'];
$FlightNo = $data['FlightNo'];

echo '<tr>';
echo '<td>';
echo "<a href=\"scheduleInfoEdit.php?ScheduleID=".$ScheduleID."\">$ScheduleID</a>";
echo '</td>';

echo '<td>';
echo "<a href=\"ViewFlight.php?FNo=".$FlightNo."\">$FlightNo</a>";  
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
$data = mysql_fetch_array($result);
}?>
</table>



</div>
<div id="logout">
		<h4>logout button</h4>
	</div>
</body>
</html>


