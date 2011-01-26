<?php
require("log.php");

$priceID =  $_GET[priceID];


$conn = mysql_pconnect ("anubis","cm226", "cm226") ;
$db = mysql_select_db("cm226");

$q_user = mysql_query( "SELECT * FROM prices WHERE priceID = $priceID");
$data = mysql_fetch_array($q_user);

include("header.html");

?>
<?php //echo $data['priceName'];//SPACES DONT APPEAR IN TEXT BOXES USE JAVASCRIPT TO MAKE SURE NO SPACES IN PRICE NAME OR ANYTHING ELSE WHEN FIRST ENTERED?>

	<form name="cost_info" method="post" action="processCostingEdit.php?action=PCost" >
		<table border="1" id="inputData">
			<tr><th colspan="2"><h4>Enter Pricing Data</h4></th></tr>
			<tr><td>Price ID: </td><td><input type="text" name="ID" value=<?php echo $data['priceID'];?>></input></td></tr>
			<tr><td>Costing Structure Name:</td><td> <input type="text" name="name" value=<?php echo $data['priceName'];?>></input></td></tr>
			<tr><td>Economy Price: </td><td><input type="text" name="econ" value=<?php echo $data['businessclass'];?>></input></td></tr>
			<tr><td>Business Price: </td><td><input type="text" name="buss"value=<?php echo $data['economyclass'];?>></input></td></tr>
			<tr><td>Group Price: </td><td><input type="text" name="grou"  value=<?php echo $data['groupclass'];?>></input></td></tr>
			<tr><th colspan ="2"><input type="submit" /></th></tr>
		</table>
</form>

	
<?php include("footer.html"); ?>
