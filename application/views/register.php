<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">


    <title>Register!</title>
  </head>
  <body>
  <center>
  <div class = "col-lg-3 col-lg-offset-2">
    <h1>Register Page</h1>
    <p> Fill in the details to register on our website!!</p>
    <?php if(isset($_SESSION['success'])) { ?>
      <div class="alert alert-success"> <?php echo $_SESSION['success']; ?></div>
      <?php } ?>
    <?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>

    <form action="" method="POST">

    
      <div class ="form-group">
        <label for="username">Username:</label>
        <input class="form-control" name="username" id="username">        
      </div>

      <div class ="form-group">
        <label for="email">Email:</label>
        <input class="form-control" name="email" id="email">        
      </div>

      <div class ="form-group">
        <label for="password">Password:</label>
        <input class="form-control" name="password" id="password" type="password">        
      </div>

      <div class ="form-group">
        <label for="password">Confirm Password:</label>
        <input class="form-control" name="password2" id="password2" type="password">        
      </div>


      <div class ="form-group">
        <label for="gender">Gender:</label>
        <select class="form-control" id="gender" name="gender">
          <option value = "Male">Male</option>
          <option value = "Female">Female</option>
        </select>        
      </div>

      <div class ="form-group">
        <label for="phone">Phone:</label>
        <input class="form-control" name="phone" id="phone">        
      </div>

      <div class="text-center">
        <button class="btn btn-large" name="register">Register</button>
      </div>



  </form>
</div>
</center>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="<?php echo base_url(); ?>assets/css/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>