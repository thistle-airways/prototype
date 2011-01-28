<?php 

function dropdown($entries, $default = '') {
	echo "<select>";
	for ($i = 0; $i < count($entries); $i++) {
		if ($entries[$i] == $default) { ?><option selected><?php } else { ?><option><?php }
		echo $entries[$i]; ?></option>
	<?php	}
	echo '</select>';
}

function datePicker($defDay = FALSE, $defMonth = FALSE) {
	if (!$defDay) { $defDay = date("d") + 1; }
	if (!$defMonth) { $defMonth = date("m"); }
	echo '<div class="date-select">';
	//Day
	echo '<select class="day">';
	for ($i = 1; $i < 31; $i++) {
		if ($i == $defDay) { ?><option selected><?php } else { ?><option><?php }
		echo $i.'</option>';
	}
	echo '<select>';
	
	echo '<select class="month">';
	for ($i = 1; $i < 12; $i++) {
		if ($i == $defMonth) { ?><option selected><?php } else { ?><option><?php }
		echo $i.'</option>';
	}
	echo '<select>';
	
	echo '<select class="year">';
	for ($i = 2011; $i < 2012; $i++) {
		echo '<option>'.$i.'</option>';
	}
	echo '<select>
	</div>';
}

function timePicker ($defHour = -1, $defMin = -1)
{
	echo '<div class="time-select">';
	//hour
	echo '<select class="hour">';
	echo '<option/>';
	for ($i = 0; $i<24; $i++)
	{
		if($i == $defHour ){?> <option selected><?php } else { ?><option><?php }
		echo $i.'</option>';
	}
	echo '<select/>';
	
	echo '<select class="min">';
	echo '<option/>';
	for ($i = 0; $i<60; $i++)
	{
		if($i == $defMin ){?> <option selected><?php } else { ?><option><?php }
		echo $i.'</option>';
	}
	echo '<select/>';
	echo '</div>';
}

function noPsngrPicker($psngrType, $defNo = 0) {
	?><div class="no-passengers">
    <select class="psngr-select <?php echo $psngrType; ?>">
    <?php
	for ($i = 0; $i < 10; $i++) {
		if ($i == $defNo) { ?><option selected><?php } else { ?><option><?php }
		echo $i; ?></option>
        <?php
	} ?>
    </select>
    </div>
    <?php
}


?>