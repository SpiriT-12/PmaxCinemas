<?php include 'includes/header.php'; ?>

<!-- Blue Background -->
<main>
  <div class="page-header pb-10 page-header-dark bg-gradient-primary-to-secondary">
    <div class="container-fluid">
      <div class="page-header-content">
        <h1 class="page-header-title">
          <div class="page-header-icon"><i class="fab fa-squarespace"></i></div>
          <span>Testimonials</span>
        </h1>
        <div class="page-header-subtitle">Manage Testimonials / Feedback from here. </div>
      </div>
    </div>
  </div>
  <!-- End of Blue Background -->

  <!-- Row container on blue Background -->
  <div class="container-fluid mt-n10">
    <div class="col-lg-9 col-md-9 container-fluid">
      <div id="default">
        <div class="card mb-4">
          <div class="card-header">Testimonials</div>
          <div class="card-body">
            <div class="datatable table-responsive">
              <table class="table table-bordered table-hover" id="dataTable" cellspacing="0">
                <thead>
                  <tr>
                    <th>Customer Name</th>
                    <th>Booking Id</th>
                    <th>Rating</th>
                    <th>Feedback</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $selectquery = "select * from feedbackform";
                    $query= mysqli_query($conn,$selectquery);
                    $nums=mysqli_num_rows($query);
                    while ($res=mysqli_fetch_array($query)) {
                  ?>
                  <tr>
                    <td><?php echo $res['username']?></td>
                    <td><?php echo $res['booking_id'] ?></td>
                    <td><?php echo $res['rating'] ?>&nbsp <i class="fad fa-star"></i></td>
                    <td><?php echo $res['feedback'] ?></td>
                    <td>
                      <div class="text-center">
                        <a href="delete.php?feedid=<?php echo $res['feedid'] ?>" class="btn btn-datatable btn-icon btn-transparent-dark"> <i class="fal fa-trash-alt fa-lg"></i></a>
                      </div>
                    </td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include 'includes/footer.php'; ?>
