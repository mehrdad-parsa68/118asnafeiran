<?php

$error = '';
if(isset($_POST['submit'])){

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
	$melli_code = $_POST['melli_code'];
    $email = $_POST['email'];
	$mobile = $_POST['mobile'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];
    $register_date = time();
    if($password == $repassword){
        $user_query = "INSERT INTO `users`(`id`, `first_name`, `last_name`, `melli_code`, `email`, `mobile`, `password`, `register_date`) VALUES ('','$first_name','$last_name','$melli_code','$email','$mobile','$password','$register_date')";
        $user_result = mysqli_query($connection , $user_query);
        if($user_result){
            $error = '
            <div class="alert alert-success alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <strong>کاربر گرامی !</strong> ثبت نام با موفقیت انجام شد . خوش آمدید
            </div>
            ';
        }
    }else{
        $error = '
        <div class="alert alert-danger alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <strong>خطا!</strong> عدم تطابق کلمه عبور با تکرار آن .
        </div>
        ';
    }
}

?>
	<div class="col-md-8 col-md-offset-2 contact">
    <div class="col-sm-5" style="margin-top:93px;">
    <?php if(isset($_GET['msg'])){ echo "<p class='text-center'> برای درج آگهی ابتدا باید ثبت نام کنید </p>"; } ?>
    	<div class="text-center info panel panel-default">
            	<div class="panel-heading">امکانات وِیژه بانک مشاغل ایران</div>

				<div class="panel-body" dir="rtl">
                	
                	<p align="center">معرفی حرفه خود به صورت رایگان</p>
					<p align="center">امکان ارسال پیامک تبلیغاتی برای اصناف </p>
                    <p align="center">دسترسی به اطلاعات اصناف</p>
                    <p align="center">امکان ارسال وایبر تبلیغاتی برای اصناف</p>
                    <p align="center">امکان ارسال ایمیل تبلیغاتی برای اصناف</p>
					
                 
       		</div>
        </div>
    
    
</div>
    
    <div class="col-sm-6">
		<h2>ثبت نام در بانک مشاغل</h2>
   		 <hr>
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
      <input type="submit" name="submit" class="btn-submit" value="ثبت نام">
    </div>
  </div>
</form>
		
   	 	</div>
        <div class="clearfix"></div>
        <?php echo $error; ?>
	</div>
