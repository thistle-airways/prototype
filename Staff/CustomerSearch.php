
<?php
require("log.php");



$conn = mysql_pconnect ("anubis","cm226", "cm226") ;
$db = mysql_select_db("cm226");

$criteria[0] = $_POST['Fname'];
$criteria[1] = $_POST['Lname'];

$query = "SELECT * FROM customer, flightSchedule, Bookings WHERE customer.customerID = Bookings.customerID AND Bookings.FlightScheduleID = flightSchedule.ScheduleID";

if(!empty($criteria[0]))
{
	$query = $query." AND customer.Firstname ='$criteria[0]'";
}
if(!empty($criteria[1]))
{
	$query = $query." AND customer.LastName ='$criteria[1]'";
}

$result = mysql_query($query);


include("header.html");
?>



<table border="1" align=left id="displayInfo">
<tr>
<th><h4>customerID</h4></th>
<th><h4>Firstname</h4></th>
<th><h4>LastName</h4></th>
<th><h4>Date of Birth</h4></th>
<th><h4>Sex</h4></th>
<th><h4>Email Address</h4></th>
<th><h4>ScheduleID</h4></th>
<th><h4>FlightNo</h4></th>
<th><h4>Departure Date</h4></th>
<th><h4>Daparture Time</h4></th>
<th><h4>Arrivale Time</h4></th>
</tr>

<?php 



for ($i =0;  $i<mysql_num_rows($result); $i++)
{
  $data = mysql_fetch_array($result);
 
  $ScheduleID = $data['ScheduleID'];
  $FlightNo = $data['FlightNo'];
  $custID = $data['customerID'];
echo '<tr>';
 echo '<td>';
echo $custID;
echo '</td>';

echo '<td>';
echo $data['Firstname'];
echo '</td>';

echo '<td>';
echo $data['LastName'];
echo '</td>';

echo '<td>';
echo $data['DOB'];
echo '</td>';

echo '<td>';
echo $data['Sex'];
echo '</td>';

echo '<td>';
echo $data['EmailAddress'];
echo '</td>';

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



echo '</tr>';

}?>
</table>



</div>
<div id="logout">
		<h4>logout button</h4>
	</div>
</body>
</html>


