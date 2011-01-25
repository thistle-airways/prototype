<?php
require("log.php");
include("header.html");
?>
<form name="Cust_info" method="post" action="" >
		<table border="1" id="inputData">
			<th colspan="2">Enter Customer Information</th>
			<tr><td>First Name: </td><td><input type="text" name="Fnam" value="Craig" /></td></tr>
			<tr><td>Last Name: </td><td><input type="text" name="Lnam" value="Matear" /></td></tr>
			<tr><td>DOB: </td><td><input type="text" name="DOB" value="1990-09-16"</td></tr>
			<tr><td>Sex: </td><td><input type="text" name="Sex" value="M" /></td></tr>
			<tr><td>Email Address:</td><td> <input type="text" name="Email"value="c.matear@gmail.com" /></td></tr>
			<tr><th colspan="2"><input type="submit" /></th></tr>
		</table>
	</form>
<?php
include("footer.html");
?>