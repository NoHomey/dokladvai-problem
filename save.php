<?php
	require ('config.php');
	

	if(isset($_POST['submit'])){

		$fname = mysql_real_escape_string($_POST['fname']);
		$lname = mysql_real_escape_string($_POST['lname']);
		$email = mysql_real_escape_string($_POST['email']);
		$number = mysql_real_escape_string($_POST['number']);
		$location = mysql_real_escape_string($_POST['location']);
		$description = mysql_real_escape_string($_POST['description']);
		$date = date("Y/m/d");
		$inst = mysql_real_escape_string($_POST['inst']);
		$img_path = $_SESSION['img'];

		mysql_query("INSERT INTO `signal` (`id`, `fname`, `lname`, `email`, `number`, `date`, `location`, `description`, `inst`, `img_path`) VALUES (NULL, '$fname', '$lname', '$email', '$number', '$date', '$location', '$description', '$inst', '$img_path')");

	}

?>
