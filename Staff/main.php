<?php
require("log.php");
include("header.html");
?>


	<div id="nav">
		<table id ="navtable"border="1" align=left>
		<tr>
		<th>Available Actions</th>
		</tr>
		
		<tr><td>-<a href="report.php">Generate Report</a></td></tr>
		<tr><td>-<a href="editFlightSchedule.php">Edit a Flight Schedule</a></td></tr>
		<tr><td>-<a href="scheduleInfo.php">Add Flight Schedule</a></td></tr>
		<tr><td>-<a href="FlightSelect.php">Edit A Flight</a></td></tr>
		<tr><td>-<a href="flightinfo.php">Add Flight</a></td></tr>
		<tr><td>-<a href="AddCostingStruc.php">Add Costing Structure</a></td></tr>
		<tr><td>-<a href="EditCostingStruc.php">Edit Costing Structure</a></td></tr>
		<tr><td>-<a href="expendatures.php">Company Expenditures</a></td></tr>
		<tr><td>-<a href="airports.php">Maintain Airports</a></td></tr>
		<tr><td>-<a href="travleAgents.php">Maintain Travel Agents</a></td></tr>


		</table>

		<p align=right> Select an action from the actions list
						below, where a search criteria 
						can be entered when searching 
						for customers, booking
						flights and their schedules</p>
	</div>
	<br/><br/>
	<div id="searches" >
		<table border="2" id="searchtable">
			
			<th colspan="2">Search a Flight </th>
			<tr>
				<td>
					

					<form name="Flight_info" method="get" action="ViewFlight.php?action=Fsearch" align=right>
						<table border="0" id="searchsub">
							<tr>
								<td>FlightNo:</td>
								<td><?php autoFill(1,"DestDiv");?></td>
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
							
								<tr><td>Destination:</td> <td>
								<?php dropdown($airports)?>
								</td>
								</tr>
								<tr><td>Departure:</td> <td>								
								<?php dropdown($airports)?>
								</td></tr>
								<tr><td>Departure Date:</td> <td>
									<?php datePicker(1,1); ?>
									</td></tr>
								<tr><td>Departure Time:</td><td> 
								<?php timePicker();?>
								</td></tr>
								<tr><td>Available Economy: >=</td> <td><input type="text" name="" ></input></td></tr>
								<tr><td>Available Business: >=</td> <td><input type="text" name="" ></input></td></tr>
								<tr><td>Available Group: >=</td> <td><input type="text" name="" ></input></td></tr>
	
							<tr>
								<td><input type="submit" value="Search" /></td>
							</tr>
						</table>
					</form>
				</td>
				
			</tr>
		
			<th colspan="2">Search a Customer </th>
			<tr>
				<td>

					<form name="customer_info" method="get" action="viewCustomer.php?action=Csearch" align=right>
						<table border="0" id="searchsub">
							<tr><td>CustomerID:</td><td> <input type="text" name="custID" ></input></td></tr>
							<tr><td><input type="submit" value="Search" /></td></tr>
						</table>
					</form>
		
				</td>
		
				<td>
				
					<form name="customer_info" method="post" action="CustomerSearch.php?action=Csearch" align=right>
						<table border="0" id="searchsub">
							<tr><td>FirstName:</td><td> <input type="text" name="Fname" ></input></td></tr>
							<tr><td>LastName: </td><td><input type="text" name="Lname" ></input></td></tr>
							
							<tr><td><input type="submit" value="Search" /></td><td>
						</table>
					</form>
					
				</td>
			</tr>
		</table>
	</div>
<?php include("footer.html");?>
