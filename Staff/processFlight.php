
<?php
require("log.php");


if($_GET['action'] == "PFlight") {
$conn = mysql_pconnect ("anubis","cm226", "cm226") ;
$db = mysql_select_db("cm226");
$flightNo = $_POST['FNo'];
$destination = $_POST['dest'];
$departure = $_POST['depart'];
$capacity = $_POST['cap'];
$econS = $_POST['econmySeats'];
$bussS = $_POST['busSeats'];
$gropS = $_POST['groupSeats'];
$price = $_POST['price'];


$insert = "INSERT INTO flight(flightNo, destination, departure, capacity, econemyseats, businessseats, groupseats, price) VALUES($flightNo,'$destination','$departure',$capacity,$econS,$bussS,$gropS,$price)";


}
include("header.html");


if (!mysql_query($insert)){
	echo '<table border="1" id="error">';
	echo'<th colspan="2">MySql database error</th>';
	echo '<tr bgcolor="#FF6633" ><td>Database Element</td><td>Error reason</td></tr>';
	echo'<tr><td>';
	echo'cannot insert flight:';
		echo '<table id="displayInfo" border="1">';
		echo '<tr><td>flightNo:</td><td>'.$flightNo.'</td></tr>';
		echo '<tr><td>destination:</td><td>'.$destination.'</td></tr>';
		echo '<tr><td>departure:</td><td>'.$departure.'</td></tr>';
		echo '<tr><td>capacity:</td><td>'.$capacity.'</td></tr>';
		echo '<tr><td>ecconemy seats:</td><td>'.$econS.'</td></tr>';
		echo '<tr><td>business seats:</td><td>'.$bussS.'</td></tr>';
		echo '<tr><td>group seats:</td><td>'.$gropS.'</td></tr>';
		echo '<tr><td>price:</td><td>'.$price.'</td></tr>';
		echo '</table>'; 
	echo '</td><td>';
	die('Error: ' . mysql_error());
	echo'</td></tr>';
	echo '</table>';
	}   
  else{
	  echo '<table border="1" id="sucessful">';
	echo'<th>flight sucessfully entered</th>';
	echo'<tr><td>';
		echo '<table id="displayInfo" border="1" width=100%>';
		echo '<tr><td>flightNo:</td><td>'.$flightNo.'</td></tr>';
		echo '<tr><td>destination:</td><td>'.$destination.'</td></tr>';
		echo '<tr><td>departure:</td><td>'.$departure.'</td></tr>';
		echo '<tr><td>capacity:</td><td>'.$capacity.'</td></tr>';
		echo '<tr><td>ecconemy seats:</td><td>'.$econS.'</td></tr>';
		echo '<tr><td>business seats:</td><td>'.$bussS.'</td></tr>';
		echo '<tr><td>group seats:</td><td>'.$gropS.'</td></tr>';
		echo '<tr><td>price:</td><td>'.$price.'</td></tr>';
		echo '</table>'; 
	echo'</td></tr>';
	echo '</table>';
	  
  }
 
		echo '<br/>';
		echo date('l jS \of F Y h:i:s A');
		echo '<br/>';
 		echo '<form>'; 
		echo '<input type="button" value="print"/> ';
		echo '</form>';

include("footer.html");
?>


