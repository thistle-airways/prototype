<?php
require("log.php");
include("header.html");
?>


	<div id="nav">
		<table id ="navtable"border="1">
		<tr>
		<th>Available Actions</th>
		</tr>
		
		<tr><td>-<a href="report.php">Generate Report</a></td></tr>
		<tr><td>-<a href="editFlightSchedule.php">Edit a Flight Schedule</a></td></tr>
		<tr><td>-<a href="scheduleInfo.php">Add Flight Schedule</a></td></tr>
		<tr><td>-<a href="FlightSelect.php">Edit A  Flight</a></td></tr>
		<tr><td>-<a href="flightinfo.php">Add Flight</a></td></tr>
		<tr><td>-<a href="AddCostingStruc.php">Add Costing Structure</a></td></tr>
		<tr><td>-<a href="EditCostingStruc.php">Edit Costing Structure</a></td></tr>
		<tr><td>-<a href="expendatures.php">Company Expenditures</a></td></tr>
		<tr><td>-<a href="airports.php">Maintain Airports</a></td></tr>
		<tr><td>-<a href="travleAgents.php">Maintain Travel Agents</a></td></tr>


		</table>
</div>
<div id="searches">
		<table border="2" id="searchtable">
			<th colspan="2">Search Flights</th>
			<tr>
				<td>
					<form name="Flight_info" method="get" action="ViewFlight.php?action=Fsearch" align=right>
						<table border="0" id="searchsub">
							<tr>
								<td>Flight No:</td>
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
								<tr><td>Available Economy:</td> <td><input type="text" name="" ></input></td></tr>
								<tr><td>Available Business:</td> <td><input type="text" name="" ></input></td></tr>
								<tr><td>Available Group:</td> <td><input type="text" name="" ></input></td></tr>
	
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
							<tr><td>Customer ID:</td><td> <input type="text" name="custID" ></input></td></tr>
							<tr><td><input type="submit" value="Search" /></td></tr>
						</table>
					</form>
		
				</td>
		
				<td>
				
					<form name="customer_info" method="post" action="CustomerSearch.php?action=Csearch" align=right>
						<table border="0" id="searchsub">
							<tr><td>First Name:</td><td> <input type="text" name="Fname" ></input></td></tr>
							<tr><td>Last Name: </td><td><input type="text" name="Lname" ></input></td></tr>
							
							<tr><td><input type="submit" value="Search" /></td><td>
						</table>
					</form>
					
				</td>
			</tr>
		</table>
	</div>
<?php include("footer.html");?>
