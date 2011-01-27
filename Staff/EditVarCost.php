<?php
require("log.php");
include("header.html");
?>
<table id="inputData" border=1>
	<tr><th colspan=2>Expense Information</th></tr>
	<tr><td>Expense Name:</td><td><input type="text" name="dest" value="temp flight no 811"/></td></tr>
	<tr><td>Expense Cost:</td><td><input type="text" name="dest" value="1000"/></td></tr>
	<tr><td>Length Of Cost In Weeks:</td><td><input type="text" name="dest" value="4"/></td></tr>
	<tr><th colspan=2><input type="submit" value="submit"/></th></tr>
</table>

<?php
include("footer.html");
?>
