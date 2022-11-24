<?php
$server = 'localhost';
$db = 'login';
$username = "root";
$password = "";

$connect = mysqli_connect($server,$username,$password,$db);

if($connect)
{
	echo "<h1>Database is connected</h1>";
}
else 
{
	echo "Database is Not Connected" . mysqli_error($connect);
}
if(isset($_POST['Login']))
	{
			$username=$_POST['username'];
			$password=$_POST['password'];
		$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

		$result = mysqli_query($connect,$sql);


		if (mysqli_num_rows($result)==1)
			{
				echo "Log in Successful";
				exit();
			}
		else
		{
			echo "Failed to login";
			exit();
		}
	}
?>