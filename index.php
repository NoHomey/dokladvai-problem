
<html>
		<head>
			<title>Home</title>
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
			<link rel="stylesheet" type="text/css" href="css/style.css">
			<meta charset = "UTF-8">

		</head>
		
		<!-- <body background = "bg.jpg"> -->
		<p align = "center" style = "font-size:30px;">Подай сигнал </p>

			<form action="index.php" method="post" enctype="multipart/form-data" align = "center">	
				<p>Подател</p>
				<input type = "text"placeholder = "име" name = "fname" style = "width: 19%; height:40px;" pattern = "[A-Za-z]+"/><br>
				<input type = "text"placeholder = "фамилия" name = "lname" style = "margin-top:2px;width: 19%; height:40px;"  pattern = "[A-Za-z]+"/><br>
				<input type = "email"placeholder = "ел.поща" name = "email" style = "margin-top:2px;width: 19%; height:40px;" /><br>
				<input type = "tel"placeholder = "телефон" name = "number" style = "margin-top:2px;width: 19%; height:40px;" pattern = "[0-9]+" /><br>
				
				<p>Сигнал</p>
				<input type = "text"placeholder = "локация" name = "location" style = "width: 19%; height:40px;margin-left:6px;"  required/>*<br>
				<input type = "text"placeholder = "описание" name = "description" style = "margin-top:2px; height:100px; width:19%;margin-left:6px;"  required/>*<br>
				
				<a style = "margin-left:50px;">Снимка</a>:
				<input type="file" name="fileToUpload" id="fileToUpload" style = "margin-top:5px;margin-bottom:5px;"><br>
				<select style = "margin-top:2px;width: 19%; height:5%;" name = "inst">
					<option value = "МВР">МВР</option>
					<option value = "БДЖ">БДЖ</option>
					<option value = "Столична община">Столична община</option>
					<option value = "Закрила на децата">Закрила на децата</option>
					<option value = "Министерство на труда и социалната политика">Министерство на труда и социалната политика</option>
					<option value = "Министерство на икономиката, енергетиката и туризма">Министерство на икономиката, енергетиката и туризма</option>
					<option value = "МИНИСТЕРСТВО НА РЕГИОНАЛНОТО РАЗВИТИЕ И БЛАГОУСТРОЙСТВОТО">МИНИСТЕРСТВО НА РЕГИОНАЛНОТО РАЗВИТИЕ И БЛАГОУСТРОЙСТВОТО</option>

				</select><br>
				<input type="submit" value="Изпрати" name="submit" style ="margin-top:10px;width: 19%; height:5%;">
</form>

	<a href = "test.php" style = "color:white;" align = "center"><p>Подадени сигнали</p></a>

		</body>
		
		
</html>

<?php
		require('config.php');
		require('file_upload.php');
		require('save.php');
?>

