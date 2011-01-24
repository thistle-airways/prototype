<?php
require("log.php");
include("header.html");
?>


	<div id="nav">
		<table id ="navtable"border="1" align=left>
		<tr>
		<th>avalable actions</th>
		</tr>
		<tr>
		<td>-generate report</td>
		</tr>
		<tr><td>-<a href="editFlightSchedule.php">Edit a flight schedule</a></td></tr>
		<tr><td>-<a href="scheduleInfo.php">Add flight schedule</a></td></tr>
		<tr><td>-<a href="FlightSelect.php">Edit a  flight</a></td></tr>
		<tr><td>-<a href="flightinfo.php">Add flight</a></td></tr>
		<tr><td>-<a href="AddCostingStruc.php">Add costing structure</a></td></tr>
		<tr><td>-<a href="EditCostingStruc.php">Edit costing structure</a></td></tr>


		</table>

		<p align=right> Select an action from the actions list
						bellow is where search cirteria 
						can be entered when searching 
						for customers, booking , 
						flights and there schedules</p>
	</div>
	<br/><br/>
	<div id="searches">
		<table border="2" id="searchtable">
			
			<th colspan="2">search a flight </th>
			<tr>
				<td>
					

					<form name="Flight_info" method="get" action="ViewFlight.php?action=Fsearch" align=right>
						<table border="0" id="searchsub">
							<tr>
								<td>FlightNo:</td>
								<td><input type="text" name="FNo" ></input></td>
							</tr>
							<tr>
								<td><input type="submit" value="Search" /></td>
							</tr>
						</table>
					</form>

				</td>
		
				<td>
					

					<form name="Flight_info" method="post" action="flightAndScheduleSearch.php?action=Fsearch" align=right>
						<table border="0" id="searchsub">
							
								<tr><td>Destination:</td> <td><input type="text" name="Dest" ></input></td></tr>
								<tr><td>Departure:</td> <td><input type="text" name="Dep" ></input></td></tr>
								<tr><td>Departure Date:</td> <td><input type="text" name="DepDat" ></input></td></tr>
								<tr><td>Departure Time:</td> <td><input type="text" name="DepTim" ></input></td></tr>
								<tr><td>Avalable Econemy:</td> <td><input type="text" name="" ></input></td></tr>
								<tr><td>Avalable Business:</td> <td><input type="text" name="" ></input></td></tr>
								<tr><td>Avalable Group:</td> <td><input type="text" name="" ></input></td></tr>
	
							<tr>
								<td><input type="submit" value="Search" /></td>
							</tr>
						</table>
					</form>
				</td>
				
			</tr>
		
			<th colspan="2">search a customer </th>
			<tr>
				<td>

					<form name="customer_info" method="get" action="viewCustomer.php?action=Csearch" align=right>
						<table border="0" id="searchsub">
							<tr><td>customerID:</td><td> <input type="text" name="custID" ></input></td></tr>
							<tr><td><input type="submit" value="Search" /></td></tr>
						</table>
					</form>
		
				</td>
		
				<td>
				
					<form name="customer_info" method="post" action="CustomerSearch.php?action=Csearch" align=right>
						<table border="0" id="searchsub">
							<tr><td>Firstname:</td><td> <input type="text" name="Fname" ></input></td></tr>
							<tr><td>LastName: </td><td><input type="text" name="Lname" ></input></td></tr>
							
							<tr><td><input type="submit" value="Search" /></td><td>
						</table>
					</form>
					
				</td>
			</tr>
		</table>
	</div>
<?php include("footer.html");?>
