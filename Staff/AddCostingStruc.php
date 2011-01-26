<?php
require("log.php");
include("header.html");

?>

	<form name="cost_info" method="post" action="processCosting.php?action=PCost" >
		<table border="1" id="inputData">
			<tr><th colspan="2"><h4>Enter Pricing Information</h4></th></tr>
			<tr><td>Price ID: </td><td><input type="text" name="ID"></input></td></tr>
			<tr><td>Costing Structure Name: </td><td><input type="text" name="name" ></input></td></tr>
			<tr><td>Economy Price: </td><td><input type="text" name="econ" ></input></td></tr>
			<tr><td>Business Price: </td><td><input type="text" name="buss"></input></td></tr>
			<tr><td>Group Price: </td><td><input type="text" name="grou"  ></input></td></tr>
			<tr><th colspan="2"><input type="submit" /></th></tr>
		</table>
	</form>

	
</div>
<?php include("footer.html");?>
