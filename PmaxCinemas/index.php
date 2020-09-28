<?php
@session_start();
include 'connection.php';
?>
<?php
$welcomeName='';
$welcomeEmail='';
if(isset($_SESSION['user']))
  {
    $welcomeName = $_SESSION['user'];
  }
  if(isset($_SESSION['email']))
    {
      $welcomeEmail = $_SESSION['email'];
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
                    <div class="dropdown-user-details-email"><?php if(isset($_SESSION['user']) ){ echo $welcomeEmail; }?> </div>
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

<!-- Movie details  -->
<!-- Movie One  -->
<?php
$sql = "SELECT * FROM changemovie WHERE screencode=1";
$result = mysqli_query($conn,$sql);
$car = mysqli_fetch_array($result,MYSQLI_ASSOC);

$one_title = $car['title'];
$one_trailer = $car['trailer'];
$one_poster = $car['poster'];
$one_more = $car['more'];

//  Movie Two

$sql = "SELECT * FROM changemovie WHERE screencode=2";
$result = mysqli_query($conn,$sql);
$car = mysqli_fetch_array($result,MYSQLI_ASSOC);

$two_title = $car['title'];
$two_trailer = $car['trailer'];
$two_poster = $car['poster'];
$two_more = $car['more'];


// Movie Three

$sql = "SELECT * FROM changemovie WHERE screencode=3";
$result = mysqli_query($conn,$sql);
$car = mysqli_fetch_array($result,MYSQLI_ASSOC);
$three_title = $car['title'];
$three_trailer = $car['trailer'];
$three_poster = $car['poster'];
$three_more = $car['more'];
?>

<!-- setScreenCode  -->
<?php
  if(isset($_POST['setScreenCode'])){
    $_SESSION['screen'] = $_POST['setScreenCode'];
    $_SESSION['show'] = $_POST['radioShowCode'];
    header('Location:select_seat.php');
  }
?>
<?php
$welcomeName='';
if(isset($_SESSION['user']))
    {
      $welcomeName = $_SESSION['user'];
    }
?>
<!-- Carousel Start -->
<section>
  <div class="carousel slide" id="myslider" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/bg1.jpg" alt="">
      </div>
      <div class="carousel-item">
        <img src="images/bg3.jpg" alt="">
      </div>
      <div class="carousel-item">
        <img src="images/bg5.jpg" alt="">
      </div>
    </div>
    <ul class="carousel-indicators">
      <li data-target="#myslider" data-slide-to="0" class="active"></li>
      <li data-target="#myslider" data-slide-to="1" class="active"></li>
      <li data-target="#myslider" data-slide-to="2" class="active"></li>
    </ul>
    <a href="#myslider" data-slide="prev" class="carousel-control-prev">
      <img src="assets/images/prev.png" alt="">
    </a>
    <a href="#myslider" data-slide="next" class="carousel-control-next">
      <img src="assets/images/next.png" alt="">
    </a>
  </div>
</section>

<!-- Carousel End -->


<!--Movie Posters-->
<section class="py-5 bg-light">
  <div class="container">
    <div class="row">
      <!--Screen A-->
      <div class="col-md-4">
        <div class="poster_container text-center">
          <h5>Screen A</h5>
          <div class="poster">
            <img src="<?php echo $one_poster; ?>">
            <!-- Book A  -->
            <div class="book">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#showtime_a">Book</button>
            </div>
          </div>
          <h3><?php echo $one_title; ?></h3>
          <div class="text-center">
            <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#screen1">
              More
            </button>
            <div class="modal fade" id="screen1" tabindex="-1" role="dialog" aria-labelledby="screen1" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="screen1">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <?php echo $one_more; ?>
                  </div>
                </div>
              </div>
            </div>
            <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#trailer_a">
              <svg class="bi bi-caret-right-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M12.14 8.753l-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 011.659-.753l5.48 4.796a1 1 0 010 1.506z" />
              </svg> Trailer
            </button>
          </div>
        </div>
        <div class="more text-left">
          <div id="more_s_a" class="collapse more_content text-justify">
            <p><?php echo $one_more; ?></p>
          </div>
        </div>
      </div>
      <!--Screen B-->
      <div class="col-md-4">
        <div class="poster_container text-center">
          <h5>Screen B</h5>
          <div class="poster">
            <img src="<?php echo $two_poster; ?>">
            <!-- Book A  -->
            <div class="book">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#showtime_b">Book</button>
            </div>
          </div>
          <h3><?php echo $two_title; ?></h3>
          <div class="text-center">
            <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#screen2">
              More
            </button>
            <div class="modal fade" id="screen2" tabindex="-1" role="dialog" aria-labelledby="screen2" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="screen2">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <?php echo $two_more; ?>
                  </div>
                </div>
              </div>
            </div>
            <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#trailer_a">
              <svg class="bi bi-caret-right-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M12.14 8.753l-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 011.659-.753l5.48 4.796a1 1 0 010 1.506z" />
              </svg> Trailer
            </button>
          </div>
        </div>
        <div class="more text-left">
          <div id="more_s_a" class="collapse more_content text-justify">
            <p><?php echo $two_more; ?></p>
          </div>
        </div>
      </div>
      <!--Screen C-->
      <div class="col-md-4">
        <div class="poster_container text-center">
          <h5>Screen C</h5>
          <div class="poster">
            <img src="<?php echo $three_poster; ?>">
            <div class="book">
              <form method="POST" action="index.php">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#showtime_c">Book</button>
              </form>
            </div>
          </div>
          <h3><?php echo $three_title; ?></h3>
          <div class="text-center">
            <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#screen3">
              More
            </button>
            <div class="modal fade" id="screen3" tabindex="-1" role="dialog" aria-labelledby="screen3" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="screen3">About <?php echo $three_title; ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <?php echo $three_more; ?>
                  </div>
                </div>
              </div>
            </div>
            <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#trailer_c"><svg class="bi bi-caret-right-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M12.14 8.753l-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 011.659-.753l5.48 4.796a1 1 0 010 1.506z" />
              </svg> Trailer
            </button>
          </div>
        </div>
        <div class="more text-left">
          <div id="more_s_c" class="collapse more_content text-justify">
            <p><?php echo $three_more; ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Trailer Modals -->
  <div>
    <!--Modal Sceen A-->
    <div class="container">
      <!-- Trigger the modal with a button -->
      <!-- Modal -->
      <div class="modal fade" id="trailer_a" role="dialog">
        <div class="modal-dialog modal-lg">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Trailer</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body text-center">
              <iframe width="100%" height="315" src="<?php echo $one_trailer; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--Modal Sceen B-->
    <div class="container">
      <!-- Trigger the modal with a button -->
      <!-- Modal -->
      <div class="modal fade" id="trailer_b" role="dialog">
        <div class="modal-dialog modal-lg">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Trailer</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body text-center">
              <iframe width="100%" height="315" src="<?php echo $two_trailer; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Modal Sceen C-->
    <div class="container">
      <!-- Trigger the modal with a button -->
      <!-- Modal -->
      <div class="modal fade" id="trailer_c" role="dialog">
        <div class="modal-dialog modal-lg">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Trailer</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body text-center">
              <iframe width="100%" height="315" src="<?php echo $three_trailer; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Show Time Modal  -->

  <!-- Show Time Screen A -->
  <div class="container">
    <!-- The Modal -->
    <div class="modal fade" id="showtime_a">
      <div class="modal-dialog">
        <div class="modal-content">
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Select Showtime</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
            <form method="POST" action="index.php" id="showcode_a_form">
              <table>
                <tr>
                  <td><input type="radio" name="radioShowCode" value="1"> &nbsp;&nbsp;&nbsp;- Morning Show : 10:00 AM - 1:00 PM</td>
                </tr>
                <tr>
                  <td><input type="radio" name="radioShowCode" value="2"> &nbsp;&nbsp;&nbsp;- Noon Show : 1:00 PM - 4:00 PM</td>
                </tr>
                <tr>
                  <td><input type="radio" name="radioShowCode" value="3"> &nbsp;&nbsp;&nbsp;- Evening Show : 4:00 PM - 7: 00 PM</td>
                </tr>
                <tr>
                  <td><input type="hidden" name="setScreenCode" value="1"></td>
                </tr>
              </table>
            </form>
          </div>

          <!-- Modal footer -->
          <div class="modal-footer">
            <button form="showcode_a_form" type="submit" class="btn btn-outline-success">Submit</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Show Time Screen B  -->
  <div class="container">
    <!-- The Modal -->
    <div class="modal fade" id="showtime_b">
      <div class="modal-dialog">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Select Showtime</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
            <form method="POST" action="index.php" id="showcode_b_form">
              <table>
                <tr>
                  <td><input type="radio" name="radioShowCode" value="1"> &nbsp;&nbsp;&nbsp;- Morning Show : 10:00 AM - 1:00 PM</td>
                </tr>
                <tr>
                  <td><input type="radio" name="radioShowCode" value="2"> &nbsp;&nbsp;&nbsp;- Noon Show : 1:00 PM - 4:00 PM</td>
                </tr>
                <tr>
                  <td><input type="radio" name="radioShowCode" value="3"> &nbsp;&nbsp;&nbsp;- Evening Show : 4:00 PM - 7: 00 PM</td>
                </tr>
                <tr>
                  <td><input type="hidden" name="setScreenCode" value="2"></td>
                </tr>
              </table>
            </form>
          </div>

          <!-- Modal footer -->
          <div class="modal-footer">
            <button form="showcode_b_form" type="submit" class="btn btn-outline-success">Submit</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Show Time Screen C  -->
  <div class="container">
    <!-- The Modal -->
    <div class="modal fade" id="showtime_c">
      <div class="modal-dialog">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Select Showtime</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
            <form method="POST" action="index.php" id="showcode_c_form">
              <table>
                <tr>
                  <td><input type="radio" name="radioShowCode" value="1"> &nbsp;&nbsp;&nbsp;- Morning Show : 10:00 AM - 1:00 PM</td>
                </tr>
                <tr>
                  <td><input type="radio" name="radioShowCode" value="2"> &nbsp;&nbsp;&nbsp;- Noon Show : 1:00 PM - 4:00 PM</td>
                </tr>
                <tr>
                  <td><input type="radio" name="radioShowCode" value="3"> &nbsp;&nbsp;&nbsp;- Evening Show : 4:00 PM - 7: 00 PM</td>
                </tr>
                <tr>
                  <td><input type="hidden" name="setScreenCode" value="3"></td>
                </tr>
              </table>
            </form>
          </div>

          <!-- Modal footer -->
          <div class="modal-footer">
            <button form="showcode_c_form" type="submit" class="btn btn-outline-success">Submit</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include('get_feedback.php'); ?>
<?php include('footer.php') ?>
