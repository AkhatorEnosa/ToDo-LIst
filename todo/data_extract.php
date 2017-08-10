<?php
$host = "localhost";
$username = "root";
$password = "";

$db = "nnpc";

$conn = @mysqli_connect($host, $username, $password, $db);

if(!$conn){
	die("<p id='danger' class='alert alert-danger'>Error connecting to the server $host </p>");
}

	$query = "SELECT `id`, `name`, `do`, `Created` FROM `todo`";
	$result = mysqli_query($conn, $query);

	 if(mysqli_num_rows($result)>0){
	 	echo "<table id=\"tab\" class='table table-condensed table-bordered'>
	 			<tr class='active'>
	 			<th>S/N</th>
	 			<th>Name</th>
	 			<th>Do</th>
	 			<th>Created</th>
	 			<tr>";
	 	while($data = mysqli_fetch_assoc($result)){
	 		echo "<tr>";
	 		echo "<td>".$data['id']."</td>";
	 		echo "<td>".$data['name']."</td>";
	 		echo "<td>".$data['do']."</td>";
	 		echo "<td>".$data['Created']."</td>";
	 		echo "</tr>";
	 	}
	 			echo "</table>";
	 }



?>