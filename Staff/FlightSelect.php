<?php
require("log.php");
include("header.html");
?>
<?php
$conn = mysql_pconnect ("anubis","cm226", "cm226") ;
$db = mysql_select_db("cm226");

$q_user = mysql_query("SELECT * FROM flight");



?>
<div id="refine">

	<form name="Flight_info" method="post" action="" align=right>
						<table border="0" id="ResultRefine">
								
								<tr><th colspan="2">Refine Flights</th></tr>
								<tr><td>Destination:</td> <td><?php dropdown($airports);?></td></tr>
								<tr><td>Departure:</td> <td><?php dropdown($airports);?></td></tr>
								<tr><td>Departure Date:</td> <td><?php datePicker();?></input></td></tr>
								<tr><td>Departure Time:</td> <td><?php datePicker();?></input></td></tr>
	
							<tr>
								<td colspan="2"><input type="submit" value="Search" /></td>
							</tr>
						</table>
	</form>


</div>

<div id="disInfo">

<table border="1" align=left id="displayInfo">
<tr class="d0">
<th><h4>FlightNo</h4></th>
<th><h4>Destination</h4></th>
<th><h4>Departure</h4></th>
<th><h4>Capacity</h4></th>
<th><h4>Economy Seats</h4></th>
<th><h4>Business Seats</h4></th>
<th><h4>Group Seats</h4></th>
<th><h4>Costing Structure</h4></th>
<th><h4>Delete</h4></th>
</tr>

<?php 
for ($i =0;  $i<mysql_num_rows($q_user); $i++)
{
$data = mysql_fetch_array($q_user);
$flightNo = $data['flightNo'];
echo '<tr>';
echo '<td onClick="select('.$flightNo.',1);">';
echo "<a href=\"flightinfoEdit.php?flightNo=".$flightNo."\">$flightNo</a>";
echo '</td>';

echo '<td onClick="select('.$flightNo.',1);">';
echo $data['destination'];
echo '</td>';

echo '<td onClick="select('.$flightNo.',1);">';
echo $data['departure'];
echo '</td>';

echo '<td onClick="select('.$flightNo.',1);">';
echo $data['capacity'];
echo '</td>';

echo '<td onClick="select('.$flightNo.',1);">';
echo $data['econemyseats'];
echo '</td>';

echo '<td onClick="select('.$flightNo.',1);">';
echo $data['businessseats'];
echo '</td>';

echo '<td onClick="select('.$flightNo.',1);">';
echo $data['groupseats'];
echo '</td>';

echo '<td onClick="select('.$flightNo.',1);">';
echo $data['price'];
echo '</td>';

echo '<td>';
echo '<a href="page.htm"><img src="icons/delete.gif" /></a>';
echo '</td>';

echo '</tr>';

}?>
</table>
</div>




	
<?php include("footer.html"); ?>
