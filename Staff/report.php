<?php 
require("log.php");
include("header.html");

?>
<form name="report" action="" method="POST">
<table id="inputData">
	<tr><th colspan=2>Select Report Period</th></tr>
	<tr><td>Period:</td><td>
		
		<select name="period">
		<option value="Jan">Jan</option>
		<option value="Feb">Feb</option>
		<option value="Sep">Sep</option>
		<option value="Sep">...</option>
		</select>
	</td></tr>
</table>
<br/><br/>


<table id="inputData">
	<tr><th colspan=2>Select Report Content</th></tr>
	<tr><td>Costing Structures</td><td><input type="checkbox" name="costStruct" value="CS" /></td></tr>
	<tr><td>Sales Per Flight</td><td><input type="checkbox" name="costStruct" value="CS" /></td></tr>
	<tr><td>Sales Per Schedule</td><td><input type="checkbox" name="costStruct" value="CS" /></td></tr>
	<tr><td>Total Income Period</td><td><input type="checkbox" name="costStruct" value="CS" /></td></tr>
	<tr><td>Source of Business Per Flight</td><td><input type="checkbox" name="costStruct" value="CS" /></td></tr>
	<tr><td>Flight Frequency</td><td><input type="checkbox" name="costStruct" value="CS" /></td></tr>
	<tr><td>Quiet (loss) Periods</td><td><input type="checkbox" name="costStruct" value="CS" /></td></tr>
	<tr><td>Current Promotions</td><td><input type="checkbox" name="costStruct" value="CS" /></td></tr>
	<tr><td>Overbooking Per Flight Schedule</td><td><input type="checkbox" name="costStruct" value="CS" /></td></tr>
	<tr><td>Total Overbooking Per Flight</td><td><input type="checkbox" name="costStruct" value="CS" /></td></tr>
	
</table>

<br/>

<table id="inputData">
<tr><th>Generate</th></tr>
<tr><td align="center"><input type="submit" value="Generate Report"/></td></tr>
</table>

</form>
<?php
include("footer.html");
?>
