<?php
	session_start();
	require_once ('Connessione.php');
	$conn = new Connesione();
	$conn->apri();
	$query = "SELECT * FROM test_table";
	
	$risultati = $conn->esegui($query);
	
	while($ris = $risultati->fetch_array()){
		echo($ris[1]);
		echo("<br>");
	}
?>