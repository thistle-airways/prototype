
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


<p>customerID: <?php echo $data['customerID'];?></p>
<p>First Name: <?php echo $data['Firstname'];?></p>
<p>Last name: <?php echo $data['LastName'];?></p>
<p>Date Of Birth: <?php echo $data['DOB'];?></p>
<p>Sex: <?php echo $data['Sex'];?></p>
<p>EmailAddress: <?php echo $data['EmailAddress'];?></p>


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


