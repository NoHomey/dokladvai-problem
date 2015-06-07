<meta charset = "UTF-8">

<html>
		<head>
			<title>Home</title>
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		</head>
		
		<!-- <body background = "bg.jpg"> -->

			<form action="index.php" method="post" enctype="multipart/form-data" align = "center">	
				<p>Подател</p>
				<input type = "text"placeholder = "име" name = "fname" /><br>
				<input type = "text"placeholder = "фамилия" name = "lname" style = "margin-top:2px;" /><br>
				<input type = "email"placeholder = "ел.поща" name = "email" style = "margin-top:2px;" /><br>
				<input type = "text"placeholder = "телефон" name = "number" style = "margin-top:2px;" /><br>
				
				<p>Сигнал</p>
				<input type = "text"placeholder = "локация" name = "location"   required/><br>
				<input type = "text"placeholder = "описание" name = "description" style = "margin-top:2px;"  required/><br>
				
				Select image to upload:
				<input type="file" name="fileToUpload" id="fileToUpload"><br>
				<select style = "width:100px;" name = "inst">
					<option value = "МВР">МВР</option>
					<option value = "БДЖ">БДЖ</option>
					<option value = "Столична община">Столична община</option>
					<option value = "Закрила на децата">Закрила на децата</option>
					<option value = "Министерство на труда и социалната политика">Министерство на труда и социалната политика</option>
					<option value = "Министерство на икономиката, енергетиката и туризма">Министерство на икономиката, енергетиката и туризма</option>
					<option value = "МИНИСТЕРСТВО НА РЕГИОНАЛНОТО РАЗВИТИЕ И БЛАГОУСТРОЙСТВОТО">МИНИСТЕРСТВО НА РЕГИОНАЛНОТО РАЗВИТИЕ И БЛАГОУСТРОЙСТВОТО</option>

				</select>
				<input type="submit" value="Upload Image" name="submit">
</form>

		</body>
		
		
</html>

<?php
		require('config.php');
		require('file_upload.php');
		require('save.php');
?>

