<?php  
  require_once('functions/function.php');
  get_header();
  get_sidebar();
  $id=$_GET['v'];
  $sel="SELECT * FROM users WHERE user_id='$id'";
  $Q=mysqli_query($conn,$sel);
  $data=mysqli_fetch_assoc($Q);
  ?>
<div class="row">
    <div class="col-md-12 main_content">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-8">
                        <h4 class="card_header_title"><i class="fa fa-gg-circle"></i> View Data</h4>
                    </div>
                    <div class="col-md-4 text-right">
                        <a class="btn btn-sm btn-dark card_top_btn" href="all-user.php"><i class="fa fa-th"></i> User list</a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <table class="table table-bordered table-striped table-hover custom_view_table">
                            <tr>
                                <td>Name</td>
                                <td>:</td>
                                <td><?= $data['user_name'] ?></td>
                            </tr>
                            <tr>
                                <td>Phone</td>
                                <td>:</td>
                                <td><?= $data['user_phone'] ?></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>:</td>
                                <td><?= $data['user_email'] ?></td>
                            </tr>
                            <tr>
                                <td>Username</td>
                                <td>:</td>
                                <td><?= $data['user_username'] ?></td>
                            </tr>
                            <tr>
                                <td>Photo</td>
                                <td>:</td>
                                <td>
                                    <?php if($data['user_photo']!='') {?>
                                    <img src="uploads/<?= $data['user_photo'] ?>" alt="" height="100px">
                                    <?php }else{?>
                                    <img src="uploads/avatar.png" alt="" height="50px">
                                    <?php }?>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
            <div class="card-footer text-center">
                .
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>