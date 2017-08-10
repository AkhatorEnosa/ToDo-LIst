<?php
$host = "localhost";
$username = "root";
$password = "";

$db = "nnpc";

$conn = @mysqli_connect($host, $username, $password, $db);

if(!$conn){
	die("<p id='danger' class='alert alert-danger'>Error connecting to the server ' $host '</p>");
}

if(isset($_REQUEST['name'])&&isset($_REQUEST['do'])){
	$name = ($_REQUEST['name']);
	$do = ($_REQUEST['do']);

		if(!empty($name)&&!empty($do)){
			
				$data_exist = "SELECT * FROM `todo` WHERE `do` = '$do'";
				$result = mysqli_query($conn, $data_exist);

				$num_rows = mysqli_num_rows($result);

					if($num_rows > 0){
							echo "<p id='warning' class=' alert alert-warning'>You already have ' $do ' on your list</p>";
					}else{
						$sql = "INSERT INTO `todo` (`name`,`do`, `created`) VALUES ('$name','$do', NOW())";

						$new_result = mysqli_query($conn, $sql);

						echo "<p id='success' class='alert alert-success'>Added succesfully to your list</p>";
					}

		}else{
			echo "<p id='danger' class='alert alert-danger'>Please fill all fields</p>";
		}
}


?>