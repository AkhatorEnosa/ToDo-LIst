<html>
<head>
	<title>All tasks</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.theme.css"/>
	<link rel="stylesheet" type="text/css" href="css/custom.css"/>
</head>
<body>
	<div class="container-fluid">
		<div class="jumbotron">
			<div id="well-id" class="well">
				<h1 class="text-center">To-Do List App</h1>
			</div>

			<p>Welcome,  Akhator Ebakor</p>
		</div>
	</div>
	<div class="container">
		<div class="row text-center">
			<div class="">
				<?php
					require("data_extract.php");
				?>
			</div>
				<a href="index.php" onclick="alert('Are you sure');">Add More</a>
		</div>
	</div>
	<script src="js/jquery.min.js"></script>		
	<script src="js/bootstrap.min.js"></script>		
</body>
</html>