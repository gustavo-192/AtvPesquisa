<div style="border-style: solid;
 	width: 806px;
	margin-left: auto;
 	margin-right: auto;
 	text-align: center;">

<h1>Pesquisa para Covid-19!</h1>
<img src="covid19-2.jpg">
<h3>1-Qual destes objetos serve para higienização das mãos?</h3>

<form action="pag3.php" method="POST">
	
	<p>
		<input type="radio" name="qst1" value="errado" checked> <label>Óleo</label>
		<input type="radio" name="qst1" value="errado"> <label>Gasolina</label>
		<input type="radio" name="qst1" value="errado"> <label>Água Raz</label>
		<input type="radio" name="qst1" value="correta"> <label>Álcool Gel 70° </label>
		<input type="radio" name="qst1" value="errado"> <label>Etanol</label>

	</p>
	<?php 
	
		$nome = $_POST["nome"];
		echo "<input type='hidden' name='nome' value='$nome'>";
	?>
	<p>
		<input type="submit" value="Enviar">
	</p>
	<label>Gustavo Trajano Costa</label>
</div>

</form>