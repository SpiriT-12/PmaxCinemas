<?php include 'includes/header.php'; ?>
<!-- Blue Background -->
<main>
  <div class="page-header pb-10 page-header-dark bg-gradient-primary-to-secondary">
    <div class="container-fluid">
      <div class="page-header-content">
        <h1 class="page-header-title">
          <div class="page-header-icon"><i class="fal fa-projector"></i></div>
          <span>Change Movies</span>
        </h1>
        <div class="page-header-subtitle">Change Movies to Auditorium from here. </div>
      </div>
    </div>
  </div>
  <!-- End of Blue Background -->

  <div class="container-fluid mt-n10 d-flex justify-content-center">
    <div class="col-md-8 col-sm-7 ">
      <div id="default">
        <div class="card mb-4">
          <div class="card-header">Assign Movie</div>
          <div class="card-body">
            <div class="sbp-preview">
              <div class="sbp-preview-content">

                <form method="POST" action="changeProcess.php">
                  <div class="row">
                    <div class="form-group form-inline col-4">
                      <label for="screen_code">Audi &nbsp </label>
                      <select class="form-control " id="screen_code" name="screencode">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                      </select>
                    </div>
                    <div class="form-group form-inline col-8">
                      <label for="">Movie &nbsp </label>
                      <input required type="text" class="form-control" id="movie_title" placeholder="Enter Movie Title" name="movie_title" value="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="">Trailer</label>
                    <input required type="url" class="form-control" id="movie_trailer" placeholder="Enter Trailer Link" name="movie_trailer">
                  </div>
                  <div class="form-group">
                    <label for="">Poster</label>
                    <input required type="url" class="form-control" id="movie_poster" placeholder="Enter Poster Link" name="movie_poster">
                  </div>
                  <div class="form-group">
                    <label for="">Description</label>
                    <textarea required maxlength="500" rows="3" type="text" class="form-control" id="movie_des" placeholder="Enter Movie Description" name="movie_des"></textarea>
                  </div>

                  <div class="col text-center">
                    <input type="submit" class="btn btn-outline-primary" name="change_movie" value="Change">
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php include 'includes/footer.php'; ?>