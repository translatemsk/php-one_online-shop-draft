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
		.right p span {
			display: block;
			padding-left: 20px;
			margin-top: 5px;
		}
		.right a {
			display: block;
			padding: 10px;
			color: #302E2B;
			text-decoration: none;
			font-weight: 600;
		}
	</style>
</head>
<body>
	<div class="layout">
		<div class="left">
			<ul>
				<li><a href="index.php?page=main">back to main</a></li>
				<li><a href="index.php?page=list">go to list</a></li>
				<!--<li><a href="?page=item">go to product</a></li>-->
			</ul>
		</div>
		<div class="right">
			<h1><?php echo $content['header']; ?></h1>
			<?php
			echo '<p>Here you can find different products in the following categories. Follow the one you like most within below indicated products listing:';
			//display category type names
			for($i = 0; $i < count($content['categories']); $i++) {
				echo '<span>' . $content['categories'][$i] . '</span>';
			}
			echo "</p>";
			?>
		</div>
	</div>
</body>
</html>