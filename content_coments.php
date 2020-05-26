<?php  

$host ="127.0.0.1";
$user = "root";
$Password = "";
$DB =  "lucas";

$mysqli = new mysqli($host, $user, $Password, $DB);

if (!$mysqli) {
	echo "Error: Falha ao conectar-se com o banco de dados MySQL." . PHP_EOL;
	echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
	echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
	exit;
}

function exibir(){

	global $mysqli;
	$consulta = "SELECT  `usuario`, `coments` FROM `coments` WHERE 1";
	$conn = $mysqli -> query ($consulta) or die ($mysqli->error);
	?>
	
	<div class="margin_coments">
		<?php while($dado = $conn -> fetch_array()){ ?>
			<table class="borda">
				<tr>
					<th><?php echo $dado['usuario'] ?><br><hr></th>
				</tr>
				<tr>
					<td><?php echo $dado['coments'] ?></td>
				</tr>
			</table>
			<br>
		<?php } ?>
	</div>
	<?php mysqli_close($mysqli);
} ?>