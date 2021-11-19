<div style="border-style: solid;
 	width: 806px;
	margin-left: auto;
 	margin-right: auto;
 	text-align: center;">

<h1>Pesquisa para Covid-19!</h1>
<img src="covid19-3.jpg">
<h3>3-Onde o surto da Covid-19 teve início?</h3>

<form action="pag5.php" method="POST">
	
	<p>
		<input type="radio" name="qst3" value="correta" checked> <label>Wuhan</label>
		<input type="radio" name="qst3" value="errado"> <label>São paulo</label>
		<input type="radio" name="qst3" value="errado"> <label>Washington</label>
		<input type="radio" name="qst3" value="errado"> <label>Catalunha</label>
		<input type="radio" name="qst3" value="errado"> <label>Paris</label>
	</p>
	<?php
		$nome = $_POST["nome"];
		echo "<input type='hidden' name='nome' value='$nome'>";
		$qst1 = $_POST["qst1"];
		echo "<input type='hidden' name= 'qst1' value='$qst1'>";
		$qst2 = $_POST["qst2"];
		
		
		if ($qst2 == "correta") 
		{
			"acertou";
		}
		else
		{
			"errada";
		}
		$qst2 = $_POST["qst2"];
		echo "<input type='hidden' name= 'qst2' value= '$qst2'>";
	?>
	<p>
		<input type="submit" value="Enviar" >
	</p>
	<label>Gustavo Trajano Costa</label>
</div>
</form>