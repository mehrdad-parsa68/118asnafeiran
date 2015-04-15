<?php
if(!isset($_SESSION['MM_ID'])){
	header('Location: index.php?page=signup&msg=failed');
}
 $id = $_SESSION['MM_ID'];
 $user_query = "SELECT * FROM `users` WHERE id = $id ";
 $user_result = mysqli_query($connection,$user_query);
 $user_row =  mysqli_fetch_assoc($user_result);
 #######################################################
 $advertise_query = "SELECT * FROM `advertises` WHERE user_id = $id";
 $advertise_result = mysqli_query($connection,$advertise_query);
 $advertise_row =  mysqli_fetch_assoc($advertise_result);
?>

<div class="col-xs-12">
	<h2>پنل مدیریت بانک مشاغل ایران</h2>
    <hr class="hr-beauty">
    <div class="col-xs-4">
    <h3><i class="fa fa-user"></i> اطلاعات شخصی : </h3>
    <hr class="hr-beauty">
	<p> نام کاربر : <?php echo "$user_row[first_name]"." "."$user_row[last_name]"; ?> </p>
    <p> کد ملی : <?php echo "$user_row[melli_code]"; ?> </p>
    <p> ایمیل : <?php echo "$user_row[email]"; ?> </p>
    <p> موبایل : <?php echo "$user_row[mobile]"; ?> </p>
    <p> پسورد : <?php echo "*******"; ?> </p>
    <button type="button" class="btn btn-submit" data-toggle="modal" data-target="#myModal">
  ویرایش اطلاعات شخصی
</button>
</div>

<div class="col-xs-4">
    <h3><i class="fa fa-user"></i> اطلاعات شغلی : </h3>
    <hr class="hr-beauty">
    <?php 
		if(!isset($advertise_row)){
			echo "
				<p>شما هنوز اطلاعاتی وارد نکرده اید. در صورت نیاز <a href='?page=add'>کلیک</a> کنید.</p>
			";
			}
			
	?>
	<p> نام کاربر : <?php echo "$advertise_row[first_name]"." "."$user_row[last_name]"; ?> </p>
    <p> کد ملی : <?php echo "$advertise_row[melli_code]"; ?> </p>
    <p> ایمیل : <?php echo "$advertise_row[email]"; ?> </p>
    <p> موبایل : <?php echo "$advertise_row[mobile]"; ?> </p>
    <p> ایمیل : <?php echo "$advertise_row[email]"; ?> </p>
    <p> موبایل : <?php echo "$advertise_row[mobile]"; ?> </p>
    <button type="button" class="btn btn-submit" data-toggle="modal" data-target="#myModal">
  ویرایش اطلاعات شخصی
</button>
</div>


<div class="col-xs-4">
    <h3><i class="fa fa-user"></i> اطلاعات شخصی : </h3>
    <hr class="hr-beauty">
	<p> نام کاربر : <?php echo "$user_row[first_name]"." "."$user_row[last_name]"; ?> </p>
    <p> کد ملی : <?php echo "$user_row[melli_code]"; ?> </p>
    <p> ایمیل : <?php echo "$user_row[email]"; ?> </p>
    <p> موبایل : <?php echo "$user_row[mobile]"; ?> </p>
    <p> پسورد : <?php echo "*******"; ?> </p>
    <button type="button" class="btn btn-submit" data-toggle="modal" data-target="#myModal">
  ویرایش اطلاعات شخصی
</button>
</div>
</div>


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"> ویرایش اطلاعات شخصی </h4>
      </div>
      <div class="modal-body">
      	<form class="form-horizontal" method="post">
  <div class="form-group">
    <label for="first_name" class="col-sm-3 control-label pull-right">نام</label>
    <div class="col-sm-9">
      <input type="text" class="form-control pull-right" name="first_name" required>
    </div>
  </div>
  <div class="form-group">
    <label for="last_name" class="col-sm-3 control-label pull-right">نام خانوادگی</label>
    <div class="col-sm-9">
      <input type="text" class="form-control pull-right" name="last_name" required>
    </div>
  </div>
   <div class="form-group">
    <label for="melli_code" class="col-sm-3 control-label pull-right">کد ملی</label>
    <div class="col-sm-9">
      <input type="text" class="form-control pull-right" name="melli_code" required>
    </div>
  </div>
   <div class="form-group">
    <label for="email" class="col-sm-3 control-label pull-right">ایمیل</label>
    <div class="col-sm-9">
      <input type="email" class="form-control pull-right" name="email">
    </div>
  </div>
   <div class="form-group">
    <label for="mobile" class="col-sm-3 control-label pull-right">تلفن همراه</label>
    <div class="col-sm-9">
      <input type="text" class="form-control pull-right" name="mobile" required>
    </div>
  </div>
  <div class="form-group">
    <label for="password" class="col-sm-3 control-label pull-right">رمز عبور</label>
    <div class="col-sm-9">
      <input type="password" class="form-control pull-right" name="password" required>
    </div>
  </div>
  <div class="form-group">
    <label for="repassword" class="col-sm-3 control-label pull-right">تکرار رمز عبور</label>
    <div class="col-sm-9">
      <input type="password" class="form-control pull-right" name="repassword" required>
    </div>
  </div>
 	<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
    
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <input type="submit" name="submit" class="btn-submit" value="ثبت تغییرات">
    </div>
  </div>
</form>
      </div>
     
    </div>
  </div>
</div>