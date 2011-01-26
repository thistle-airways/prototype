<?
session_name("MyLogin");
session_start();
session_destroy();

if($_GET['login'] == "failed") {
print $_GET['cause'];
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title>Thistle Airways</title>
<meta http-equiv="Content-Type" content= "text/html; charset=utf-8" />

<link rel="stylesheet" type="text/css" href="ta.css" />

</head>

<body>
<div id="header">
<h2> Thistle Airways booking and Management System Portal</h2>
</div>


<div id="content">

<div id="logindiv">
		<form name="login_form" method="post" action="log.php?action=login" >
			Username: <input type="text" name="uname" /><br></br>
			Password: <input type="text" name="pw" /><br></br>
			<input type="submit" />
		</form>
 </div>
</div>

</body>
</html>
