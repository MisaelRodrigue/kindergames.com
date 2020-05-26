<?php
$usuario = $_REQUEST['nome'];
$coments = $_REQUEST['coments'];
$uri = $_REQUEST['uri'];

$consulta = "INSERT INTO `coments`(`usuario`, `coments`) VALUES (\"$usuario\",\"$coments\")";
$conn = $mysqli -> query($consulta) or die ($mysqli->error);
mysqli_close($mysqli);
header("location: $uri");
?>