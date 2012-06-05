<?php
$public_html = config_item("public_html");
?>
<!DOCTYPE HTML>
<head>
<meta charset="UTF-8">
<title><?php echo !empty($tilte) ? $titile : ""; ?></title>
<meta http-equiv="X-UA-Compatible" content="IE=7, IE=9" />
<script src="<?php echo $public_html; ?>/js/jquery.js"></script>
</head>
<body>    
<div class="container">
	<!-- <header class="jumbotron subhead" id="overview">
		<h1>寒潭清</h1>
		<p class="lead">岂能尽如人意，但求无愧我心.</p>
		<div class="subnav">
		<!-- 	<ul class="nav nav-pills">
				<li>
					<a href="#typography">Typography</a>
				</li>
				<li>
					<a href="#navbar">Navbar</a>
				</li>
				<li>
					<a href="#buttons">Buttons</a>
				</li>
				<li>
					<a href="#forms">Forms</a>
				</li>
				<li>
					<a href="#miscellaneous">Miscellaneous</a>
				</li>
			</ul> -->
		</div>
	</header>