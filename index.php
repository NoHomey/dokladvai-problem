<html>
		<head>
			<title>Home</title>
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		</head>
		
		<body>
			<form align = "center" method="POST" >
				<p>Подател</p>
				<input type = "text"placeholder = "име" name = "fname" /><br>
				<input type = "text"placeholder = "фамилия" name = "lname" style = "margin-top:2px;" /><br>
				<input type = "text"placeholder = "ел.поща" name = "email" style = "margin-top:2px;" /><br>
				<input type = "text"placeholder = "телефон" name = "number" style = "margin-top:2px;" /><br>
				
				<p>Сигнал</p>
				<input type = "text"placeholder = "локация" name = "location"   required/><br>
				<input type = "text"placeholder = "описание" name = "description" style = "margin-top:2px;"  required/><br>
				
				<input type = "submit" value = "изпрати" name = "submit" style = "margin-top:4px;">
			</form>
		</body>
		
		
</html>

<?php
		mysql_connect("localhost", "root", "");
		mysql_select_db("signal");
		
		//if(isset($_POST['submit'])){
		//	$fname = $_POST['fname'];
		
		//	echo $fname;
	//	}
?>


