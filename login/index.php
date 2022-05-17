<?php 

session_start();

	include("connexion.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$UserName = $_POST['username'];
		$password = $_POST['password'];

		if(!empty($UserName) && !empty($password) && !is_numeric($UserName))
		{

			//read from database
			$query = "select * from users where username = '$UserName' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						$_SESSION['username'] = $user_data['username'];
						header("Location: ../user/acceuilUser.php");
						die();
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	
	<link rel="stylesheet" type="text/css" href="./style.css">
</head>
<body>
<form post="index.php" method="post">
	<div class="registration-form">
        <h1>Login</h1>
		<form>
			<div class="user-box">
				<input type="text" name="username" required="" >
                <label>	Username</label>
			</div>
			<div class="user-box">
				<input type="password" name="password" required="">
                <Label>Password</label>
			</div>
			<input type="submit" type="submit" value="LOGIN" class="a">
		</form>
	</div>
</body>
</html>