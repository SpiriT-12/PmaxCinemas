<?php
include 'includes/header.php';

?>

<!-- Blue Background -->
<main>
  <div class="page-header pb-10 page-header-dark bg-gradient-primary-to-secondary">
    <div class="container-fluid">
      <div class="page-header-content">
        <h1 class="page-header-title">
          <div class="page-header-icon"><i class="fal fa-users"></i></div>
          <span>Registered Users</span>
        </h1>
        <div class="page-header-subtitle">Check out the details of the Registred Users. </div>
      </div>
    </div>
  </div>
  <!-- End of Blue Background -->

  <!-- Row container on blue Background -->
  <div class="container-fluid mt-n10">
    <div class="col-lg-9 col-md-9 container-fluid" >
      <div id="default">
        <div class="card mb-4">
          <div class="card-header">User Details</div>
            <div class="card-body">
                  <div class="datatable table-responsive">
                    <table class="table table-bordered table-hover" id="dataTable" cellspacing="0">
                        <thead>
                            <tr>
                              <th>ID</th>
                              <th>User Name</th>
                              <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php
                            $selectquery = "select * from userinfo";
                            $query= mysqli_query($conn,$selectquery);
                            $nums=mysqli_num_rows($query);
                            while ($res=mysqli_fetch_array($query)) {
                           ?>
                          <tr>
                            <td><?php echo $res['id'] ?></td>
                            <td><?php echo $res['firstName']?>&nbsp<?php echo $res['lastName']?></td>
                            <td><?php echo $res['email'] ?></td>
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
<?php include 'includes/footer.php';?>
