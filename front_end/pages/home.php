<div class="left-column">
	<div id="flight-search">
		<p class="search-heading">Book a flight</p>
		
		<!--Search fields populated from available destinations in DB -->
		<table id="search-table">
			<tr class="from"><td>From</td><td><?php dropdown($destinations, ''); ?></td></tr>
			<tr class="to"><td>To</td><td><?php dropdown($destinations, ''); ?></td></tr>
			<tr class="depart"><td>Depart</td><td><?php datePicker(); ?></td></tr>
			<tr class="return"><td>Return</td><td><?php datePicker(); ?></td></tr>
			<tr class="space" />
			<tr class="people"><td>Adults<br /><?php noPsngrPicker("adult"); ?></td><td>Children<br /><?php noPsngrPicker("children"); ?></td></tr>
			<tr class="space" />
			<tr class="actions"><td><a href="reset">Reset Form</a></td><td><a href="flights.html">Search</a></td></tr>
		</table>
	</div>
</div>
<div class="content-body">
Welcome to Thistle Airways. Please use our search on the left to look for flights, or lookup an existing booking.
</div>
