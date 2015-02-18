<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contract Management</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
    <?php require_once('header.php'); ?>
  	
    <div class="container">
      <div class="row tpad">
          <div class="text-center"><h1> Contract Managememt</h1></div>
      </div>
<?php 
	require_once('connectvars.php');

	$dbc = mysqli_connect($host,$username,$password,$database)
	or die("Can not connect to the database");
	$contract_package = "";
	$descrption ="";
	

	if ( isset($_POST['submit']) )
	{
		$contractpackage = $_POST['contractpackage'];
		$description = $_POST['description'];
		if ( !empty($_POST['contractpackage'])&& !empty($_POST['description']))
		{
			
			$query = "insert into contract_info(contract_package,description_of_work) values ('$contractpackage','$description')";

			$result = mysqli_query($dbc,$query)
			or die ('error in insertion.');

			echo '<div class="container">
                <div class="row tpad">
                  <div class="text-center" class=" btn btn-success"><h1>';
            echo 'Contract info  is inserted successfully.';
        	echo 'Click  <a href="lot_info.php"> here </a> to update lot info.';
        	echo  '</h1></div>
            </div>';

		}
		else
		{
			echo "please fill up correctly.";
		}
	}
	else
	{
		echo "Unable to submit";
	}
?>	
</body>
</html>
