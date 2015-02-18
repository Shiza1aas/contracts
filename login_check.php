
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
  
    <title>LogInCheck</title>

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
	$password="";
	$error = "";

	if ( isset($_POST['submit']))
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
		

		if ( !empty($username) && !empty($password))
		{
			
				$query = "select * from login where user_name = '$username' and password = '$password'";
				// returns true if query runs successfully.
				$result = mysqli_query($dbc,$query);

				if ( ($row=mysqli_fetch_array($result)))
				{
					echo "You are logged in as " . $username;
					$_SESSION['user_name'] = $username;

					if ( $row['user_type'] == 1 )
					{
						$_SESSION['admin'] = 1 ;
					}
					$home_url = 'http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/index.php';
					header('Location: '.$home_url);
				}
				else
				{
					$error = $error. " Error in log in.";
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
        echo 'Click  <a href="loginS.php"> here </a> to Log in again.';
        echo  '</h1></div>
            </div>';
		
	}
 ?>
 </body>
</html>