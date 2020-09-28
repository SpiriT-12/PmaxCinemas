<?php
$errors = array('email' => '', 'password' => '','loginFlag'=>'');
if(isset($_POST['submit'])){
  if(empty($_POST['email'])){
    $errors['email'] = "Enter your mail id." ;

  }elseif(empty($_POST['pwd'])){
    $errors['password'] =  "Enter your password.";
  }else{
    include('loginCheck.php');
      if($loginFlag=="false"){
        $errors['loginFlag'] = "Either email is wrong or password, Try Again!.";
      }
    }
  }
?>

<?php include('header.php')  ?>

<section class=" wel-login">

  <!-- Log In form -->
  <div class="container" style="margin-top:100px; margin-bottom:70px;">
    <div class="row">
      <div class="col-md-6">
        <div class="text-center ">
          <h2 style="text-align: center; font-size: 40px; color: white;"><?php
              if(@$_GET['alert']){
                echo "Log In to Book Tickets";
              }else{
                echo "Log In";
              }
            ?>
          </h2>
          <medium style="color: white;">Best Online Ticketing System In Town</medium>
        </div>
      </div>

      <div class="col-md-6 login" id="log">
        <div style="margin-left: 10%; margin-right:10%;">
          <form action="login.php" method="POST">
            <div class="form-group">
              <label for="email"><span style="color: #fff;">Email :</span></label>
              <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
              <div class="text-danger"><?php echo $errors['email']; ?></div>
            </div>
            <div class="form-group">
              <label for="pwd"><span style="color: #fff;">Password :</span></label>
              <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
              <div class="text-danger"><?php echo $errors['password']; ?></div>
            </div>
            <div class="row">
              <div class="col-8 text-left">
                <a href="signup.php"><span style="color: #3456e;">Create New Account</span></a>
              </div>
              <div class="col-4 text-right">
                <button type="submit" name="submit" class="btn btn-primary btn-sm ">Log In</button>
              </div>
            </div>
            <div class="text-danger" style="margin-bottom: 60px;"><?php echo $errors['loginFlag']; ?></div>
          </form>
        </div>
      </div>
    </div>
  </div>
</<section>
  <!--Footer-->
<?php include('footer.php') ?>
