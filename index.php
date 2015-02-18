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
      <div class="row tpad">
          <div class="col-md-4 col-md-offset-3">
              <a href="login.php"><div class="btn btn-success" > User Section</div></a>
          </div>

          <div class="col-md-4">
              <a href="login.php"><div class="btn btn-success"> Admin Section</div></a>
          </div>
      </div>
      <?php
      @session_start();
      if ( isset($_SESSION['user_name']))
      {
        echo '<div class="container">
                <div class="row tpad">
                  <div class="text-center"><h1>';
        echo "You are signed in as ".$_SESSION['user_name'];

        if ( isset($_SESSION['admin']))
        {
          echo "(admin)";
        }
        echo  '</h1></div>
            </div>';
            echo ' <div class="row tpad text-center">
           <a href="signout.php"><div class="btn btn-default ">Log Out</div></a>
        </div>';
      }
      ?>
      <div class="row tpad">
          <div class="text-center"><h3> The site provides contract management informations.</h3></div>
      </div>
    </div>
   

    <script src="js/bootstrap.min.js"></script>
  </body>
</html>