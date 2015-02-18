<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contract Info</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
    <?php require_once('header.php'); ?>

    <div class="container">
      <div class="row">
       <div class="text-center"> <h1> Fill the basic info about contract </h1></div>
      </div>
    <!-- </div> -->
      <div class="row">
        <div class="col-md-offset-4">
          <form method="POST" action="contract_info_insertion.php">
          <div class="form-group">
            <div class="row">
                <div class="col-md-4">
                <label for="contractpackage" class="sr-only">Contract Package</label>
                 <input type="text" id="contract Package Name" name ="contractpackage" 
                 class="form-control" placeholder="Contract Package" 
                 required autofocus>
               </div>
            </div>
          </div>
          <div class="form-group">
            <div class="row">
                <div class="col-md-4">
                <label for="description" class="sr-only">Description</label>
                 <textarea placeholder="Contract Info" name="description" class="form-control" rows="5" id="description"required autofocus></textarea>
               </div>
            </div>
          </div>
          <!-- <input type="submit" name="submit"> -->
          <button type="submit" name="submit" class="btn btn-warning">Submit</button>
        </form>

        </div>
      </div>
    </div>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
