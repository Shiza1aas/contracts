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
    
    <div class="text-center">
      <h3>Package Information</h3>
    </div><hr>
    <table class="table">
        <thead>
          <tr>
            <th>Serial No</th>
            <th>Contract Package</th>
            <th>Description of Work</th>
          </tr>
        </thead>
        <tbody>
    <?php 
  require_once('connectvars.php');

  $dbc = mysqli_connect($host,$username,$password,$database)
  or die("Can n't connect to the database");

  $query = "
  select * from contract_info";

  $result = mysqli_query($dbc,$query);
  $i = 0 ;
  while ( $row= mysqli_fetch_array($result))
  {
    $i++;
    ?>
            <tr class="active">
            <td><?php echo $i; ?></td>
            <td><?php echo $row['contract_package']; ?></td>
            <td><?php echo $row['description_of_work']; ?></td>
          </tr>
          
    <?php  
  }
   ?>
    </tbody>
      </table>
   <div class="text-center">
      <h3>Lot Information</h3>
    </div><hr>
    <table class="table">
        <thead>
          <tr>
            <th>Contract Package</th>
            <th>Lot No</th>
            <th>JICA</th>
            <th>Name of HOD</th>
            <th>Contractor</th>
            <th>Start Date</th>
            <th>NTP</th>
            <th>Contract Period</th>
            <th>Finish Date</th>
            <th>Awarded Cost</th>
            <th>Overall Physical Progress</th>
            <th>Overall Package Progress</th>
          </tr>
        </thead>
        <tbody>
    <?php 

  $query = "
  select * from lot_info";

  $result = mysqli_query($dbc,$query);
  $i = 0 ;
  while ( $row= mysqli_fetch_array($result))
  {
    $i++;
    ?>
            <tr class="active">
            <td><?php echo $row['contract_package']; ?></td>
            <td><?php echo $row['lot_name']; ?></td>
            <td>
              <?php
               if ( $row['jica'] == '1' ) 
                    echo 'JICA';
                else
                  echo 'Non-JICA';
            ; ?>
          </td>
          <td><?php echo $row['hod']; ?></td>
          <td><?php echo $row['contractor']; ?></td>
          <td><?php echo $row['start_date']; ?></td>
          <td><?php echo $row['ntp']; ?></td>
          <td><?php echo $row['contract_period']; ?></td>
          <td><?php echo $row['finish_date']; ?></td>
          <td><?php echo $row['awarded_cost']; ?></td>
          <td><?php echo $row['overall_phy_progress']; ?></td>
          <td><?php echo $row['overall_package_progress']; ?></td>
          </tr>
          
    <?php  
  }
   ?>
    </tbody>
    </table>
    <div class="text-center">
      <h3>Corridor Information</h3>
    </div><hr>
    <table class="table">
        <thead>
          <tr>
            <th>Contract Package</th>
            <th>Lot</th>
            <th>Corridor Covered</th>
            <th>Preliaminary Design Data in %</th>
            <th>Definite Design Data in %</th>
            <th>% Time Elapsed</th>
            <th>Physical Progress</th>
            <th>Package Progress</th>
            
          </tr>
        </thead>
        <tbody>
    <?php 
 

  $query = "
  select * from corridor_info";

  $result = mysqli_query($dbc,$query);
 
  while ( $row= mysqli_fetch_array($result))
  {
   
    ?>
            <tr class="active">
            
            <td><?php echo $row['contract_package']; ?></td>
            <td><?php echo $row['lot_name']; ?></td>
            <td><?php echo $row['corridor_covered']; ?></td>
            <td><?php echo $row['p_des_data']; ?></td>
            <td><?php echo $row['d_des_data']; ?></td>
            <td><?php echo $row['time_elapsed']; ?></td>
            <td><?php echo $row['physical_progres']; ?></td>
            <td><?php echo $row['package_progress']; ?></td>
            
          </tr>
          
    <?php  
  }
   ?>
    </tbody>
      </table>
      

    <script src="js/bootstrap.min.js"></script>
  </body>
</html>