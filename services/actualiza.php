<?php
  include "../services/connection.php";
  $numero_pokedex=$_REQUEST['numero_pokedex'];
  $favorito=$_REQUEST['favorito'];
  $sql="UPDATE pokemon SET favorito='".$favorito."' WHERE numero_pokedex='".$numero_pokedex."'"; 
  mysqli_query($conn,$sql) or die('{resultado:"NOK"}');
  echo '{resultado:"OK"}';
?>