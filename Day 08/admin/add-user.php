<?php  
  require_once('functions/function.php');
  get_header();
  get_sidebar();

  if(!empty($_POST)){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $pw = $_POST['pass'];
    $rpw = $_POST['re-pass'];

    $insert = "INSERT INTO users(user_name, user_phone, user_email, user_username, user_password) 
    VALUES('$name', '$phone','$email', '$username', '$pw' )";

    if(mysqli_query($conn,$insert)){
      echo "User registration success!";
    }else{
      echo "User registration failed!";
    };

  }


  ?>
    
<div class="row">
    <div class="col-md-12 main_content">
        <form method="POST" action="" enctype="multipart/form-data">
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
                      <input type="text" class="form-control" id="" name="name">
                    </div>
                  </div> 
                  <div class="form-group row custom_form_group">
                    <label class="col-sm-3 col-form-label">User Name:</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" id="" name="username">
                    </div>
                  </div> 
                  <div class="form-group row custom_form_group">
                    <label class="col-sm-3 col-form-label">Email:</label>
                    <div class="col-sm-7">
                      <input type="email" class="form-control" id="" name="email">
                    </div>
                  </div> 
                  <div class="form-group row custom_form_group">
                    <label class="col-sm-3 col-form-label">Phone:</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" id="" name="phone">
                    </div>
                  </div> 
                  <div class="form-group row custom_form_group">
                    <label class="col-sm-3 col-form-label">Password:</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" id="" name="pass">
                    </div>
                  </div> 
                  <div class="form-group row custom_form_group">
                    <label class="col-sm-3 col-form-label">Confirm Password:</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" id="" name="re-pass">
                    </div>
                  </div> 
                  <div class="form-group row custom_form_group">
                    <label class="col-sm-3 col-form-label">User Role:</label>
                    <div class="col-sm-7">
                      <select name="" id="">
                        <option value="">Select Role</option>
                        <option value="">Admin</option>
                        <option value="">Super Admin</option>
                        <option value="">General User</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row custom_form_group">
                    <label class="col-sm-3 col-form-label">Photo Browse:</label>
                    <div class="col-sm-7">
                      <input type="file" class="form-control" id="" name="">
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
<?php get_footer(); ?>