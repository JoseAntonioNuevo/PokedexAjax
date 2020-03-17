<?php
  include "../services/connection.php";
  if(isset($_REQUEST['q'])){
  	$sql=mysqli_query($conn,"SELECT * FROM pokemon WHERE nombre LIKE '%".$_REQUEST['q']."%'");
  }else{
  	$sql=mysqli_query($conn,"SELECT * FROM pokemon");
  }

  $pokemons=array();
  while($row = mysqli_fetch_assoc($sql)){
    if ($row['imagen']==null) {
       $pokemons[]=$row;
    }else{
    $row['imagen']=base64_encode($row['imagen']);
    $pokemons[]=$row;
  }
}
  print json_encode($pokemons);
?>