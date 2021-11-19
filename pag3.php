<div style="border-style: solid;
 	width: 806px;
	margin-left: auto;
 	margin-right: auto;
 	text-align: center;">

<h1>Pesquisa para Covid-19!</h1>
<img src="covid19-1.jpg">
<h3>2-Qual transporte há menos risco de contaminação pela covid-19?</h3>

<form action="pag4.php" method="POST">
	
	<p>
		<input type="radio" name="qst2" value="errado" checked> <label>Ônibus</label>
		<input type="radio" name="qst2" value="errado"> <label>Táxi</label>
		<input type="radio" name="qst2" value="correta"> <label>Carro Particular</label>
		<input type="radio" name="qst2" value="errado"> <label>Uber</label>
		<input type="radio" name="qst2" value="errado"> <label>Metrô</label>
	</p>
	<?php
		$nome = $_POST["nome"];
		echo "<input type='hidden' name='nome'value='$nome'>";
		$qst1 = $_POST["qst1"];
		
		
		if ($qst1 == "correta")  
		{
			 "acertou";
			
		}
		else
		{
			"errada";
			
		}
		$qst1 = $_POST["qst1"];
		echo "<input type='hidden' name= 'qst1' value= '$qst1'>";
	?>
	<p>
		<input type="submit" value="Enviar" >
	</p>
	<label>Gustavo Trajano Costa</label>
</div>
</form>