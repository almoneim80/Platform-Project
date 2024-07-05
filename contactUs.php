<?php
require 'con_db.php';                 

if (isset ($_POST['send']))
{   
      $_name =valid_input($_POST['name']);
      $_email =valid_input($_POST['email']);
      $_subject =valid_input($_POST['subject']);
      $_mssag =valid_input($_POST['msg']);
	  
	  
	   if (empty($_name))
               echo "<script>alert('الرجاء ادخل اسمك');</script>";

    
         elseif(empty($_email))
        echo "<script>alert('الرجاء ادخل عنوان بريدك الالكتروني');</script>";

    
          elseif(empty($_subject))
        echo "<script>alert('الرجاء اختيار موضوع');</script>";
		
		  elseif(empty($_mssag))
        echo "<script>alert('الرجاء ادخال نص الاستفسار او الرسالة');</script>";
		
		else{
			echo "<script>alert('شكراً لتواصلك معنا ..سيتم الرد على استفسارك في أقرب وقت');</script>";
                echo "<script>window.location.replace('index.php')</script>";
		}
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

    <title>تواصل بنا</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/contactUs.css">
    <link rel="stylesheet" href="assets/css/about.css">
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
                        <li><a href="abou.php">من نحن</a></li>
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
  <section class="section-contact">
  <h3>تواصل معنا</h3>
  </section>
  
  <section class="section-contact2">
  <form class="form" method="post" >
              <div class="login-sign">
                      
                      <input type="text" name="name"  placeholder="اكتب اسمك" autocomplete="on">
					  
            
                      
                      <input type="email" name="email"  placeholder="ادخل البريد الالكتروني" autocomplete="on">
					  
					  
                      <select name="subject" class="form-select" aria-label="Default select example" id="chooseGuests" onChange="this.form.click()">
					  <option >اختر موضوع</option>
                          <option >استفسار عام</option>
                          <option >شراكة</option>
                          <option >اقتراح</option>
                          <option >شكوى</option>
                      </select>
					  
					  <textarea name="msg" rows="10" cols="30" placeholder="الوصف"></textarea>
					  
                      <button class="main-button-login" name="send" type="submit">ارسال</button>
			  </div>
          </form>
  </section>

  
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