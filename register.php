<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Akvarist">
  <meta name="author" content="Akvarist">
  <title>Akvarist</title>

  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">

    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Akvarist | Login</div>
      <div class="card-body">

        <?php if(isset($_GET["err3"])) { ?>
        <div class="alert alert-danger">
          <strong>Alert !</strong> This User Name is being used !
        </div>
        <?php } ?>

        <?php if(isset($_GET["err2"])) { ?>
        <div class="alert alert-danger">
          <strong>Alert !</strong> Fields Cannot Be Empty ! <br>At least 4 Characters
        </div>
        <?php } ?>

      	<p style="text-align: center;"><img src="images/logo.png"></p>
        <form method="POST" action="include/register.php">
          <div class="form-group">
            <label>Name Lastname</label>
            <input class="form-control" type="text" name="name_lastname" placeholder="Name Lastname">
          </div>
          <div class="form-group">
            <label>Username</label>
            <input class="form-control" type="text" name="username" placeholder="Username">
          </div>
          <div class="form-group">
            <label>Password</label>
            <input class="form-control" name="parola" type="password_user" placeholder="Password">
          </div>
          <input type="submit" value="Register" class="btn btn-success btn-block">
          <a class="btn btn-danger btn-block" href="index.php">Cancel</a>
        </form>

      </div>
    </div>
  </div>

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
