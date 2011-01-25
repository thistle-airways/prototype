<?php 

function dropdown($entries) {
	echo '<select>';
	for ($i = 0; $i < count($entries); $i++) { ?>
		<option><?php echo $entries[$i]; ?></option>
	<?php	}
	echo '</select>';
}


