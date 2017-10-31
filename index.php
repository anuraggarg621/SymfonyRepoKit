<html>
	<head>
		<title>assignment</title>
	</head>
	<body>
		<?php
			require_once 'vendor/autoload.php';
			$client         = new \Github\Client();
			$repositories   = $client->api('user')->repositories('symfony');
		?>
		<center>
			<table>
				<tr>
					<td>Sr. no.</td>
					<td>Name</td>
					<td>Description</td>
				</tr>
				<?php
				$i = 1;
				if(!empty($repositories)) {
					foreach($repositories as $single_repo) {
						echo "<tr>";
						echo "<td>".$i++."</td>";
						echo "<td><a target='_blank' href='".$single_repo['html_url']."'/>".$single_repo['name']."</td>";
						echo "<td>".$single_repo['description']."</td>";
						echo "</tr>";
					}
				}
				//var_dump($repositories);
				?>
			</table>
		</center>
	</body>
</html>
