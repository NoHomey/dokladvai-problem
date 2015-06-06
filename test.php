<meta charset = "UTF-8">

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
</tr>
<?php
	require("config.php");
	$query = "SELECT * FROM  `signal` "; 
	$result = mysql_query($query);
	while($row = mysql_fetch_row($result)){ 
		echo "<tr>";
		for($i = 0; $i < 9;++$i) {
	    	echo "<td>" . $row[$i] . "</td>";  
	    }
	   	echo "<td> <a href = ' $row[9]'><img src = ' $row[9]' height = 50px width = 50px /> </a> </td>";
	    echo "</tr>";
	}
	echo $result;
?>
</table>