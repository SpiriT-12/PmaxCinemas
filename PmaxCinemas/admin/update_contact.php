<?php
include 'includes/header.php';
?>

<!-- Blue Background -->
<main>
  <div class="page-header pb-10 page-header-dark bg-gradient-primary-to-secondary">
    <div class="container-fluid">
      <div class="page-header-content">
        <h1 class="page-header-title">
          <div class="page-header-icon"><i class="fal fa-phone-volume"></i></div>
          <span>Contact Update</span>
        </h1>
        <div class="page-header-subtitle">Update the contact us details from here. </div>
      </div>
    </div>
  </div>
  <!-- End of Blue Background -->

  <div class="container-fluid mt-n10 d-flex justify-content-center">
    <div class="col-md-8 col-sm-7 ">
      <div id="default">
        <div class="card mb-4">
          <div class="card-header">Update Contact info</div>
          <div class="card-body">
            <div class="sbp-preview">
              <div class="sbp-preview-content">
                <form method="POST" action="  ">
                  <div class="form-group">
                    <label>Contact Number</label>
                    <input required type="text" class="form-control" id="contact-no" placeholder="Enter Contact No" name="contact-no" value="">
                  </div>
                  <div class="form-group">
                    <label>Email ID</label>
                    <input required type="email" class="form-control" id="email" placeholder="Enter E-mail" name="email">
                  </div>
                  <div class="form-group">
                    <label for="">Address</label>
                    <input required type="text" class="form-control" id="address" placeholder="Enter Address" name="address">
                  </div>
                  <div class="col text-center">
                    <input type="submit" class="btn btn-outline-primary" name="contact-info" value="Change">
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

      <?php include 'includes/footer.php'; ?>