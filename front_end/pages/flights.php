
<div class="left-column">
	<div id="flight-search">
		<h2>Book a flight</h2>
		
		<!--Search fields to be populated from available destinations in DB -->
		<table id="search-table">
			<tr class="from"><td>From</td><td><?php dropdown($destinations, 'Edinburgh'); ?></td></tr>
			<tr class="to"><td>To</td><td><?php dropdown($destinations, 'Inverness'); ?></td></tr>
			<tr class="depart"><td>Depart</td><td><?php datePicker(10, 2); ?></td></tr>
			<tr class="return"><td>Return</td><td><?php datePicker(15, 2); ?></td></tr>
			<tr class="spacer small"><td></td></tr>
			<tr class="people"><td>Adults<br /><?php noPsngrPicker("adult", 2); ?></td><td>Children<br /><?php noPsngrPicker("adult"); ?></td></tr>
			<tr class="spacer"><td></td></tr>
			<td><a href="index.html">Reset Form</a></td><td><a href="flights.html">Search</a></td></tr>
		</table>
	</div>
    
    <div id="display-selected" style="height:290px;">
		<h2>Flight Details</h2>
        <div id="div-display-selected-out" style="visibility:hidden">
        <b>Outbound</b>
        <span id="display-selected-out"></span>
        </div>
        &nbsp;<br />
        <div id="div-display-selected-in" style="visibility:hidden">
        <b>Inbound</b>
        <span id="display-selected-in"></span>
        </div>
        
        &nbsp;<br />
        <div id="continue" style="visibility:hidden">
        <a href="details.html">Continue</a>
        </div>
    </div>
</div>

<div class="content-body">
<p class="page-title">Select your flights</p>

<div class="results-box outbound">
    <div class="heading">
        <p class = "flights title">Outbound</p>
        <p class = "flights subtitle">Edinburgh - Inverness</p>
    </div>
    <div class="results">
 <?php $flightsID = 1; ?>   	
        
        <table class="displayFlights outbound">
        <tr class="row-title"><td>Price</td><td>Depart</td><td>Arrive</td><td>From</td><td>To</td><td>Flight No</td></tr>
        <tr id="<?php echo $flightsID; ?>" class="out" onmousedown="highlightSelect(0, <?php echo $flightsID; $flightsID++; ?>);"><td>£40<br /><!--<input type="radio" name="select" value="203@100211" />--><td>11:35 &nbsp; &nbsp; Thu 10 Feb</td><td>12:45 &nbsp; &nbsp; Thu 10 Feb</td><td>Edinburgh</td><td>Inverness</td><td class="fltNo">203</td></tr>
<tr id="<?php echo $flightsID; ?>" class="out" onmousedown="highlightSelect(0, <?php echo $flightsID; $flightsID++; ?>);"><td>£55<br /><!--<input type="radio" name="select" value="203@100211" />--><td>17:10 &nbsp; &nbsp; Thu 10 Feb</td><td>18:20 &nbsp; &nbsp; Thu 10 Feb</td><td>Edinburgh</td><td>Inverness</td><td class="fltNo">207</td></tr>
        </table>
    </div>
</div>

<div class="results-box inbound">
    <div class="heading">
        <p class = "flights title">Inbound</p>
        <p class = "flights subtitle">Inverness - Edinburgh</p>
    </div>
    <div class="results">
    	
        
        <table class="displayFlights inbound">
        <tr class="row-title"><td>Price</td><td>Depart</td><td>Arrive</td><td>From</td><td>To</td><td>Flight No</td></tr>
        <tr id="<?php echo $flightsID; ?>" class="in" onmousedown="highlightSelect(1, <?php echo $flightsID; $flightsID++; ?>);"><td>£29<br /><!--<input type="radio" name="select" value="203@100211" />--><td>09:30 &nbsp; &nbsp; Tue 15 Feb</td><td>10:40 &nbsp; &nbsp; Tue 15 Feb</td><td>Inverness</td><td>Edinburgh</td><td class="fltNo">202</td></tr>
<tr id="<?php echo $flightsID; ?>" class="in" onmousedown="highlightSelect(1, <?php echo $flightsID; $flightsID++; ?>);"><td>£35<br /><!--<input type="radio" name="select" value="203@100211" />--><td>13:00 &nbsp; &nbsp; Tue 15 Feb</td><td>14:10 &nbsp; &nbsp; Tue 15 Feb</td><td>Inverness</td><td>Edinburgh</td><td class="fltNo">205</td></tr>
        </table>
    </div>
</div>
</div>