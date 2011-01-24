<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" >
<?php
//Determine page requested as parsed by .htaccess (if directory root, $page = 'index')	
$page = (isset($_GET['page']))? $_GET['page'] : 'index'; 

?>
<head>
    <?php 
	include 'config/settings.inc.php'; 
	include 'config/functions.inc.php';
	?>
</head>

<body>
<?php
//Always include page title
include 'pages/header.php';
		
//Determine page being requested, and include file from /pages/
//
//General Pages
if ($page == 'index') {include 'pages/home.php'; }

//Else show page not found error
else {include 'pages/error.php'; }

//Always include footer
include 'pages/footer.php'; 
?>
</body>
</html>