<!DOCTYPE html> 
<html> 
	<head lang="pt-br"> 
	<meta charset="utf-8"> 

	<title>PHP Tutorial</title>
	
	<body>
		<?php

		// Variaveis
		$array_simples = array('João', 'Maria');
		$array = array(['nome' => 'João'], 
					   ['nome' => 'Maria']);

		// If, if else, else
		echo '*** IF<br /><br />';
		
		if ($array_simples[0] == 'Maria')
		{
			echo 'IF: Maria foi encontrada!<br />';	
		}
		else if ($array_simples[1] == 'João')
		{
			echo 'IF: João foi encontrado!<br />';
		}
		else
		{
			echo 'IF: Nenhuma pessoa foi encontrada!<br />';
		}
		
		echo '<br />------------------------------------------------------------------------------------------------------------<br /><br />';

		// If in line
		echo '*** IF-IN-LINE<br /><br />';
		
		echo ($array_simples[0] == 'João' ? 'IF-IN-LINE: Esse é o João' : 'IF-IN-LINE: Essa é Maria').'<br />';
		echo ($array_simples[1] == 'João' ? 'IF-IN-LINE: Esse é o João' : 'IF-IN-LINE: Essa é Maria').'<br />';
		
		echo '<br />------------------------------------------------------------------------------------------------------------<br /><br />';

		// for
		echo '*** FOR<br /><br />';
		
		for($i = 0; $i < count($array_simples); $i++)
		{
			echo 'FOR em '.$array_simples[$i].'<br />';
		}
		
		echo '<br />------------------------------------------------------------------------------------------------------------<br /><br />';

		// while
		echo '*** WHILE<br /><br />';
		
		$i = 0;

		while($i < count($array_simples))
		{
			echo 'WHILE em '.$array_simples[$i].'<br />';
			
			$i++;
		}
		
		echo '<br />------------------------------------------------------------------------------------------------------------<br /><br />';

		// foreach
		echo '*** FOREACH<br /><br />';
		
		foreach($array as $row)
		{
			echo 'FOREACH em '.$row['nome'].'<br />';
		}
		
		echo '<br />------------------------------------------------------------------------------------------------------------<br /><br />';

		// swicth
		echo '*** SWITCH<br /><br />';
		
		$sorteio = rand(0, 1);
		$nome = $array_simples[$sorteio];

		echo 'SWITCH sorteado: '.$sorteio.'<br />';

		switch($nome)
		{
			case 'João':
				echo 'SWITCH em João<br />';
			break;
			case 'Maria':
				echo 'SWITCH em Maria<br />';
			break;
		}
		
		echo '<br />------------------------------------------------------------------------------------------------------------<br /><br />';

		?>
	</body>
</html>