<div class="left-column">
	<div id="flight-search">
		<p class="search-heading">Book a flight</p>
		
		<!--Search fields populated from available destinations in DB -->
		<table id="search-table">
			<tr class="from"><td>From</td><td><?php dropdown($destinations, 'Edinburgh'); ?></td></tr>
			<tr class="to"><td>To</td><td><?php dropdown($destinations, 'Inverness'); ?></td></tr>
			<tr class="depart"><td>Depart</td><td><?php datePicker(10, 2); ?></td></tr>
			<tr class="return"><td>Return</td><td><?php datePicker(15, 2); ?></td></tr>
			<tr class="space" />
			<tr class="people"><td>Adults<br /><?php noPsngrPicker("adult", 2); ?></td><td>Children<br /><?php noPsngrPicker("adult"); ?></td></tr>
			<tr class="space" />
			<tr class="actions"><td><a href="reset">Reset Form</a></td><td><a href="flights.html">Search</a></td></tr>
		</table>
	</div>
</div>


<p class="page-title">Select your flights</p>

<div class="results-box outbound">
    <div class="heading">
        <p class = "flights title">Outbound</p>
        <p class = "flights subtitle">Edinburgh - Inverness</p>
    </div>
    <div class="results">
    	
        
        <table id="displayFlights" class="outbound">
        <tr class="row-title"><td>Price</td><td>Depart</td><td>Arrive</td><td>From</td><td>To</td><td>Flight No</td></tr>
        <tr onClick="select(1,1);"><td>£40<br /><!--<input type="radio" name="select" value="203@100211" />--><td>11:35 &nbsp; &nbsp; Thu 10 Feb</td><td>12:45 &nbsp; &nbsp; Thu 10 Feb</td><td>Edinburgh</td><td>Inverness</td><td>203</td></tr>
<tr onClick="select(1,1);"><td>£55<br /><!--<input type="radio" name="select" value="203@100211" />--><td>17:10 &nbsp; &nbsp; Thu 10 Feb</td><td>18:20 &nbsp; &nbsp; Thu 10 Feb</td><td>Edinburgh</td><td>Inverness</td><td>207</td></tr>
        </table>
    </div>
</div>

<div class="results-box inbound">
    <div class="heading">
        <p class = "flights title">Inbound</p>
        <p class = "flights subtitle">Inverness - Edinburgh</p>
    </div>
    <div class="results">
    	
        
        <table id="displayFlights" class="inbound">
        <tr class="row-title"><td>Price</td><td>Depart</td><td>Arrive</td><td>From</td><td>To</td><td>Flight No</td></tr>
        <tr onClick="select(1,1);"><td>£29<br /><!--<input type="radio" name="select" value="203@100211" />--><td>09:30 &nbsp; &nbsp; Tue 15 Feb</td><td>10:40 &nbsp; &nbsp; Tue 15 Feb</td><td>Inverness</td><td>Edinburgh</td><td>202</td></tr>
<tr onClick="select(1,1);"><td>£35<br /><!--<input type="radio" name="select" value="203@100211" />--><td>13:00 &nbsp; &nbsp; Tue 15 Feb</td><td>14:10 &nbsp; &nbsp; Tue 15 Feb</td><td>Inverness</td><td>Edinburgh</td><td>205</td></tr>
        </table>
    </div>
</div>