
<html>
		<head>
			<title>Home</title>
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		</head>
		
		<body>

			<form action="index.php" method="post" enctype="multipart/form-data" align = "center">	
				<p>Подател</p>
				<input type = "text"placeholder = "име" name = "fname" /><br>
				<input type = "text"placeholder = "фамилия" name = "lname" style = "margin-top:2px;" /><br>
				<input type = "text"placeholder = "ел.поща" name = "email" style = "margin-top:2px;" /><br>
				<input type = "text"placeholder = "телефон" name = "number" style = "margin-top:2px;" /><br>
				
				<p>Сигнал</p>
				<input type = "text"placeholder = "локация" name = "location"   required/><br>
				<input type = "text"placeholder = "описание" name = "description" style = "margin-top:2px;"  required/><br>
				
				Select image to upload:
				<input type="file" name="fileToUpload" id="fileToUpload"><br>
				<input type="submit" value="Upload Image" name="submit">
</form>

		</body>
		
		
</html>

<?php
		require('config.php');
		require('file_upload.php');
?>

