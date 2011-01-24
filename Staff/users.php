<?php
require("log.php");
include("header.html");

$conn = mysql_pconnect ("anubis","cm226", "cm226") ;
$db = mysql_select_db("cm226");

$q_user = mysql_query("SELECT * FROM users");

?>


<table border="1" id="displayInfo">
<tr>
<th>Username</th>
<th>Password</th>
<th>Display Name</th>
<th>Access Level</th>
<th>Delete</th>
</tr>

<?php 
for ($i =0;  $i<mysql_num_rows($q_user); $i++)
{
$data = mysql_fetch_array($q_user);

echo '<tr>';
echo '<td>'.$data['username'].'</td>';
echo '<td>'.$data['password'].'</td>';
echo '<td>'.$data['displayName'].'</td>';
echo '<td>'.$data['accessLevel'].'</td>';
echo '<td><a href="page.htm"><img src="icons/delete.gif" /></a></td>';

echo '</tr>';
}
?>

</table>

<a href="page.htm"><img src="icons/add.gif" /></a>

<?php include("footer.html"); ?>
