<html>
	<head><title>This is my first webpage</title></head>
	<body bgcolor = "blue">
		<p>This HTML will get delivered as is</p>
		<?php echo "<p>But this code is interpreted by PHP and turned into HTML</p>";
			
			$username = "Custodio";
			echo $username;
			$count = 17;
			
			$j = "2";
			$k = "4";
			$num1 = 6;
			$num2 = 2;
			$sum = $num1 + $num2;
			
			echo "<br>";
			echo $count;
			echo "<br>";
			echo "6+2=",$sum;
			echo "<br>";
			echo "My name is ",$username;
			echo "<br>";
			
			$pi = "3.1416";
			$radius = 5;
			echo $pi*($radius*$radius);
			echo "<br>";
			echo $j;
			echo "<br>";
			echo $k;
			echo "<br>";
			if ($j==$k)
			{
				echo "Identical in terms of data type";
			}
			else
			{
				echo "Not Identical";
			}
			
		//This is the snippet for php code	
		?>	
	</body>
</html>