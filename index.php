<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table border="1">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$i = 1;
				while ($i <= 10) {
					switch ($i%2) {
						case 0 :
							$background = "style='background:gray'";
							break;
						
						case 1 :
							$background = "style='background:yellow'";
							break;
					}
					echo "<tr $background>
							<td>$i</td>
							<td>UIN</td>
						</tr>";
					$i++;
				}
			?>
		</tbody>
	</table>

</body>
</html>