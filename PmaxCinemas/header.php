<?php
@session_start();
include 'connection.php';
?>
<?php
$welcomeName='';
if(isset($_SESSION['user']))
  {
    $welcomeName = $_SESSION['user'];
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>pmax cinema</title>

  <!-- bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <!-- fontawesome -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.14.0/css/all.css" />

  <!-- google fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Do+Hyeon&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&display=swap" rel="stylesheet">


  <!-- css -->
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <!-- Navbar Start -->
  <nav class="navbar navbar-expand-lg sb-navbar border-bottom shadow-sm ">
    <div class="container-fluid">
      <a class="navbar-brand ml-4" href="/">
        pmax
        <span>cinema</span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fad fa-ellipsis-v-alt"></i>
      </button>
      <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto pt-3 pt-md-0 nav-margin">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contactus.php">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="aboutus.php">About</a>
          </li>
          <li>
          <?php if(isset($_SESSION['user']) ){
            echo '' ?>
            <div class="profile">
              <a class=" dropdown-toggle" id="profiledropdown" role="button" data-toggle="dropdown">
                <i class="fad fa-user-circle fa-3x"></i>
              </a>
              <div class=" dropdown dropdown-menu border-0 shadow animate slideIn" aria-labelledby="profiledropdown">
                <div class="dropdown-header  d-flex justify-content-around">
                  <i class="fad fa-user-circle fa-3x"></i>
                  <div class="dropdown-user-details">
                    <div class="dropdown-user-details-name"><span><?php echo $welcomeName; ?></span>  </div>
                    <div class="dropdown-user-details-email">praveen@pks.com</div>
                  </div>
                </div>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item profile-menu" href="userBookings.php">
                  <i class="far fa-ticket fa-rotate-90"></i>&nbsp Bookings
                </a>
                <a class="dropdown-item profile-menu" href="logout.php">
                  <i class="fal fa-sign-out"></i>&nbsp Log Out
                </a>
              </div>
            </div>
            <?php
          }
          else {
            echo '<a class="nav-link login" href="login.php">LOGIN</a>';
          }
          ?>

          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Navbar End -->
