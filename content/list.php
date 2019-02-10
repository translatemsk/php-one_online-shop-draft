<?php

$category_full = include 'content/listing.php';

//get category id, category type name and background color
foreach ($category_full as $key => $value) {
	for($i = 1; $i > 0; $i--) {
		$list_display_data[] = ['id' => $key, 'type' => $value[$i]['type'], 'bg_color' => $value[$i]['bg_color'] ];
	}
}

return $list_display_data;