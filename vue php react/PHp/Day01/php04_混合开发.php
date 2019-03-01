<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>混合开发</title>
</head>
<body>
	<table border="1" cellspacing="0" cellpadding="20">
		<tr>
			<th>里程</th>
			<th>价格</th>
		</tr>
		<?
			for($i = 0;$i < 10;$i++){
				echo "<tr><td>".$i."</td><td>".($i*2)."</td></tr>";
			}
		?>
	</table>
	<table border="1" cellspacing="" cellpadding="">
		
		<?
			for($i = 1;$i < 10;$i++){
				echo "<tr>";
				for($j = 1;$j < $i+1;$j++){
					echo "<td>{$j}*{$i}=".($i*$j)."</td>";
				};
				echo "</tr>";
			}
		?>
		
	</table>
</body>
</html>