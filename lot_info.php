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

          $query = "select contract_package from contract_info";

          $result = mysqli_query($dbc,$query);

          ?>

          <div class="container">
          <div class="row">
              <h1>Submit A Question</h1>
          </div>
      <div class="row center-block">
        <div class="col-md-12">
          <div class="panel panel-info">
             <div class="panel-heading">
                Lot Info
             </div>
                <div class="panel-body">
                  <form class="form-horizontal"  method="POST" action="lot_info_insertion.php">
                
                    <div class="form-group">
                      <label for="contract_package" class="col-xs-2 control-label" >Select Package:</label>
                      <select class="form-control" id="contract_package" name="contract_package">
                       <!--  <div class="col-xs-4"> -->
                         <?php 
                           while($row = mysqli_fetch_array($result))
                          {
                             echo '<option value="'. $row['contract_package'].'">'.$row['contract_package'].'</option>';  
                          }
                          ?>
                        <!-- </div> -->
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="lot_no" class="col-xs-2 control-label"> Lot No </label>
                      <input type = "text" name="lot_no" placeholder="lot_no" class="col-xs-10" >
                    </div>
                    <div class="form-group">
                      <label for="JICA" class="col-xs-2 control-label"> JICA  </label>
                      <div class="radio">
                        <label class="col-xs-10" >
                          <input type="radio" name="JICA" id="yes" value="1" checked>
                          JICA
                        </label>

                      </div>
                 
                      <div class="radio">
                        <label class="col-xs-2" ></label>
                          <input type="radio" name="JICA" id="no" value="0">
                          Non-JICA
                        </label>
                        
                      </div>
                    </div>
                     <div class="form-group">
                      <label for="hod" class="col-xs-2 control-label">Name of HOD </label>
                      <input type="text" name="hod" class="col-xs-10" id="hod" placeholder="HOD Name">
                    </div>
                     <div class="form-group">
                      <label for="contractor_name" class="col-xs-2 control-label">Contractor Name </label>
                      <input type="text" name="contractor_name" class="col-xs-10" id="contractor_name" placeholder="Contractor Name">
                    </div>
                    <div class="form-group">
                      <label for="start_date" class="col-xs-2 control-label">Start Date</label>
                      <input type="date" name="start_date" class="col-xs-10" id="start_date" placeholder="yyyy/mm/dd">
                    </div>
                     <div class="form-group">
                      <label for="ntp" class="col-xs-2 control-label">NTP</label>
                      <input type="date" name="ntp" class="col-xs-10" id="ntp" placeholder="yyyy/mm/dd">
                    </div>
                    <div class="form-group">
                      <label for="contract_period" class="col-xs-2 control-label">Contract Period</label>
                      <input type="text" name="contract_period" class="col-xs-10" id="contract_period" placeholder="x months y years">
                    </div>
                    <div class="form-group">
                      <label for="finish_date" class="col-xs-2 control-label">Finish Date</label>
                      <input type="date" name="finish_date" class="col-xs-10" id="finish_date" placeholder="yyyy/mm/dd">
                    </div>
                    <div class="form-group">
                      <label for="awarded_cost" class="col-xs-2 control-label">Awarded Cost </label>
                      <input type="text" name="awarded_cost" class="col-xs-10" id="awarded_cost" placeholder="Awarded Cost">
                    </div>
                    <div class="form-group">
                      <label for="overall_phy_progress" class="col-xs-2 control-label">Physical Progress </label>
                      <input type="number" name="overall_phy_progress" class="col-xs-10" id="overall_phy_progress" placeholder="Physical Progress(%)">
                    </div>
                    <div class="form-group">
                      <label for="overall_package_progress" class="col-xs-2 control-label">Package Progress </label>
                      <input type="number" name="overall_package_progress" class="col-xs-10" id="overall_package_progress" placeholder="Package Progress (%)">
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