<?php
require("log.php");
include("header.html");
?>

<?php
$conn = mysql_pconnect ("anubis","cm226", "cm226") ;
$db = mysql_select_db("cm226");

$q_user = mysql_query("SELECT * FROM prices");



?>
<div id="refine">

	<form name="Flight_info" method="post" action="" align=right>
						<table border="0" id="ResultRefine">
								
								<tr><th colspan="2">Refine Structures</th></tr>
								<tr><td>PriceID:</td> <td><input type="text" name="Dest" ></input></td></tr>
								<tr><td>PriceName:</td> <td><?php datePicker();?></td></tr>
	
							<tr>
								<td colspan="2"><input type="submit" value="Search" /></td>
							</tr>
						</table>
	</form>


</div>

<div id="disInfo">
<table border="1" align=left id="displayInfo">
<tr>
<th><h4>PriceID</h4></th>
<th><h4>Price Name</h4></th>
<th><h4>Business Class</h4></th>
<th><h4>Economy Class</h4></th>
<th><h4>Group Class</h4></th>
<th><h4>Apply Discount</h4></th>
<th><h4>Delete</h4></th>
</tr>

<?php 
for ($i =0;  $i<mysql_num_rows($q_user); $i++)
{
$data = mysql_fetch_array($q_user);
$priceID = $data['priceID'];
echo '<tr>';
echo '<td>';
echo "<a href=\"EditCostingStrucInfo.php?priceID=".$priceID."\">$priceID</a>";
echo '</td>';


echo '<td onClick="select('.$priceID.',3);"">';
echo $data['priceName'];
echo '</td>';

echo '<td onClick="select('.$priceID.',3);"">';
echo $data['businessclass'];
echo '</td>';

echo '<td onClick="select('.$priceID.',3);"">';
echo $data['economyclass'];
echo '</td>';

echo '<td onClick="select('.$priceID.',3);"">';
echo $data['groupclass'];
echo '</td>';

echo '<td >';
echo '<img onClick="window.open(\'discounts.php\',\'costing structures\',\'width=600,height=450\')" src="icons/discount.gif" />';
echo '</td>';

echo '<td>';
echo '<a href="page.htm"><img src="icons/delete.gif" /></a>';
echo '</td>';

echo '</tr>';

}?>
</table>

</div>

<?php include("footer.html"); ?>
