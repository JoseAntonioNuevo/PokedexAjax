<?php
  include "../services/connection.php";
  $numero_pokedex=$_REQUEST['numero_pokedex'];
  $nombre=$_REQUEST['nombre'];
  $peso=$_REQUEST['peso'];
  $altura=$_REQUEST['altura'];
  $imagen=$_REQUEST['img'];
  $sql="INSERT INTO pokemon (numero_pokedex, nombre, peso, altura, imagen) VALUES ('".$numero_pokedex."','".$nombre."','".$peso."','".$altura."','".$imagen."')"; 
  mysqli_query($conn,$sql) or die('{resultado:"NOK"}');
  echo '{resultado:"OK"}';
?>