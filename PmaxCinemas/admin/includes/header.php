<?php
require ('includes/connection.php');
require ('includes/function.php');

if (isset($_SESSION['ADMIN_LOGIN']) && $_SESSION['ADMIN_LOGIN'] !=''){

}else{
    header('location:login.php');
    die();
  }
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>pmax cinema</title>

    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.png" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.24.1/feather.min.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.14.0/css/all.css" />

    <link href="./css/styles.css" rel="stylesheet" />
  </head>
  <body class="nav-fixed">
    <nav class="topnav navbar navbar-expand shadow navbar-light bg-white" id="sidenavAccordion">
      <a class="navbar-brand d-none d-sm-block" href="index.php">
        <span style=" color:#045df0; font-size: 20px;">Pmax Cinemas</span>
      </a>
      <button class="btn btn-icon btn-transparent-dark order-1 order-lg-0 mr-lg-2" id="sidebarToggle" href="">
        <i data-feather="menu"></i>
      </button>
      <form class="form-inline mr-auto d-none d-lg-block">
        <input class="form-control form-control-solid mr-sm-2" type="search" placeholder="Search" aria-label="Search" />
      </form>

      <ul class="navbar-nav align-items-center ml-auto">
        <span>Welcome Admin</span>
        <span> </span>

        <li class="nav-item dropdown no-caret mr-4 dropdown-user">
          <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownUserImage" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img class="img-fluid" src="./images/Admin_sigin_icon.png" /></a>
          <div class="dropdown-menu dropdown-menu-right border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownUserImage">
            <a class="dropdown-item" href="logout.php">
              <div class="dropdown-item-icon"><i class="fal fa-sign-out"></i></div>
              Logout
            </a>
          </div>
        </li>
      </ul>
    </nav>
    <div id="layoutSidenav">
      <div id="layoutSidenav_nav">
        <nav class="sidenav shadow-right sidenav-dark">
          <div class="sidenav-menu">
            <div class="nav accordion" id="accordionSidenav">
              <div class="sidenav-menu-heading" style="padding: 1.1rem 0.65rem 0.75rem  !important;"></div>
              <a class="nav-link" href="index.php">
                <div class="nav-link-icon"><i class="fal fa-tachometer-alt"></i></div>
                Dashboard
              </a>

              <div class="sidenav-menu-heading" style="padding: 0.5rem 0.65rem 0.75rem  !important;">Interface</div>

              <a class="nav-link" href="change_movie.php">
                <div class="nav-link-icon"><i class="fal fa-projector"></i></div>
                Change Movie
              </a>


              <div class="sidenav-menu-heading" style="padding: 1.1rem 0.65rem 0.75rem  !important;">Pages</div>
              <a class="nav-link" href="bookings.php">
                <div class="nav-link-icon"><i class="fal fa-ticket-alt"></i></div>
                Bookings
              </a>
              <a class="nav-link" href="registered_users.php">
                <div class="nav-link-icon"><i class="fal fa-users"></i></div>
                Registered users
              </a>
              <a class="nav-link" href="testimonials.php">
                <div class="nav-link-icon"><i class="fab fa-squarespace"></i></div>
                Testimonials
              </a>
              <div class="sidenav-menu-heading" style="padding: 1.1rem 0.65rem 0.75rem  !important;">Utility</div>
              <a class="nav-link" href="queries.php">
                <div class="nav-link-icon"><i class="fal fa-question"></i></div>
                Queries
              </a>
              <a class="nav-link" href="update_contact.php">
                <div class="nav-link-icon"><i class="fal fa-phone-volume"></i></div>
                Update Contact
              </a>
            </div>

          </div>
        </nav>
      </div>


  <div id="layoutSidenav_content">
