<?php 
function bd()
{
try {
$bdd= new PDO('mysql:host=localhost;dbname=etudiants','root','');

} catch (Exception $e) {
	$e->getMessage();
}
 return $bdd;
}
?>
