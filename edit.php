<?php 
require("con_db.php"); 
session_start();
ob_start();


if (isset ($_POST['edit_A']))
{   
      $A_fullname =valid_input($_POST['fullname']);
      $A_username =valid_input($_POST['username']);
      $A_password =valid_input($_POST['password']);
      $A_gender =valid_input($_POST['gender']);
      $A_section =valid_input($_POST['section']);
      $A_email =valid_input($_POST['email']);
      $A_date =valid_input($_POST['date']);
    
    
     if (empty($A_fullname))
               echo "<script>alert('الرجاء ادخال اسمك الكامل');</script>";

    
         elseif(empty($A_username))
        echo "<script>alert('الرجاء ادخال اسم المستخدم');</script>";

    
          elseif(empty($A_password))
        echo "<script>alert('الرجاء ادخال كلمة المرور');</script>";
    
    
    elseif(empty($A_gender))
        echo "<script>alert('الرجاء تحديد نوع الجنس');</script>";
		
		 elseif(empty($A_section))
        echo "<script>alert('الرجاء تحديد القسم ');</script>";
        
    
             elseif(empty($A_email))
        echo "<script>alert('الرجاء ادخال عنوان البريدالالكتروني');</script>";


 elseif(empty($A_date))
        echo "<script>alert('الرجاء ادخال عام التخرج');</script>";
		
    
     elseif(!filter_var($A_email, FILTER_VALIDATE_EMAIL))
      echo "<script>alert('الرجاء ادخال عنوان بريد الكتروني صالح');</script>";
        

 else
    {
     $sql = "UPDATE asker_table SET full_name = '$A_fullname', user_name = '$A_username', password = '$A_password', gender = '$A_gender',
	                                             section = '$A_section',email = '$A_email' ,year = '$A_date' WHERE user_name = '$A_username'" ; 
			   
      $statement = $connection->prepare($sql);
      $statement->execute();     
          if($statement->rowcount())
          {
			  $_SESSION['user_name']=$_POST['username'];
                echo "<script>alert('تم تعديل بياناتك بنجاح');</script>";
                echo "<script>window.location.replace('Account.php?action=A&u=".$_POST['username']."')</script>";
          }
      
        else
            echo "<script>alert('لم يتم التعديل');</script>";
 }
  }
  
  elseif(isset ($_POST['edit_D']))
  {
	  $A_fullname =valid_input($_POST['fullname']);
      $A_username =valid_input($_POST['username']);
      $A_password =valid_input($_POST['password']);
      $A_gender =valid_input($_POST['gender']);
      $A_email =valid_input($_POST['email']);
    
    
     if (empty($A_fullname))
               echo "<script>alert('الرجاء ادخال اسمك الكامل');</script>";

    
         elseif(empty($A_username))
        echo "<script>alert('الرجاء ادخال اسم المستخدم');</script>";

    
          elseif(empty($A_password))
        echo "<script>alert('الرجاء ادخال كلمة المرور');</script>";
    
    
    elseif(empty($A_gender))
        echo "<script>alert('الرجاء تحديد نوع الجنس');</script>";
		
        
    
             elseif(empty($A_email))
        echo "<script>alert('الرجاء ادخال عنوان البريدالالكتروني');</script>";

		
    
     elseif(!filter_var($A_email, FILTER_VALIDATE_EMAIL))
      echo "<script>alert('الرجاء ادخال عنوان بريد الكتروني صالح');</script>";
        

 else
    {
     $sql = "UPDATE daam_table SET full_name = '$A_fullname', user_name = '$A_username', password = '$A_password', gender = '$A_gender',
	                                            email = '$A_email' WHERE user_name = '$A_username'" ; 
			   
      $statement = $connection->prepare($sql);
      session_unset();
	  session_destroy();
	  session_start();
      $statement->execute();

          if($statement->rowcount())
          {
			  $_SESSION['user_name']=$_POST['username'];
                echo "<script>alert('تم تعديل بياناتك بنجاح');</script>";
                echo "<script>window.location.replace('Account.php?action=D&u=".$_POST['username']."')</script>";
          }
      
        else
            echo "<script>alert('لم يتم التعديل');</script>";
 }
	  
  }
  else
  {
	  echo "Error";
  }


