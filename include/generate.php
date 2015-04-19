<?php

	
$error = '';
if(isset($_POST['submit'])){

    $activation_code = $_POST['activation_code'];
    
    
    
        $activation_query = "INSERT INTO `users`(`id`, `first_name`, `last_name`, `melli_code`, `email`, `mobile`, `city_id`, `province_id`, `address`, `password`, `register_date`) VALUES ('','$first_name','$last_name','$melli_code','$email','$mobile','$city_id','$provincce_id','$address','$password','$register_date')";
        $activation_result = mysqli_query($connection , $activation_query);
        if($user_result){
           /* $error = '
            <div class="alert alert-success alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <strong>کاربر گرامی !</strong> ثبت نام با موفقیت انجام شد . خوش آمدید
            </div>
            ';*/
			$user_login_query = "SELECT * FROM `users` WHERE `melli_code` = '$melli_code' AND `password` = '$password'";
				$user_login_result = mysqli_query($connection , $user_login_query);
				$user_login_row = mysqli_fetch_assoc($user_login_result);
				if($user_login_row){
					$_SESSION['MM_ID'] = $user_login_row['id'];
					header("Location: $prefix/page/user/mypage/");
			
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
	<div class="col-md-10 col-md-offset-1 contact">
    <div class="col-sm-5" style="margin-top:13px;">
    <?php if(isset($_GET['msg'])){ echo "<p class='text-center'> برای درج آگهی ابتدا باید ثبت نام کنید </p>"; } ?>
    	<div class="text-center panel panel-default" >
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
    
    <div class="col-sm-7">
		<h3 class="header-big">تایید کد فعالسازی</h3>
   		 <hr>
         <form class="form-horizontal" method="post">
  <div class="form-group">
    <label for="activation_code" class="col-sm-3 control-label pull-right">کد فعالسازی : </label>
    <div class="col-sm-9">
      <input type="text" class="form-control pull-right" name="activation_code" required>
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <input type="submit" name="submit" class="btn-submit" value="تایید کد فعالسازی">
    </div>
  </div>
</form>
		
   	 	</div>
        <div class="clearfix"></div>
        <?php echo $error; ?>
	</div>
<script>
	$("#province").change(function(){
		val = $("#province").val();
    $.post("<?php echo $prefix; ?>/include/province_ajax.php",{province : val},
    function(data, status){
		$('#city').removeAttr('disabled');
		$('#city').html(data);
    });
});
</script>