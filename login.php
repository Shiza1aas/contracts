
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
  
    <title>Log In</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    
 </head>

  <body>
    <?php require_once('header.php'); ?>

    <?php 

      @session_start();
      if ( isset($_SESSION['user_name']) && isset($_SESSION['admin']))
      {
        // echo "admin is:".$_SESSION['admin'];
        echo '<div class="container">
                <div class="row tpad">
                  <div class="text-center"><h1>';
        echo "You are signed in as ".$_SESSION['user_name'] ."(admin)";
        echo  '</h1></div>
            </div>';


        echo '<div class="row tpad">
          <div class="col-md-4 col-md-offset-3">
              <a href="view_details.php"><div class="btn btn-info" > View Info</div></a>
          </div>

          <div class="col-md-4">
              <a href="contract_info.php"><div class="btn btn-info"> Insert Info</div></a>
          </div>
      </div>';
        
        echo ' <div class="row tpad text-center">
           <a href="signout.php"><div class="btn btn-default ">Log Out</div></a>
        </div>';

      }
      else if (isset($_SESSION['user_name']))
      {
       echo '<div class="container">
                <div class="row tpad">
                  <div class="text-center"><h1>';
        echo "You are signed in as ".$_SESSION['user_name'];
        echo  '</h1></div>
            </div>';
            echo ' <div class="row tpad text-center">
           <a href="view_details.php"><div class="btn btn-default ">View Info</div></a>
        </div>';
        echo  '</h1></div>
            </div>';
            echo ' <div class="row tpad text-center">
           <a href="signout.php"><div class="btn btn-default ">Log Out</div></a>
        </div>';
    }

      else
      {
     ?>
    <div class="container">
      <div class="row">
        <div class="col-md-offset-4">
            <form method="post" action="login_check.php">
            <h3 class="tpad"> Please Log In </h3>
            <div class="row">
              <div class="col-md-4">
              <label for="userName" class="sr-only">User Name</label>
               <input type="text" id="userName" name ="username" class="form-control" placeholder="Contractor Name" required autofocus>
             </div>
            </div>
            <div class="stpad"></div>
            <div class="row">
              <div class="col-md-4">
              <label for="inputPassword" class="sr-only">Password</label>
               <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
               </div>
            </div>
            <div class="checkbox">
            <label>
              <input type="checkbox" value="is_admin"> Check if you are admin
            </label>
          </div>
            <div class="stpad"></div>
            <div class="row">
              <div class="col-md-4">
                <button type="submit" name="submit" class="btn btn-warning">Submit</button>
              
                Not Registered <a href="signup.php">sign up</a>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div> 
    <?php
      }
      ?>
  </body>
</html>