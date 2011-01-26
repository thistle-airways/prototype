<div id="menu-left">
<?php
function build_breadcrumbs($page) {
	$breadcrumbs = array(array('index', 'Home'), array('flights', 'Select Flights'), array('details', 'Enter Details'), array('confirmation', 'Confirm Booking'));
	$header = '';
	$pageMatched = FALSE;
	for ($i = 0; $i < count($breadcrumbs); $i++) {
		if ($i == 0) { 
			$header = '<a class="menu" href="'.$breadcrumbs[$i][0].'.html">'.$breadcrumbs[$i][1].'</a>'; } else { $header = $header.' --> <a class="menu" href="'.$breadcrumbs[$i][0].'.html">'.$breadcrumbs[$i][1].'</a>'; }
		if ($breadcrumbs[$i][0] == $page) { 
			$pageMatched = TRUE;
			break;
		}
	}
	if ($pageMatched) { return $header; } else { return '<a class="menu" href="'.$breadcrumbs[0][0].'.html">'.$breadcrumbs[0][1].'</a>'; }
}

echo build_breadcrumbs($page);
?>
</div>
