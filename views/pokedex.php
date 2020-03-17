<!DOCTYPE html>
<html>
<head>
	<title>Pokédex</title>
	<link rel="icon" type="image/png" href="../img/pokemon.png" />	
    <link rel="stylesheet" type="text/css" href="../css/style.css">
	<script type="text/javascript" src="../javascript/ajax.js"></script>
</head>
<body style="margin: 0; padding: 0" onload="modal()">
	<h1 style="text-align: center;">Pokédex</h1>
	<div style="height: 100px; width: 100%; background-color: #B22222;">
		<form style="padding: 20px 10px; float: right;" onsubmit="consultar(); return false">
			<input type="text" id="pokemon" autofocus placeholder="Pokemon..." onkeyup="consultar(this.value)">
			<input type="submit" name="Buscar" value="Buscar">
		</form>
	</div>
	<div style="height: 10px; width: 100%; background-color: #313131;"></div>
	<div style="height: 95px; width: 100%; background-color: white;">
		<!--***************************************************************
		PRIMER PUNTO: Registrar un nuevo pokémon
			El formulario ha de recojer los siguientes campos:
			- numero_pokedex
			- nombre
			- peso
			- altura

			y llamar a la función registrar() sin recargar la página.

			Nota: Al enviar el registro se han de limpiar los inputs, 
			para ello implementaremos una función limpiar() que lo haga.
		****************************************************************-->
		
<!-- Trigger/Open The Modal -->
<button id="myBtn">Registrar Pokémon</button>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
<div class="registrar">
<form style="padding: 20px 10px; float: right;" onsubmit="registrar(); return false">
			<input type="text" name="numero_pokedex" id="numero_pokedex" placeholder="# Pokédex">
			<input type="text" name="nombre" id="nombre" placeholder="Nombre">
			<input type="text" name="peso" id="peso" placeholder="Peso">
			<input type="text" name="altura" id="altura" placeholder="Altura">
			<input type="file" name="img" id="img">
			<input type="submit" name="Enviar" value="Registrar Pokémon">
		</form>
  </div>
</div>
</div>
	</div>
	
	<div id="mensaje"></div>

	<div id="resultado"></div>

</body>
</html>