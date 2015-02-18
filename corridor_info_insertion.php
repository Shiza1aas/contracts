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
	 @session_start();
      require_once('connectvars.php');
      $dbc = mysqli_connect($host,$username,$password,$database)
	or die("Can n't connect to the database");
      
        if ( isset($_SESSION['admin']))
        {
        	if( isset($_POST['submit']))
        	{

        		$contract_package_lot = $_POST['contract_package_lot'];
        		$corridor_covered = $_POST['corridor_covered'];
        		$pre_design_data = $_POST['pre_design_data'];
        		$definite_design_data = $_POST['definite_design_data'];
        		$time_elapsed = $_POST['time_elapsed'];
        		
        		$phy_progress = $_POST['phy_progress'];
        		$package_progress = $_POST['package_progress'];

        		// echo $contract_package_lot.' '.$corridor_covered.' '.$package_progress;
        		// echo 'i am in submit';

                $data = explode(" ",$contract_package_lot);
                 $contract_package = $data[0];

                 $lot = $data[1];
                //  echo $contract_package_lot.' '.$corridor_covered.' '.$package_progress;
                // echo 'i am in submit';

        		
        		$query = "insert into corridor_info values ('$corridor_covered','$pre_design_data','$definite_design_data',
        			'$time_elapsed','$phy_progress','$package_progress','$lot',
        			'$contract_package')

        			";
        		$result = mysqli_query($dbc,$query)
        		or die('error in insertion');
        		echo '<div class="container">
                <div class="row tpad">
                  <div class="text-center" class=" btn btn-success"><h1>';
	            echo 'Corridor info  is inserted successfully.';
	        	echo 'Click  <a href="view_details.php"> here </a> to view details.';
	        	echo  '</h1></div>
	            </div>';
        	}
        	else
        	{
        		echo "Submit is not set";
        	}
       	}
       	else
       	{
       		echo 'log in';
       	}


 ?>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>