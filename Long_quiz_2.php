<html>
	<head><title>Custodio Long Quiz 2</title></head>
	<body>
		<center>
		<b>By Custodio, Justin Chyle C.</b>
		<h2>Problem 1</h2>
		</center>
		<center><?php 
		
			/* Problem 1.  Create a Php Program that will
			perform the following mathematical operations
			to produce the required output. */
		
			$Salary_rate = 600;
			$Salary_days = 15;
			$Salary = $Salary_rate * $Salary_days;
			$Tax = 0.30;
			$Taxable_amount = $Salary * $Tax;
			$Net_pay = $Salary - $Taxable_amount;
			
			echo "Salary Rate: ".$Salary_rate."/day"."<br>";
			echo "No. of days: ".$Salary_days."<br><br>";
			echo "Salary: ".$Salary."<br><br>";
			echo "Tax: ".$Tax*100,"%<br>";
			echo "Net pay: ".$Net_pay."<br>";
		
		?></center>
		<h2><center>Problem 2</center></h2>
		
		<center><?php 
		
			/* Create a PHP program that will add all positive
			all positive integers from 1-50 using loop statement*/
			
			$count = 1;
			$maxcount = 50;
			$sum = 0;
			
			echo "Sum of 1 to 50"."<br>";
			for($n = $count; $n <= $maxcount; $n++){
				if($n == $maxcount){
					echo $n." = ";
				}
				else {
					echo $n." + ";
				}
 
				$sum += $n;	
			}
			echo "<b>".$sum."</b>";
			
		?></center>
		
	</body>
</html>
