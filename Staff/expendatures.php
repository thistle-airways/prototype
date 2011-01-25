<?php 
require("log.php");
include("header.html");

?>

<table id="displayInfo" border=1>
	<tr><th colspan=3> Comapny Expenditures</th></tr>
	<tr><th colspan=3> Fixed costs <a href="addExpence.php"><img src="icons/pluss.png" /></a></th></tr>
	<tr><th colspan=2>cost name</th><th>cost</th></tr>
	<tr><td onClick="select(1,4);" colspan=2>staff saliery</td><td>100000</td></tr>
	<tr><td colspan=2>plane maintanece</td><td>100000</td></tr>
	<tr><td colspan=2>property rent</td><td>100000</td></tr>
	<tr><td colspan=2>gas/electric</td><td>100000</td></tr>
	<tr><td colspan=2>plane fule</td><td>100000</td></tr>
	<tr><th colspan=3>variable costs<a href="addVarCost.php"><img src="icons/pluss.png" /></th></tr>
	<tr><th>cost name</th><th>cost</th><th>lenth of time applied (weeks)</th></tr>
	<tr><td onClick="select(1,5);" >temp flight no:811</td><td>5000</td><td>4</td></tr>
	<tr><td>temp staff for bussy period</td><td>3000</td><td>4</td></tr>
	
	

</table>


<?php
include("footer.html");
?>
