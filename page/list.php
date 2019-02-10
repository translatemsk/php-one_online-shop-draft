<!DOCTYPE html>
<html>
<head>
	<title>first php</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<style>
		body, div, ul, li {
			margin: 0;
			padding: 0;
		}
		.layout {
			height: 100%;
			width: 100%;
			min-width: 700px;
			padding: 0;
			margin: 0;
			min-width: 805px;
		}
		.left {
			min-height: 1px;
			min-height: 100%;
			width: 250px;
			float: left;

		}
		.left ul {
			list-style-type: none;
			padding: 10px;
		}
		.left a {
			color: #931F1D;
			text-decoration: none;
			display: block;
			padding: 5px 8px;
			margin: 10px 20px;
			background: #93A29B;
		}
		.right {
			padding: 20px;
			float: left;
			min-width: 550px;
		}
		.right p {
			border-radius: 5px;
			border: 2px solid #fff;
			min-width: 100px;
			display: inline-block;
			margin: 0 5px;
			text-align: center;
		}
		.right a {
			display: block;
			padding: 10px;
			color: #302E2B;
			text-decoration: none;
			font-weight: 600;
		}
		.cat {
			padding: 30px;
		}
		.cat p {
			display: inline-block;
			margin: 0 10px 10px;
			text-align: left;
			border-left: 1px solid #93A29B;
			border-bottom: 1px solid #93A29B;
			border-bottom-left-radius: 7px;
			min-width: 150px;
		}
		.cat a {
			display: block;
			text-decoration: none;
			color: #302E2B;
			padding: 10px;
		}
		#sel {
			border: 2px solid #6D7E83;
		}
		#sel a {
			color: #586265;
		}
	</style>
</head>
<body>
	<div class="layout">
		<div class="left">
			<ul>
				<li><a href="?page=main">back to main</a></li>
				<li><a href="?page=list">go to list</a></li>
			</ul>
		</div>
		<div class="right">
			<h1>Select product category you are interested in</h1>
			<?php

			//when category was not selected or incorrect id indicated in browser address bar
			$selected_cat_id = false;
			$selected_cat_data = false;

			//check if a category was selected
			if( isset($_REQUEST['cat']) ) {
				//if selected -> get category id and data
				$category_content = include 'content/listing.php';
				foreach($category_content as $key => $value) {
					if($_REQUEST['cat'] === $key) {
						$selected_cat_id = $key;
						$selected_cat_data = $value;
					}
				}
			}
			
			//display each category type name in buttons 
			for($i = 0; $i < count($list_display_data); $i++) {
				//if a category was selested -> highlight the button
				$sel_id = ($selected_cat_id === $list_display_data[$i]['id'] ? 'sel' : '');
				//display category buttons
				echo 	'<p id="'. $sel_id .'" style="background:#' . $list_display_data[$i]['bg_color'] . ';">
						<a href="?page=list&cat='. $list_display_data[$i]['id'] .'">
						'. strtoupper($list_display_data[$i]['type']) .'
						</a></p>';
			}

			//if a category was selected -> display the content of this category
			if($selected_cat_id) {
				echo '<div class="cat">';
				for($i = 0; $i < count($selected_cat_data); $i++) {
					echo 	'<p>
							<a href="?page=item&id=' . $selected_cat_data[$i]['id'] . '&cat=' . $selected_cat_id . '">
							Type: ' . $selected_cat_data[$i]['type'] . '<br />
							Make: ' . $selected_cat_data[$i]['maker'] . '<br />
							Cost: ' . $selected_cat_data[$i]['price'] . '
							</a></p>';
				}
				echo '</div>';
			//if non-valid category id in browser address bar
			} elseif ( isset($_REQUEST['cat']) ) {
				echo '<div class="cat">There are no such category. Check affress you are trying to reach</div>';
			}

			?>
		</div>
	</div>
</body>
</html>