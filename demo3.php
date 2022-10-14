<html>
	<head>
		<title>My First Web Page</title>
		<body align=center><h1>
			<?php
			//Equality and Inequality
			$a = 2;
			$b = 3;
			$month = "December";
			
			if($a===$b) echo "a is equal to b <br>";
			if($month=="December") echo "It is Christmas time!<br>";
			
			if($a>$b) echo "a is greater than b<br>";
			if ($a<$b) echo "a is less than b";
			echo "<br>";
			if ($a>=$b) echo "a is greater than or equal to b";
			echo "<br>";
			if ($a<=$b) echo "a is less than or equal to b";
			$c = 1;
			$d =0;
			echo $c and $d;
			echo "<br>";
			if ($c or $d)
			{
				echo "One of the operands or both operands are TRUE";
			}
			echo "<br>";
			echo $c xor $d;
			$bank_balance = 90;
			if($bank_balance<100)
			{
				$money = 1000;
				$bank_balance+=$money;   // The same as bank_balance = bank_balance + money
			}
			echo "<br>";
			echo "The bank balance is:".$bank_balance;
			
			
			?></h1>
		</body>

	</head>

</html>
