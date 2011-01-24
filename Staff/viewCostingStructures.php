<?php
require("log.php");

	$conn = mysql_pconnect ("anubis","cm226", "cm226") ;
	$db = mysql_select_db("cm226");

	$q_user = mysql_query("SELECT * FROM prices");

	

	

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<link rel="stylesheet" type="text/css" href="ta.css" />

<script langauge="javascript">
function post_value() {

for (var i=0; i < document.getStruc.ID.length; i++)
   {
   if (document.getStruc.ID[i].checked)
      {
      var rad_val = document.getStruc.ID[i].value;
      }
   }
   opener.document.Flight_info.price.value = rad_val;
   self.close();
}

</script>
<meta http-equiv="Content-Type" content= "text/html; charset=utf-8" />

<h3> costing structures: </h4>
</head>

<body>

<table border="1" align=left id="inputData">
<form name='getStruc'  method=post action=''>
<tr>
<th>Select</th>
<th>PriceID</th>
<th>Structure Name</th>
<th>Econemy price</th>
<th>Business price</th>
<th>Group price</th>
</tr>
<?php
	for($i=0; $i<mysql_num_rows($q_user); $i++)
	{
		$data = mysql_fetch_array($q_user);
		$pirceID = $data['priceID'];
		
		echo '<tr>';
		echo '<td><input type="radio" name="ID" value="'.$pirceID.'" /></td>';
		echo '<td>'.$data['priceID'].'</td>';
		echo '<td>'.$data['priceName'].'</td>';
		echo '<td>'.$data['businessclass'].'</td>';
		echo '<td>'.$data['economyclass'].'</td>';
		echo '<td>'.$data['groupclass'].'</td>';
		echo '</tr>';
	
	}
?>
<tr colspan="2"><td colspan="6">
<Input type = "Submit" Name = "Submit1" VALUE = "Select" onclick="post_value();"/>
</td></tr>
</form>
</table>


</body>
</html>
