<html>
<head>
	<title>ToDo LIst</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/custom.css" type="text/css"/>
	<link rel="stylesheet" href="css/bootstrap-theme.css" type="text/css"/>
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css"/>
</head>
<body>
	<div class="container">
		<div class="jumbotron">
		<div class="well">
			<h1 class="text-center">To-Do List App</h1>
			<p>Welcome,  Akhator Ebakor</p>
		</div>
				<form method="POST" action="" enctype="multipart/form-data">
					<div class="form-group">
						<label for="name">Name</label>
						<input type="text" class="form-control" id="name" name="name" value="Akhator Ebakor"/>
					</div>

					<div class="form-group">
						<label for="do">Do</label>
						<input type="text" class="form-control" id="do" name="do"/>
					</div>

					<div class="form-group">
						<input type="submit" class="btn btn-primary"/>
					</div>

					<div class="">
						<?php 
						require("connect.php");
						?>
					</div>
				</form>

				<p class="paragraph"><a href="todo.php">View your todo list</a></p>
		</div>
	</div>	
</body>
</html>