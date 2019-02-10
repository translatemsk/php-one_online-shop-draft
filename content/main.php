<?php

$category_full = include 'content/listing.php';

//get list of category type names
foreach ($category_full as $key => $value) {
	for ($i=1; $i > 0; $i--) { 
		$category_list[] = $value[$i]['type'];
	}
}

return [
	'header' => 'welcome to lorem ipsum product list',
	'categories' => $category_list,
];