<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" >
<?php
//Determine page requested as parsed by .htaccess (if directory root, $page = 'index')	
$page = (isset($_GET['page']))? $_GET['page'] : 'index'; 
?>
<head>
    <?php 
	include 'config/definitions.inc.php';
	include 'config/settings.inc.php'; 
	include 'config/functions.inc.php';
	?>
    <script type="text/javascript">
window.onload = fltsInit;
</script>
</head>

<?php 
	include 'config/layout.inc.php';
?>
</html>
