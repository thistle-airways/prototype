<?php
require("log.php");
include("header.html");
?>
<table id="inputData" border=1>
	<tr><th colspan=2>expence information</th></tr>
	<tr><td>expence name:</td><td><input type="text" name="dest" value="temp flight no 811"/></td></tr>
	<tr><td>expence cost:</td><td><input type="text" name="dest" value="1000"/></td></tr>
	<tr><td>length of cost in weeks:</td><td><input type="text" name="dest" value="4"/></td></tr>
	<tr><th colspan=2><input type="submit" value="submit"/></th></tr>
</table>

<?php
include("footer.html");
?>
