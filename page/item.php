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
		.item {
			font-size: 110%;
			color: #302E2B;
			padding-left: 30px;
		}
		.item p {
			text-align: left;
			display: inline-block;			
		}
		.item img {
			width: 100px;
			height: 100px;
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
				<li><a href="?page=list&cat=<?php if(isset($_REQUEST['cat'])) echo $_REQUEST['cat']; ?>">back to category</a></li>
			</ul>
		</div>
		<div class="right">
			<h1>Below you can find details on the product you are interested in</h1>
			<?php

			//check if id from browser address bar and id from data are the same value
			if( isset($_REQUEST['id']) && ($item['id'] != false) ) {
				if( ($_REQUEST['id'] == $item['id']) && ($_REQUEST['id'] != '') ) {
					echo '<div class="item">';
					echo 	'<p><img src="' . $item['img_path'] . '"></p>';
					echo 	'<p>
							Product ID: '. $item['id'] .'<br />
							Product type: '. strtoupper($item['type']) .'<br />
							Manufacturer: '. $item['maker'] .'<br />
							Performance: '. $item['parameter'] .'<br />
							Product cost: '. $item['price'] .' Rub
							</p>';
					echo '</div>';
				} else {
					echo '<div class="item" style="color: red;">No product to display. Check affress you are trying to reach</div>';
				}
			} else {
				echo '<div class="item" style="color: red;">No product to display. Check affress you are trying to reach</div>';
			}

			?>
		</div>
	</div>
</body>
</html>