
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
    
    <div class="container">
      <div class="row">
        <div class="col-md-offset-4">
            <form method="post" action="signup_check.php">
            <h3 class="tpad"> Please Sign Up </h3>
            <div class="row">
              <div class="col-md-4">
              <label for="userName" class="sr-only">User Name</label>
               <input type="text" name = "user_username" id="userName" class="form-control" placeholder="Contractor Name" required autofocus>
             </div>
            </div>
            <div class="stpad"></div>
            <div class="row">
              <div class="col-md-4">
              <label for="inputPassword1" class="sr-only">Password</label>
               <input type="password" name="user_password1" id="inputPassword1" class="form-control" placeholder="Password" required>
               </div>
            </div>
            <div class="stpad"></div>
            <div class="row">
              <div class="col-md-4">
              <label for="inputPassword2" class="sr-only">Repeat Password</label>
               <input type="password" name="user_password2" id="inputPassword2" class="form-control" placeholder="Repeat Password" required>
               </div>
            </div>
            <div class="stpad"></div>
            <div class="row">
              <div class="col-md-4">
                <button type="submit" name="submit" class="btn btn-warning">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div> 
  </body>
</html>