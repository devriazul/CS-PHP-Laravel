<?php 
  require_once('functions/function.php');
  get_header();
  get_sidebar();
?>

  <div class="row">
      <div class="col-md-12 main_content">
          <form>
            <div class="card">
              <div class="card-header">
                  <div class="row">
                      <div class="col-md-8">
                            <h4 class="card_header_title"><i class="fa fa-gg-circle"></i> Edit Form</h4>
                      </div>
                      <div class="col-md-4 text-right">
                          <a class="btn btn-sm btn-dark card_top_btn" href="all-user.php"><i class="fa fa-th"></i> All User</a>
                      </div>
                      <div class="clearfix"></div>
                  </div>
              </div>
              <div class="card-body">
              <?php 
                    $sel = "SELECT * FROM users";
                    $Q = mysqli_query($conn,$sel);
                    $data = mysqli_fetch_assoc($Q);
                    ?>
                  <div class="form-group row custom_form_group">
                      <label class="col-sm-3 col-form-label">Name:</label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control" id="" name="" value="<?php echo $data['user_name'] ?>">
                      </div>
                    </div> 
                    <div class="form-group row custom_form_group">
                      <label class="col-sm-3 col-form-label">Email:</label>
                      <div class="col-sm-7">
                        <input type="email" class="form-control" id="" name="" value="<?= $data['user_email'] ?>" disabled>
                      </div>
                    </div> 
              </div>
              <div class="card-footer text-center">
                  <button type="submit" class="btn btn-sm btn-dark submit_btn">Update</button>
              </div>
            </div>
        </form>
      </div>
  </div>
  <?php
    get_footer();
  
  ?>