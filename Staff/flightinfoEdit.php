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
			<tr><td>Flight Number: </td><td><?php echo $data['flightNo'];?></td></tr>
			<tr><td>Flight Destination: </td><td><select value="MAN">
									  <option></option>
									  <option>NCL</option>
									  <option selected>MAN</option>
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
									</select> </td></tr>
			<tr><td>Flight Departure: </td><td><select value="MAN">
									  <option></option>
									  <option>NCL</option>
									  <option >MAN</option>
									  <option>LBA</option>
									  <option>LPL</option>
									  <option>EMA</option>
									  <option>BHX</option>
									  <option selected>LTN</option>
									  <option>STN</option>
									  <option>LHR</option>
									  <option>LGW</option>
									  <option>LCY</option>
									  <option>BRS</option>
									  <option>CWL</option>
									  <option>ABZ</option>
									  <option>...</option>
									</select></td></tr>
			<tr><td>Flight Capacity: </td><td><input type="text" name="cap" value=<?php echo $data['capacity'];?> /></td></tr>
			<tr><td>No of Economy Seats:</td><td> <input type="text" name="econmySeats"value=<?php echo $data['econemyseats'];?> /></td></tr>
			<tr><td>No of Business Seats:</td><td> <input type="text" name="busSeats"value=<?php echo $data['businessseats'];?> /></td></tr>
			<tr><td>No of Group Seats: </td><td><input type="text" name="groupSeats" value=<?php echo $data['groupseats'];?> /></td></tr>
			<tr><td>Costing Structure: </td><td><select>
									  <option></option>
									  <option>EDI-NCL</option>
									  <option selected>MAN-EDI</option>
									  <option>LBA-STN</option>
									  
									</select><FORM> 
			<INPUT type="button" value="View avalable structures" onClick="window.open('viewCostingStructures.php','costing structures','width=600,height=800')"> 
		</FORM></td></tr>
			<tr><th colspan="2"><input type="submit" /></th></tr>
		</table>
	</form>

	
<?php include("footer.html"); ?>
