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

        		$contract_package = $_POST['contract_package'];
        		$lotno = $_POST['lot_no'];
        		$jica = $_POST['JICA'];
        		$hod = $_POST['hod'];
        		$contractor = $_POST['contractor_name'];
        		$start_date = $_POST['start_date'];
        		$ntp = $_POST['ntp'];
        		$contract_period = $_POST['contract_period'];
        		$finish_date = $_POST['finish_date'];
        		$awarded_cost = $_POST['awarded_cost'];
        		$overall_phy_progress = $_POST['overall_phy_progress'];
        		$overall_package_progress = $_POST['overall_package_progress'];

        		// echo $contract_package.' '.$lotno.' ' .$jica.' '.$finish_date.' '.$overall_package_progress;
        		// echo 'i am in submit';

        		
        		$query = "insert into lot_info values ('$lotno','$jica','$hod',
        			'$contractor','$start_date','$ntp','$contract_period',
        			'$finish_date','$awarded_cost','$overall_phy_progress','$overall_package_progress',
        			'$contract_package')

        			";
        		$result = mysqli_query($dbc,$query)
        		or die('error in insertion');
        		echo '<div class="container">
                <div class="row tpad">
                  <div class="text-center" class=" btn btn-success"><h1>';
	            echo 'Lot info  is inserted successfully.';
	        	echo 'Click  <a href="corridor_info.php"> here </a> to update corridor info.';
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