<?php include 'includes/header.php'; ?>

<!-- Blue Background -->
<main>
  <div class="page-header pb-10 page-header-dark bg-gradient-primary-to-secondary">
    <div class="container-fluid">
      <div class="page-header-content">
        <h1 class="page-header-title">
          <div class="page-header-icon"><i class="fal fa-ticket-alt"></i></div>
          <span>Manage Bookings</span>
        </h1>
        <div class="page-header-subtitle">Manage Bookings from here. </div>
      </div>
    </div>
  </div>
  <!-- End of Blue Background -->

  <!-- Row container on blue Background -->
  <div class="container-fluid mt-n10">
    <div class="col-lg-9 col-md-9 container-fluid" >
      <div id="default">
        <div class="card mb-4">
          <div class="card-header">Manage Movie</div>
            <div class="card-body">
                  <div class="datatable table-responsive">
                    <table class="table table-bordered table-hover" id="dataTable" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Booking ID</th>
                                <th>User</th>
                                <th>Movie</th>
                                <th>Audi</th>
                                <th>Seat</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php
                            $selectquery = "select * from bookings inner join userinfo on bookings.user_id = userinfo.id";
                            $query= mysqli_query($conn,$selectquery);
                            $nums=mysqli_num_rows($query);
                            while ($res=mysqli_fetch_array($query)) {
                           ?>
                          <tr>
                            <td><?php echo $res['booking_id'] ?></td>
                            <td><?php echo $res['firstName']?>&nbsp<?php echo $res['lastName']?></td>
                            <td><?php echo $res['movietitle'] ?></td>
                            <td><?php echo $res['screencode'] ?></td>
                            <td><?php echo $res['seat_id'] ?></td>

                            <td>
                            <div class="text-center">
                            <a href="delete.php?booking_id=<?php echo $res['booking_id'] ?>" class="btn btn-datatable btn-icon btn-transparent-dark"> <i class="fal fa-trash-alt fa-lg"></i></a>
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
