<html>
		<head>
			<title>Home</title>
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		</head>
		
		<body>
			<form align = "center">
				<p>Подател</p>
				<input type = "text"placeholder = "име" id = "fname" /><br>
				<input type = "text"placeholder = "фамилия" id = "lname" style = "margin-top:2px;" /><br>
				<input type = "text"placeholder = "ел.поща" id = "email" style = "margin-top:2px;" /><br>
				<input type = "text"placeholder = "телефон" id = "number" style = "margin-top:2px;" /><br>
				
				<p>Сигнал</p>
				<input type = "text"placeholder = "локация" id = "location"  /><br>
				<input type = "text"placeholder = "описание" id = "description" style = "margin-top:2px;" /><br>
			</form>
		</body>
		
		
</html>

<?php
		mysql_connect("localhost", "root", "");
		mysql_select_db("signal");
?>


