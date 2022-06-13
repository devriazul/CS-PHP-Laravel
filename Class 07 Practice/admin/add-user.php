<?php require_once('include/header.php'); ?>
<?php require_once('include/sidebar.php'); ?>
    
<div class="row">
    <div class="col-md-12 main_content">
        <form>
          <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-8">
                          <h4 class="card_header_title"><i class="fa fa-gg-circle"></i> User Registration</h4>
                    </div>
                    <div class="col-md-4 text-right">
                        <a class="btn btn-sm btn-dark card_top_btn" href="all-user.php"><i class="fa fa-th"></i> All user</a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="card-body">
                  <div class="form-group row custom_form_group">
                    <label class="col-sm-3 col-form-label">Name:</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" id="" name="">
                    </div>
                  </div> 
                  <div class="form-group row custom_form_group">
                    <label class="col-sm-3 col-form-label">Email:</label>
                    <div class="col-sm-7">
                      <input type="email" class="form-control" id="" name="">
                    </div>
                  </div> 
            </div>
            <div class="card-footer text-center">
                <button type="submit" class="btn btn-sm btn-dark submit_btn">REGISTRATION</button>
            </div>
          </div>
      </form>
    </div>
</div>
<?php require_once('include/footer.php') ?>