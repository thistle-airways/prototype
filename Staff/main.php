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
	<div id="searches">
		<table border="2" id="searchtable">
			
			<th colspan="2">Search a Flight </th>
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
							
								<tr><td>Destination:</td> <td>
								<select>
									  <option></option>
									  <option>NCL</option>
									  <option>MAN</option>
									  <option>LBA</option>
									  <option>LPL</option>
									  <option>EMA</option>
									  <option>BHX</option>
									  <option>LTN</option>
									  <option>STN</option>
									  <option>LHR</option>
									  <option>LGW</option>
									  <option>LCY</option>
									  <option>BRS</option>
									  <option>CWL</option>
									  <option>ABZ</option>
									  <option>...</option>
									</select>
								</td>
								</tr>
								<tr><td>Departure:</td> <td>								
								<select>
									  <option></option>
									  <option>NCL</option>
									  <option>MAN</option>
									  <option>LBA</option>
									  <option>LPL</option>
									  <option>EMA</option>
									  <option>BHX</option>
									  <option>LTN</option>
									  <option>STN</option>
									  <option>LHR</option>
									  <option>LGW</option>
									  <option>LCY</option>
									  <option>BRS</option>
									  <option>CWL</option>
									  <option>ABZ</option>
									  <option>...</option>
									</select></td></tr>
								<tr><td>Departure Date:</td> <td>
									<select>
									  <option></option>
									  <option>1</option>
									  <option>2</option>
									  <option>3</option>
									  <option>4</option>
									  <option>5</option>
									  <option>6</option>
									  <option>7</option>
									  <option>8</option>
									  <option>9</option>
									  <option>10</option>
									  <option>11</option>
									  <option>12</option>
									  <option>13</option>
									  <option>14</option>
									  <option>...</option>
									</select>
									<select>
									  <option></option>
									  <option>1</option>
									  <option>2</option>
									  <option>3</option>
									  <option>4</option>
									  <option>5</option>
									  <option>6</option>
									  <option>7</option>
									  <option>8</option>
									  <option>9</option>
									  <option>10</option>
									  <option>11</option>
									  <option>12</option>
									</select>
									<select>
									  <option>2011</option>

									</select>
									</td></tr>
								<tr><td>Departure Time:</td><td> 
								<select>
									  <option></option>
								      <option>00</option>
									  <option>01</option>
									  <option>02</option>
									  <option>03</option>
									  <option>04</option>
									  <option>05</option>
									  <option>06</option>
									  <option>07</option>
									  <option>08</option>
									  <option>09</option>
									  <option>10</option>
									  <option>11</option>
									  <option>12</option>
									  <option>13</option>
									  <option>14</option>
									  <option>15</option>
									  <option>16</option>
									  <option>17</option>
									  <option>18</option>
									  <option>19</option>
									  <option>20</option>
									  <option>21</option>
									  <option>22</option>
									  <option>23</option>
									 
									</select>
									:
									<select>
									  <option></option>
									  <option>00</option>
									  <option>01</option>
									  <option>02</option>
									  <option>03</option>
									  <option>04</option>
									  <option>05</option>
									  <option>06</option>
									  <option>07</option>
									  <option>08</option>
									  <option>09</option>
									  <option>10</option>
									  <option>11</option>
									  <option>12</option>
									  <option>13</option>
									  <option>14</option>
									  <option>15</option>
									  <option>16</option>
									  <option>17</option>
									  <option>18</option>
									  <option>19</option>
									  <option>20</option>
									  <option>21</option>
									  <option>22</option>
									  <option>23</option>
									  <option>...</option>
									  <option>60</option>
									</select>
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
