<div style="border-style: solid;
 	width: 806px;
	margin-left: auto;
 	margin-right: auto;
 	text-align: center;">

<h1>Pesquisa para Covid-19!</h1>
<img src="covid19-5.jpg">
<h3>4-Qual país é o epicentro da pandemia neste momento?</h3>

<form action="pag6.php" method="POST">
	
	<p>
		<input type="radio" name="qst4" value="errado" checked> <label>Italia</label>
		<input type="radio" name="qst4" value="errado"> <label>Brasil</label>
		<input type="radio" name="qst4" value="errado"> <label>China</label>
		<input type="radio" name="qst4" value="errado"> <label>Índia</label>
		<input type="radio" name="qst4" value="correta"> <label>Estados Unidos</label>
	</p>
	<?php
		$nome = $_POST["nome"];
		echo "<input type='hidden' name='nome' value='$nome'>";
		$qst1 = $_POST["qst1"];
		echo "<input type='hidden' name= 'qst1' value='$qst1'>";
		$qst2 = $_POST["qst2"];
		echo "<input type='hidden' name= 'qst2' value='$qst2'>";
		$qst3 = $_POST["qst3"];

		
		
		if ($qst3 == "correta") 
		{
			"acertou";
		}
		else
		{
			 "errada";
		}
		
		$qst3 = $_POST["qst3"];
		echo "<input type='hidden' name= 'qst3' value= '$qst3'>";

	?>
	<p>
		<input type="submit" value="Enviar" >
	</p>
	<label>Gustavo Trajano Costa</label>
</div>
</form>