function valid_input($data){                     // validation function
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

    <title>تعديل بياناتي</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/sign-up.css">
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
  <section class="section-signup">
     <div class="reservation-form">
					 <?php
					 if(isset($_GET['action']))
					 {
					 $t = $_GET['action'];
						if($t == 'A')
						{
						   $uname = $_SESSION['user_name'];
                           $sql=$connection->prepare("select * from asker_table where user_name='$uname'");
						   $sql->execute();
						   $sql = $sql->fetch(PDO::FETCH_ASSOC);
						   
				      echo"<form class='form'  method='post'><h4>تعديل بياناتي</h4><div class='signupbox'>
					  
                      <label for='Name' class='form-label'>الاسم الكامل</label>
                      <input type='text' name='fullname'  value=".$sql['full_name']." placeholder='اسمك الكامل الجديد' autocomplete='on' >

						<label for='Name' class='form-label'>الاسم الكامل</label>
                      <input type='text' name='username'  value=".$sql['user_name']." placeholder='اسم المستخدم الجديد' autocomplete='on' >

					 <label for='Name' class='form-label'>كلمة المرور</label>
                      <input type='text' name='password'  value=".$sql['password']." placeholder='كلمة المرور الجديدة' autocomplete='on' >

                      <label for='chooseGuests' class='form-label'>الجنس</label>
                      <select name='gender' class='form-select' aria-label='Default select example' id='chooseGuests' onChange='this.form.click()'>
                      <option value='ذكر'>ذكر</option><option value='انثى'>انثى</option><option value='غير ذلك'>غير ذلك</option></select>

                      <label for='chooseGuests' class='form-label'>القسم</label>
                      <select name='section' class='form-select' aria-label='Default select example' id='chooseGuests' onChange='this.form.click()'>
                      <option value='علوم الحاسب'>علوم الحاسب</option><option value='نظم معلومات'>نظم معلومات</option>
                      <option value='أمن سيبراني'>أمن سيبراني</option><option value='ذكاء اصطناعي'>ذكاء اصطناعي</option></select>

					  <label for='Name' class='form-label'>الاسم الكامل</label>
                      <input type='text' name='email'  value=".$sql['email']." placeholder='عنوان بريدك الالكتروني الجديد' autocomplete='on'>

                      <label for='Number' class='form-label'>عام التخرج</label><input type='date' name='date'> 
					
					  <div class='buttons'> <button class='main-button-sign' name='edit_A' type='submit'>تعديل</button>
                      <button class='main-button-sign'><a href='Account.php?action=A&u=".$uname."'>تراجع</a></button></div></div></form>";
						}
						else
						{
							$uname = $_SESSION['user_name'];
                           $sql=$connection->prepare("select * from daam_table where user_name='$uname'");
						   $sql->execute();
						   $sql = $sql->fetch(PDO::FETCH_ASSOC);
						   
				      echo"<form class='form'  method='post'><h4>تعديل بياناتي</h4><div class='signupbox'>
                      <label for='Name' class='form-label'>الاسم الكامل</label>
                      <input type='text' name='fullname'  value=".$sql['full_name']." placeholder='اسمك الكامل الجديد' autocomplete='on' >

                      <label for='Name' class='form-label'>اسم المستخدم</label>
                      <input type='text' name='username' value=".$sql['user_name']." placeholder='اسم المستخدم الجديد' autocomplete='on' >

                      <label for='Number' class='form-label'>كلمة المرور</label>
                      <input type='password' name='password'  value=".$sql['password']." placeholder='كلمة المرور الجديدة' autocomplete='on' >

                      <label for='chooseGuests' class='form-label'>الجنس</label>
                      <select name='gender' class='form-select' aria-label='Default select example' id='chooseGuests' onChange='this.form.click()'>
                      <option value='m'>ذكر</option><option value='f'>انثى</option><option value='f'>غير ذلك</option></select>

					  <label for='Number' class='form-label'>البريد الاالكتروني</label>
                      <input type='email' name='email' value=".$sql['email']." placeholder='عنوان البريد الالكتروني الجديد' class='date' >
					
					  <div class='buttons'> <button class='main-button-sign' name='edit_D' type='submit'>تعديل</button>
                      <button class='main-button-sign'><a href='Account.php?action=D&u=".$uname."'>تراجع</a></button></div></div></form>";
						}
					 }
					 else
					 {
						 echo "erorr";
					 }
					 ?>
              </div>
            </div>
	</section>	
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