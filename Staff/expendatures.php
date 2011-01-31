<?php 
require("log.php");
include("header.html");

?>

<table id="displayInfo" border=1>
	<tr><th colspan=3> Comapny Expenditures</th></tr>
	<tr><th colspan=3> Fixed Costs <a href="addExpence.php"><img src="icons/pluss.png" /></a></th></tr>
	<tr><th colspan=2>Cost Name</th><th>Cost</th></tr>
	<tr><td onClick="select(1,4);" colspan=2>Staff Salary</td><td>100000</td></tr>
	<tr><td colspan=2>Plane Maintenance</td><td>100000</td></tr>
	<tr><td colspan=2>Property Rent</td><td>100000</td></tr>
	<tr><td colspan=2>Gas/Electric</td><td>100000</td></tr>
	<tr><td colspan=2>Plane Fuel</td><td>100000</td></tr>
	<tr><th colspan=3>Variable Costs<a href="addVarCost.php"><img src="icons/pluss.png" /></th></tr>
	<tr><th>Cost Name</th><th>Cost</th><th>Length of Time Applied (weeks)</th></tr>
	<tr><td onClick="select(1,5);" >temp flight no:811</td><td>5000</td><td>4</td></tr>
	<tr><td>Temp Staff For Busy Periods</td><td>3000</td><td>4</td></tr>
	
	

</table>


<?php
include("footer.html");
?>
