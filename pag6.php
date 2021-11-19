<div style="border-style: solid;
 	width: 806px;
	margin-left: auto;
 	margin-right: auto;
 	text-align: center;">

<h1>Pesquisa para Covid-19!</h1>
<img src="covid19-4.jpg">
<h3>5-Qual cidade brasileira é mais afetada pela Covid-19?</h3>

<form action="pag7.php" method="POST">
	
	<p>
		<input type="radio" name="qst5" value="errado" checked> <label>Rio de janeiro,RJ</label>
		<input type="radio" name="qst5" value="errado"> <label>Recife,PE</label>
		<input type="radio" name="qst5" value="errado"> <label>Fortaleza,CE</label>
		<input type="radio" name="qst5" value="correta"> <label>São paulo,SP</label>
		<input type="radio" name="qst5" value="errado"> <label>Manaus,AM</label>
	</p>
	<?php
		$nome = $_POST["nome"];
		echo "<input type='hidden' name='nome' value='$nome'>";
		$qst1 = $_POST["qst1"];
		echo "<input type='hidden' name= 'qst1' value='$qst1'>";
		$qst2 = $_POST["qst2"];
		echo "<input type='hidden' name= 'qst2' value='$qst2'>";
		$qst3 = $_POST["qst3"];
		echo "<input type='hidden' name= 'qst3' value='$qst3'>";
		$qst4 = $_POST["qst4"];


		
		
		if ($qst4 == "correta") 
		{
			"acertou";
		}
		else
		{
			"errada";
		}
		
		
		$qst4 = $_POST["qst4"];
		echo "<input type='hidden' name= 'qst4' value= '$qst4'>";
	?>
	<p>
		<input type="submit" value="Enviar" >
	</p>
	<label>Gustavo Trajano Costa</label>
</div>
</form>