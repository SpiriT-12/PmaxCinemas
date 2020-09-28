<?php
require ('includes/connection.php');
require ('includes/function.php');
  $msg='';
if (isset($_POST['submit'])) {
  $username=get_safe_value($conn, $_POST['username']);
  $password=get_safe_value($conn, $_POST['password']);
  $sql="select * from admin where admin_name='$username' and admin_password= '$password'";
  $result=mysqli_query($conn,$sql);
  $count= mysqli_num_rows($result);
  if($count>0){
    $_SESSION['ADMIN_LOGIN']='yes';
    $_SESSION['ADMIN_USERNAME']=$username;
    header('location:index.php');
    die();
  }
  else{
    $msg="Please Enter Correct LogIn Details !!!";
  }
}

?>

<!doctype html>
<html class="no-js" lang="">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
  <meta charset="utf-8">
  <title>Pmax Cinemas</title>

  <!-- fonts -->
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

  <!-- bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>

  <!-- css -->
  <link rel="stylesheet" href="./css/login.css">

</head>

<body class="bg-dark">
  <div class="sufee-login d-flex align-content-center flex-wrap">
    <div class="container">
      <div class="login-content">
        <div class="login-form mt-150">
          <form method="post">
            <div class="form-group">
              <h1 class="text-center text-bold mt-4x"> <img class="Admin_icon" src="https://img.icons8.com/dotty/80/000000/admin-settings-male.png"/>Admin | Sign In</h1>

              <label>Username</label>
              <input type="text" name="username" class="form-control" placeholder="Username" required>
            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Sign in</button>
          </form>
          <div class="field_error">
            <?php echo $msg ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
