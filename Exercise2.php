<html>
	<head><title>Custodio - Exercise2</title></head>
		<body align=center><h1>Grade Evaluation<h1>
		<h3><font face="Arial">Created using PHP and HTML by Custodio Justin Chyle</font></h3>
		
		<form action="" method="post">
		Student Name: <input type="text" name="sname"><br>
		Student Year: <input type="number" name="yrlvl"><br><br>
		Student Subject Count: <input type="number" name="sbjcnt"><br>
		Student Overall Grade: <input type="number" name="grd"><br>
		<input type="submit" name="submit" value="Submit"><br><br>
		</form>
		
		<h4>Student Evaluation Form</h4>
		<?php
		if (isset($_POST['submit']))
		{			
			$name  = $_POST['sname'];
			$yearlvl = $_POST['yrlvl'];
			$sbjcnt = $_POST['sbjcnt'];
			$grd = $_POST['grd'];
			echo "Student Name: ", $name, "<br>";
			echo "Student Year: ", $yearlvl, "<br>";
			echo "Student Subject Count: ", $sbjcnt, "<br>";
			echo "Student Overall Grade: ", $grd, "<br>";
			
			echo "Student Status: ";
			if ($grd >= 70)
			{
				$status = "Passed";
			}
			elseif ($grd >= 65 && $grd <= 69)
			{
				$status = "Remedial";
			}
			else
			{
				$status = "Failed";
			}
			echo $status;
		}
		else
		{
			echo "Fill up the form and press submit";
		}
		?>
	</body>
</html>