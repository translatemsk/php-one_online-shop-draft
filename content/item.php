<?php

$item = false;
if ( isset($_REQUEST['cat']) && isset($_REQUEST['id']) ) {
	
	//get full data
	$full_data = include 'content/listing.php';
	foreach($full_data as $key => $value) {
		//get data of selected category and full data of selected item product
		if($_REQUEST['cat'] === $key) {
			for($i = 0; $i < count($value); $i++) {
				if($_REQUEST['id'] == $value[$i]['id']) {
					$item = $value[$i];
				}
			}
		}
	}
}

return $item;