<title>KinderGames.com</title>
<?php include_once("header.php");

#conteudo
if(empty($_SERVER["QUERY_STRING"])){
	$var = "projeto.php";
	include_once("$var");
}else{
	$pg = $_GET['pg'];
	include_once("$pg.php");
}
include_once("footer.php") ?>