<form action = "test.php" method = "POST" style = "display:none;" name = "test" id = "test">
<input name = "none" type = "submit" id = "none" >
</form>
<script>
var flag = false;
function  pop_up() {
	if(!flag) {
	    var pass = prompt("Въведи парола", "");
	    if ((pass != null) && (pass == "asdasd")) {
	    	document.getElementById("test").submit();
	        flag = true;
	    } else  {
	    	alert("Грешна парола");
	    }
	 }
}
</script>
<link rel="stylesheet" type="text/css" href="css/style.css">
<meta charset = "UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<div class='table' align = 'center' width = 500px>
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
<td>Обнови статуса</td>
</tr>
<?php
	require("config.php");
	$count = 1;
	$query = "SELECT * FROM  `signal` "; 
	$value = ["Не отразен", "Отразен", "В процес", "Завършен", "Фалшив"];
	echo "<h1 style = 'color:white;'' align = 'center'>Подадени сигнали</h1>";
	echo"<a href = 'index.php' style = 'color:white;' align = 'center'><h4>Подай сигнал</h4></a>";
	if ($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		$result = mysql_query($query);
		while($row = mysql_fetch_row($result)) 
		{
				if(isset($_POST[$row[0]])) {
					$name = "s" . $row[0];
					mysql_query("UPDATE `signal` SET `status` = '$_POST[$name]' WHERE `id` = '$row[0]'");
				}				
		}
	}

	$result = mysql_query($query);
	while($row = mysql_fetch_row($result)) {
		echo "<tr class = 'warning'>";
		for($i = 0; $i < 9;++$i) {
			if($i == 4 || $i == 5) {
				echo "<td style = 'min-width:120px;'>" . $row[$i] . "</td>";  
			}else {
				if($i == 0) {
					echo "<td>" . $count . "</td>"; 
				} else {
	    			echo "<td>" . $row[$i] . "</td>"; 
	    		} 
	    	}
	    }
	   	echo "<td> <a href = ' $row[9]'><img src = ' $row[9]' height = 30px width = 30px /> </a> </td>";
	   	echo "<td><form method = 'POST' id = '$row[0]' action = 'test.php'><select name = 's$row[0]'style = 'color:black;' >";
	   		for($a = 0; $a < 5 ; $a++){
	   			if($row[10] == $value[$a]) {
	   				echo"<option value = '$value[$a]' selected>$value[$a]</option>";
	   			} else {
	   				echo "<option value = '$value[$a]'>$value[$a]</option>";
	   			}
	   		}
	   echo"</select></form></td>";
	   echo "<td><input class = 'btn btn-success' type = 'submit' form = '$row[0]' name = '$row[0]' onclick = 'pop_up()' value = 'Обнови'></td>";
	   echo "</tr>";
	   $count++;
	}	
?>
</table>
</div>