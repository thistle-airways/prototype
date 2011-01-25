<?php
require("log.php");
include("header.html");
?>


	<form name="userData" method="post" action="" >
		<table border="1" id="inputData">
			<th colspan="2">Enter UserData</th>
			<tr><td>UserName: </td><td> <input type="text" name="userID" ></input></td></tr>
			<tr><td>PassWord:  </td><td><input type="text" name="Password"></input></td></tr>
			<tr><td>Access Level:  </td><td><input type="text" name="depdate"  ></input></td></tr>
			<tr><th colspan="2"><input type="submit" value="Add user"/></tr></tr>
		</table>
</form>

<?php
include("footer.html");
?>