<?php include 'includes/header.php';?>

<!-- Blue Background -->
<main>
  <div class="page-header pb-10 page-header-dark bg-gradient-primary-to-secondary">
    <div class="container-fluid">
      <div class="page-header-content">
        <h1 class="page-header-title">
          <div class="page-header-icon"><i class="fal fa-question"></i></div>
          <span>Queries</span>
        </h1>
        <div class="page-header-subtitle">Check out the queries of the user and reply them through Mail. </div>
      </div>
    </div>
  </div>
  <!-- End of Blue Background -->

  <!-- Row container on blue Background -->
  <div class="container-fluid mt-n10">
    <div class="col-lg-9 col-md-9 container-fluid" >
      <div id="default">
        <div class="card mb-4">
          <div class="card-header">Queries</div>
            <div class="card-body">
                  <div class="datatable table-responsive">
                    <table class="table table-bordered table-hover" id="dataTable" cellspacing="0">
                        <thead>
                            <tr>
                              <th>Name</th>
                              <th>Email</th>
                              <th>contact No</th>
                              <th>Message</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php
                            // $selectquery = "select * from userinfo";
                            // $query= mysqli_query($conn,$selectquery);
                            // $nums=mysqli_num_rows($query);
                            // while ($res=mysqli_fetch_array($query)) {
                           ?>
                          <tr>
                            <td>Praveen</td>
                            <td>praveen@gmail.com</td>
                            <td>789456123</td>
                            <td>I Want to Know the Coupen Codes.</td>
                          </tr>
                          <tr>
                            <td>Spirit</td>
                            <td>spirit@gmail.com</td>
                            <td>8547961230</td>
                            <td>I Want totalk to you about the Advertisment.</td>
                          </tr>
                          <tr>
                            <td>Arrow</td>
                            <td>arrow@gmail.com</td>
                            <td>879546213</td>
                            <td>I am fed of this project.</td>
                          </tr>
                        <?php
                      // }
                         ?>
                        </tbody>
                    </table>
                  </div>
                </div>
          </div>
        </div>
      </div>
    </div>

<?php
include 'includes/footer.php';

?>
