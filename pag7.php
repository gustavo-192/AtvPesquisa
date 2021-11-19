<div style="border-style: solid;
 	width: 806px;
	margin-left: auto;
 	margin-right: auto;
 	text-align: center;">
<img src="covid19-6.jpg">
<?php
		$nome = $_POST["nome"];
		$qst1 = $_POST["qst1"];
		$qst2 = $_POST["qst2"];
		$qst3 = $_POST["qst3"];
		$qst4 = $_POST["qst4"];
		$qst5 = $_POST["qst5"];

		echo "<h2>Obrigado por participar $nome!</h2>";
		echo "<h2>Gabarito:</h2>";
		echo " 1° Questão = $qst1 <br>";
		echo " 2° Questão = $qst2 <br>";
		echo " 3° Questão = $qst3 <br>";
		echo " 4° Questão = $qst4 <br>";
		echo " 5° Questão = $qst5 <br>";


		
		
		if ($qst5 == "correta") 
		{
			"correta";
		}
		else
		{
			 "errada";
		}
		
		#Cálculo
		$resultado = 0;									
		if ($qst1 == "correta") 
		{
			$resultado = $resultado + 2;
		}
		
		if ($qst2 == "correta") 
		{
			
			$resultado = $resultado + 2;
		}
		
		if ($qst3 == "correta") 
		{
			
			$resultado = $resultado + 2;
		}

		if ($qst4 == "correta") 
		{
			
			$resultado = $resultado + 2;
		}

		if ($qst5 == "correta") 
		{
			
			$resultado = $resultado + 2;
		}
		
		echo"<br><br>";
		
		if($resultado == 10)
		{
			echo "Voçê acertou todas as questões. Parabéns!";
		}

		echo "<h2>Sua pontuação foi: $resultado.</h2>"
?>
<label>Gustavo Trajano Costa</label>
</div>