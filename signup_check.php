
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
  
    <title>Sign Up Check</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
 </head>
  <body>
    <?php require_once('header.php'); ?>
  	
<?php 
	require_once('connectvars.php');

	$dbc = mysqli_connect($host,$username,$password,$database)
	or die("Can n't connect to the database");

	$username = "";
	$password1="";
	$password2="";
	$error = "";

	if ( isset($_POST['submit']))
	{
		$username = $_POST['user_username'];
		$password1 = $_POST['user_password1'];
		$password2 = $_POST['user_password2'];

		if ( !empty($username) && !empty($password1) && !empty($password2))
		{
			if ( $password1 != $password2 )
			{
				$error = $error." Password don't match.";
			}
			else
			{
				$query = "select user_name from login where user_name = '$username'";

				$result = mysqli_query($dbc,$query);

				if ( mysqli_fetch_array($result))
				{
					$error = $error . " An account exists with this name.";
				}
				else
				{
					$query = "insert into login ( user_name,password) values ('$username','$password2')";
					mysqli_query($dbc,$query)
					or die('error in inserting data');
					echo "Your account has been created successfully.";

					$_SESSION['user_name'] = $username;
					$home_url = 'http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/index.php';
					header('Location: '.$home_url);
				}
			}
		
		}
		else
		{

			$error = $error . " Please fill all the fields.";
		}
	}
	else
	{
		$error = $error. "Please Submit correctly.";
	}

	echo $error;
	if ( !empty($error))
	{
		echo '<div class="container">
                <div class="row tpad">
                  <div class="text-center" class=" btn btn-danger"><h1>';
        echo 'Click  <a href="signup.php"> here </a> to Sign up again.';
        echo  '</h1></div>
            </div>';
		
	}
 ?>
 </body>
</html>