<?php
	// Create connection
	$conn = new mysqli('localhost', 'root', '', 'pokemondb');

	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	} else {
	  // cambiar el conjunto de caracteres a utf8
	  $conn->set_charset("utf8");
	}
?>