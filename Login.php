<?php
require("con_db.php");

session_start();
if (isset ($_POST['login']))
{
    $_username=valid_input($_POST['username']);
    $pass1=valid_input($_POST['password1']);
    $pass2=valid_input($_POST['password2']);
    $type=valid_input($_POST['type']);
    $pass_enc=md5($pass2);
	
	
    $remember=$_POST['remember'];
if ($remember==1){
    setcookie('cookie_user', $_POST['username'], time() + 86400, "/"); // 86400(60*60*24) = 1 day
}
     if (empty($_username))
               echo "<script>alert('يرجى ادخال اسم المستخدم');</script>";
    
   elseif(empty($pass1))
               echo "<script>alert('يرجى ادخال كلمة المرور');</script>";
    
    elseif(empty($pass2))
               echo "<script>alert('يرجى تكرار كلمة المرور');</script>";
			   
			   elseif(empty($type))
               echo "<script>alert('يرجى تحديد نوع الحساب');</script>";
    
      elseif($pass1 !== $pass2)
        echo "<script>alert('كلمة المرور غير متطابقة');</script>";
	      else
		  {
							if($type == 1)
							{
								$sql="select * from daam_table where user_name='$_username'";
							$statement=$connection->prepare($sql);
							$statement->execute();
									if($statement->rowcount()>0)
									{
								   $_SESSION['user_name']=$_POST['username'];
								   $_SESSION['type'] = $_POST['type'];
								   echo "<script>alert('مرحبا بك مرة أخرى');</script>";
										header("location:index.php?action=1");
										
									}		
									else
									{
										echo "<script>alert('يرجى انشاء حساب ان كنت لا تمتلك حساباً');</script>";
										echo "<script>window.location.replace('Login.php')</script>";
									}
							}
							else{
								$sql="select * from asker_table where user_name='$_username'";
								$statement=$connection->prepare($sql);
								$statement->execute();
										if($statement->rowcount()>0)
										{
									   $_SESSION['user_name']=$_POST['username'];
									   $_SESSION['type'] = $_POST['type'];
									   echo "<script>alert('مرحبا بك مرة أخرى');</script>";
											header("location:index.php?action=2");
										}	
										else
										{
											echo "<script>alert('يرجى انشاء حساب ان كنت لا تمتلك حساباً');</script>";
											echo "<script>window.location.replace('Login.php')</script>";
										}
							}
		  }
}

  function valid_input($data)            // validation function
{                    
  $data=trim($data);
  $data=stripcslashes($data);
  $data=htmlspecialchars($data);
  return $data;
}
?>





<!DOCTYPE html>
<html dir="rtl">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>تسجيل الدخول</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logo">
                        <img src="assets/images/logo.png" alt="">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="index.php" class="active">الرئيسية</a></li>
                        <li><a href="about.php">من نحن</a></li>
                        <li><a href="contactUs.php">تواصل بنا</a></li>
                        
                    </ul>  		
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->
  
  
   <!-- ***** body Area Start ***** -->
<section class="section-login">
     <div class="reservation-form">
          <form class="form" method="post" >
                <h4>تسجيل الدخول</h4>
              <div class="login-sign">
                      <label for="Name" class="form-label">أسم المستخدم</label>
                      <input type="text" name="username"  placeholder="اكتب اسم المستخدم هنا" autocomplete="on" >
					  
            
                      <label for="Name" class="form-label">كلمة المرور</label>
                      <input type="password" name="password1"  placeholder="اكتب كمة المرور" autocomplete="on" >
					  

                      <label for="Name" class="form-label">تأكيد كلمة المرور</label>
                      <input type="password" name="password2"  placeholder="تكرار كلمة المرور" autocomplete="on">
					  
					  <label for="chooseGuests" class="form-label">نوع الحساب</label>
                      <select name="type" class="form-select" aria-label="Default select example" id="chooseGuests" onChange="this.form.click()">
                          <option value="1">داعم</option>
                          <option value="2">طالب دعم</option>
                      </select>
					  
					  <div class="chk">
					  <input id="check" class="check" type="checkbox" name="remember" value="1" checked>
					  <label class="check"><span class="icon">تذكرني</span> </label>
					  </div>
					  
						<div class="buttons">
                      <button class="main-button-sign" name="login">دخول</button>
                      <button class="main-button-sign"><a href="AccountType.php?action=new">مستخدم جديد</a></button>
					  </div>
			  </div>
          </form>
        </div>
		</section>
		<!-- ***** body Area End ***** -->
		
		
		<!-- ***** footer Area Start ***** -->
<div class="call-to-action">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <h2>هل تبحث عن تمويل مشروعك؟</h2>
          <h4>فقط تواصل بخدمة العملاء</h4>
        </div>
        <div class="col-lg-4">
          <div class="border-button">
            <a href="contactUs.php">تواصل بنا</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>جميع الحقوق محفوظة 2023</p>
        </div>
      </div>
    </div>
  </footer>

<!-- ***** footer Area End ***** -->
  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/wow.js"></script>
  <script src="assets/js/tabs.js"></script>
  <script src="assets/js/popup.js"></script>
  <script src="assets/js/custom.js"></script>

  <script>
    function bannerSwitcher() {
      next = $('.sec-1-input').filter(':checked').next('.sec-1-input');
      if (next.length) next.prop('checked', true);
      else $('.sec-1-input').first().prop('checked', true);
    }

    var bannerTimer = setInterval(bannerSwitcher, 5000);

    $('nav .controls label').click(function() {
      clearInterval(bannerTimer);
      bannerTimer = setInterval(bannerSwitcher, 5000)
    });
  </script>

  </body>

</html>
