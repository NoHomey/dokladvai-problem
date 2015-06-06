

<table>
<?php
	require("config.php")
	$result = mysql_query("SELECT * FROM signal");
	while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
		echo "<tr>";
		for($i = 0; $i < 8;++i) {
	    	echo "<td>" . $row[0] . "</td>";  
	    }
	   	echo "<td>" . "<img src = '".  $row[0] . "'>". "</td>";  
	    echo "</tr>"; 
	}
?>
</table>