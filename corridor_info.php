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
    
      <?php
      @session_start();
      require_once('connectvars.php');
      
        if ( isset($_SESSION['admin']))
        {
          $dbc = mysqli_connect($host,$username,$password,$database)
          or die("Can n't connect to the database");

          $query = "select contract_info.contract_package ,lot_name from contract_info,lot_info";

          $result = mysqli_query($dbc,$query);

          ?>

          <div class="container">
          <div class="row">
              <h1>Contract Management</h1>
          </div>
      <div class="row center-block">
        <div class="col-md-12">
          <div class="panel panel-info">
             <div class="panel-heading">
                Corridor Info
             </div>
                <div class="panel-body">
                  <form class="form-horizontal"  method="POST" action="corridor_info_insertion.php">
                
                    <div class="form-group">
                      <label for="contract_package" class="col-xs-2 control-label" >Select Package and lot:</label>
                      <select class="form-control" id="contract_package" name="contract_package_lot">
                       <!--  <div class="col-xs-4"> -->
                         <?php 
                           while($row = mysqli_fetch_array($result))
                          {
                             echo '<option value="'. $row['contract_package'].' '.$row['lot_name'].'">'.$row['contract_package'].' '.$row['lot_name'].'</option>';  
                          }
                          ?>
                        <!-- </div> -->
                      </select>
                    </div>
                    
                     <div class="form-group">
                      <label for="corridor_covered" class="col-xs-2 control-label">Corridor Covered </label>
                      <input type="text" name="corridor_covered" class="col-xs-10" id="corridor_covered" placeholder="corridor covered">
                    </div>
                     <div class="form-group">
                      <label for="pre_design_data" class="col-xs-2 control-label">Preliaminary design data in % w.r.t corridor (%)</label>
                      <input type="text" name="pre_design_data" class="col-xs-10" id="pre_design_data" placeholder="Preliaminiary design data">
                    </div>
                    
                    <div class="form-group">
                      <label for="definite_design_data" class="col-xs-2 control-label">Definite design data in % w.r.t corridor(%)</label>
                      <input type="text" name="definite_design_data" class="col-xs-10" id="definite_design_data" placeholder="definite design data">
                    </div>
                    
                    
                    <div class="form-group">
                      <label for="time_elapsed" class="col-xs-2 control-label">% Time Elapsed </label>
                      <input type="number" name="time_elapsed" class="col-xs-10" id="time_elapsed" placeholder="% Time Elapsed (%)">
                    </div>
                    <div class="form-group">
                      <label for="phy_progress" class="col-xs-2 control-label">Physical Progress </label>
                      <input type="number" name="phy_progress" class="col-xs-10" id="phy_progress" placeholder="Physical Progress(%)">
                    </div>
                    <div class="form-group">
                      <label for="package_progress" class="col-xs-2 control-label">Package Progress </label>
                      <input type="number" name="package_progress" class="col-xs-10" id="package_progress" placeholder="Package Progress (%)">
                    </div>

                    <div class="form-group">
                      <div class="col-xs-offset-2">
                        <button type="submit" name="submit" class="btn btn-success">Submit</button>
                      </div>
                    </div>


                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>


      <?php
        }
       mysqli_close($dbc);
      ?>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>