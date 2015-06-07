<meta charset = "UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

<table>
<tr>
<td>Номер</td>
<td>Име</td>
<td>Фамилия</td>
<td>Ел. поща</td>
<td>Тел. номер</td>
<td>Дата</td>
<td>Локация</td>
<td>Описание</td>
<td>До институция</td>
<td>Снимка</td>
<td>Статус</td>
</tr>
<?php
	require("config.php");
	$query = "SELECT * FROM  `signal` "; 
	$value = ["Не отразен", "Отразен", "В процес", "Завършен", "Фалшив"];
	$class = ["btn btn-default", "btn btn-primary", "btn btn-warning", "btn btn-success", "btn btn-danger"];

	if ($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		$result = mysql_query($query);
		while($row = mysql_fetch_row($result)) 
		{
			if(isset($_POST[$row[0]])) 
			{
				$name = "s" . $row[0];
				echo mysql_query("UPDATE `signal` SET `status` = '$_POST[$name]' WHERE `id` = '$row[0]'");
			}
		}
	}

	$result = mysql_query($query);
	while($row = mysql_fetch_row($result)) {
		echo "<tr>";
		for($i = 0; $i < 9;++$i) {
	    	echo "<td>" . $row[$i] . "</td>";  
	    }
	   	echo "<td> <a href = ' $row[9]'><img src = ' $row[9]' height = 50px width = 50px /> </a> </td>";
	   	echo "<td><form method = 'POST' id = '$row[0]' action = 'test.php'><select name = 's$row[0]'>";
	   		for($a = 0; $a < 5 ; $a++){
	   			if($row[10] == $value[$a]) {
	   				echo"<option value = '$value[$a]' class = '$class[$a]' selected>$value[$a]</option>";
	   			} else {
	   				echo "<option value = '$value[$a]' class = '$class[$a]'>$value[$a]</option>";
	   			}
	   		}
	   echo"</select></form></td>";
	   echo "<td><input type = 'submit' form = '$row[0]' name = '$row[0]' onclick = 'window.location.reload()'> </td>";
	    echo "</tr>";
	}	
?>
</table>