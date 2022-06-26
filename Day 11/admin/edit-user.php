<?php  
  require_once('functions/function.php');
  get_header();
  get_sidebar();

  $id=$_GET['e'];
  $sel="SELECT * FROM users WHERE user_id='$id'";
  $Q=mysqli_query($conn,$sel);
  $data=mysqli_fetch_assoc($Q);

  if(!empty($_POST)){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $role = $_POST['role'];
    $image = $_FILES['pic'];

    $update="UPDATE users SET user_name='$name', user_phone='$phone', user_email='$email', role_id='$role' WHERE user_id='$id'";

    if(!empty($role)){
      // if($pw === $rpw){
      if(mysqli_query($conn,$update)){
        if($image['name']!=''){
          $imageName = 'user-'.time().'-'.rand(1000,100000000).'.'.pathinfo($image['name'], PATHINFO_EXTENSION);
          $updimg="UPDATE users SET user_photo='$imageName' WHERE user_id='$id'";
          if(mysqli_query($conn, $updimg)){
            move_uploaded_file($image['tmp_name'],'uploads/'.$imageName);
            echo "User information update successfully with images!";
          }
        }
        echo "User information update successfully!";
      }else{
        echo "Please select user role!";
      }
 
    }else{
    echo "User update failed!";
  }
  }

  ?>
    
<div class="row">
    <div class="col-md-12 main_content">
        <form method="POST" action="" enctype="multipart/form-data">
          <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-8">
                          <h4 class="card_header_title"><i class="fa fa-gg-circle"></i> Update User Information</h4>
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
                      <input type="text" class="form-control" id="" name="name" value="<?= $data['user_name'];?>">
                    </div>
                  </div> 
                  <div class="form-group row custom_form_group">
                    <label class="col-sm-3 col-form-label">User Name:</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" id="" name="username" value="<?= $data['user_username'];?>" disabled>
                    </div>
                  </div> 
                  <div class="form-group row custom_form_group">
                    <label class="col-sm-3 col-form-label">Email:</label>
                    <div class="col-sm-7">
                      <input type="email" class="form-control" id="" name="email" value="<?= $data['user_email'];?>">
                    </div>
                  </div> 
                  <div class="form-group row custom_form_group">
                    <label class="col-sm-3 col-form-label">Phone:</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" id="" name="phone" value="<?= $data['user_phone'];?>">
                    </div>
                  </div> 
                  <!-- <div class="form-group row custom_form_group">
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
                  </div>  -->
                  <div class="form-group row custom_form_group">
                    <label class="col-sm-3 col-form-label">User Role:</label>
                    <div class="col-sm-7">
                      <select class="form-control" name="role" id="">
                        <option value="">Select Role</option>
                        <?php
                          $selr="SELECT * FROM role ORDER BY role_id ASC";
                          $Qr=mysqli_query($conn,$selr);
                          while($urole=mysqli_fetch_assoc($Qr)){
                          ?>
                        <option value="<?= $urole['role_id'] ?>" <?php if($data['role_id']==$urole['role_id']){echo'selected';} ?> ><?= $urole['role_name'] ?></option>
                        <?php   } ?>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row custom_form_group">
                    <label class="col-sm-3 col-form-label">Photo Browse:</label>
                    <div class="col-sm-7">
                      <input type="file" class="form-control" id="" name="pic">
                    </div>
                    <div class="col-md-2">
                    <?php if($data['user_photo']!='') {?>
                        <img src="uploads/<?= $data['user_photo'] ?>" alt="" height="50px">
                        <?php }else{?>
                          <img src="uploads/avatar.png" alt="" height="50px">
                          <?php }?>
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
<?php get_footer(); ?>