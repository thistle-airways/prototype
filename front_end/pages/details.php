<div class="left-column">
 <div id="display-selected">
		<h2>Flight Details</h2>
        <div id="div-display-selected-out">
        <b>Outbound</b>
        <span id="display-selected-out">
        <table><tr class="out"><td>£55<br /><!--<input type="radio" name="select" value="203@100211" />--><td>1710 &nbsp; &nbsp; Thu 10 Feb</td><td>1820 &nbsp; &nbsp; Thu 10 Feb</td><td>Edinburgh</td><td>Inverness</td><td class="fltNo">207</td></tr></table></span>
        </div>
        &nbsp;<br />
        <div id="div-display-selected-in">
        <b>Inbound</b>
        <span id="display-selected-in">
        <table><tr class="in"><td>£29<br /><!--<input type="radio" name="select" value="203@100211" />--><td>0930 &nbsp; &nbsp; Tue 15 Feb</td><td>1040 &nbsp; &nbsp; Tue 15 Feb</td><td>Inverness</td><td>Edinburgh</td><td class="fltNo">202</td></tr></table>
        </div>
        &nbsp;<br />
        <b>Total: £84</b>
    </div>
</div>

<div class="content-body">
	<h2>Passenger Details</h2>
    	<form action="confirmation.html" method="post">
		<table id="details">
			<tr><td>Passenger 1</td></tr>
            <tr class="firstN-1"><td>First Name</td><td><input type="text" name="firstN-1" /></td></tr>
			<tr class="lastN-1"><td>Surname</td><td><input type="text" name="lastN-1" /></td></tr>
			<tr class="pNo-1"><td>Passport number</td><td><input type="text" name="pNo-1" /></td></tr>
            <tr><td>Passenger 2</td></tr>
            <tr class="firstN-2"><td>First Name</td><td><input type="text" name="firstN-2" /></td></tr>
			<tr class="lastN-2"><td>Surname</td><td><input type="text" name="lastN-2" /></td></tr>
			<tr class="pNo-2"><td>Passport number</td><td><input type="text" name="pNo-2" /></td></tr>
		
        	<tr><td>&nbsp;</td></tr>
        
			<tr><td>Billing Details</td></tr>
            <tr class="firstN-b"><td>First Name</td><td><input type="text" name="firstN-b" /></td></tr>
			<tr class="lastN-b"><td>Surname</td><td><input type="text" name="lastN-b" /></td></tr>
            <tr class="email"><td>Email Address</td><td><input type="text" name="email" /></td></tr>
        	<tr class="address-1"><td>1st Line Address</td><td><input type="text" name="address-1" /></td></tr>
        	<tr class="address-2"><td>2nd Line Address</td><td><input type="text" name="address-2" /></td></tr>
            <tr class="city"><td>City</td><td><input type="text" name="city" /></td></tr>
            <tr class="pcode"><td>Postcode</td><td><input type="text" name="pcode" /></td></tr>
            
            <tr><td>&nbsp;</td></tr>
            
			<tr><td>Card Details</td></tr>
            <tr class="firstN-b"><td>Type</td><td><?php dropdown(array('', 'Visa', 'Mastercard', 'AMEX', 'Switch/Solo')); ?></td></tr>
			<tr class="cc-no"><td>Card Number</td><td><input type="text" name="cc-no" /></td></tr>
        	<tr class="exp"><td>Expiry Date</td><td><input type="text" name="exp" /></td></tr>
        	<tr class="sec-code"><td>Security Code</td><td><input type="text" name="sec-code" /></td></tr>
			<tr><td>&nbsp;</td></tr>
			<tr><td><input type="submit" name="submit" value="Make Booking" /></td></tr>
            </table>
		</form>
</div>

