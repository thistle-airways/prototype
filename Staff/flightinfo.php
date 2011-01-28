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
		<tr><td>Flight Number:</td><td> <input type="text" name="FNo"/></td></tr>
		<tr><td>Flight Destination: </td><td><select>
									  <option></option>
									  <option>NCL</option>
									  <option>MAN</option>
									  <option>LBA</option>
									  <option>LPL</option>
									  <option>EMA</option>
									  <option>BHX</option>
									  <option>LTN</option>
									  <option>STN</option>
									  <option>LHR</option>
									  <option>LGW</option>
									  <option>LCY</option>
									  <option>BRS</option>
									  <option>CWL</option>
									  <option>ABZ</option>
									  <option>...</option>
									</select></td></tr>
		<tr><td>Flight Departure: </td><td><select>
									  <option></option>
									  <option>NCL</option>
									  <option>MAN</option>
									  <option>LBA</option>
									  <option>LPL</option>
									  <option>EMA</option>
									  <option>BHX</option>
									  <option>LTN</option>
									  <option>STN</option>
									  <option>LHR</option>
									  <option>LGW</option>
									  <option>LCY</option>
									  <option>BRS</option>
									  <option>CWL</option>
									  <option>ABZ</option>
									  <option>...</option>
									</select></td></tr>
		<tr><td>Flight Capacity: </td><td><input type="text" name="cap"  /></td></tr>
		<tr><td>No of Economy Seats: </td><td><input type="text" name="econmySeats" /></td></tr>
		<tr><td>No of Business Seats: </td><td><input type="text" name="busSeats" /></td></tr>
		<tr><td>No of Group Seats:</td><td> <input type="text" name="groupSeats" /></td></tr>
		<tr><td>Costing Structure: </td><td><select>
									  <option></option>
									  <option>EDI-NCL</option>
									  <option>MAN-EDI</option>
									  <option>LBA-STN</option>
									  
									</select><br/>
		<FORM> 
			<INPUT type="button" value="View avalable structures" onClick="window.open('viewCostingStructures.php','costing structures','width=600,height=800')"> 
		</FORM></td></tr>
		
		<tr><td>Temp Flight: </td><td><input type="checkbox" name="price" />End Date:<select>
									  <option></option>
									  <option>1</option>
									  <option>2</option>
									  <option>3</option>
									  <option>4</option>
									  <option>5</option>
									  <option>6</option>
									  <option>7</option>
									  <option>8</option>
									  <option>9</option>
									  <option>10</option>
									  <option>11</option>
									  <option>12</option>
									  <option>13</option>
									  <option>14</option>
									  <option>...</option>
									</select>
									<select>
									  <option></option>
									  <option>1</option>
									  <option>2</option>
									  <option>3</option>
									  <option>4</option>
									  <option>5</option>
									  <option>6</option>
									  <option>7</option>
									  <option>8</option>
									  <option>9</option>
									  <option>10</option>
									  <option>11</option>
									  <option>12</option>
									</select>
									<select>
									  <option/>
									  <option>2011</option>

									</select></td></tr>
		<tr><th colspan="2"><input type="submit" /></th></tr>
	</table>
	
</form>
<br/><br/>
	
</div>
<?php include("footer.html")?>
