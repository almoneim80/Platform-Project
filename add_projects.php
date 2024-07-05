<?php 
require("con_db.php");
session_start();


if(isset($_POST['submit']))
{
    $img_name = $_FILES['pimg']['name'];
    $tmp_name = $_FILES['pimg']['tmp_name'];

      $Pname =$_POST['project_name'];              
      $pclass =$_POST['class'];             
      $pgender =$_POST['gender'];  
      $pdaam =$_POST['daam'];  
    
        if (empty($Pname))
        echo "<script>alert('الرجاء ادخال اسم المشروع');</script>";

        elseif(empty($pclass))
        echo "<script>alert('الرجاء اختيار الفئة المستهدفة');</script>";

        elseif(empty($pgender))
        echo "<script>alert('الرجاء اختيار الجنس المستهدف');</script>";

        elseif(empty($pdaam))
        echo "<script>alert('الرجاء اختيار نوع الدعم المطلوب');</script>";
		
		elseif(empty($img_name))
        echo "<script>alert('الرجاء ادخال صورة المشروع');</script>";
        
		else
        {
          $img_ex = pathinfo($img_name,PATHINFO_EXTENSION);
          
          $img_upload_path = 'uploads/'.$img_name;
        move_uploaded_file($tmp_name, $img_upload_path); 
             $sql = 'INSERT INTO projects(p_name, class, gender, daam, p_image) 
                           VALUES(:Pname, :pclass, :pgender, :pdaam,:img_name)';
			   
      $statement = $connection->prepare($sql);
        
      $statement->execute(array(
	  ':Pname' => $_POST['project_name'],
	  ':pclass' => $_POST['class'],
	  ':pgender' => $_POST['gender'],
	  ':pdaam' => $_POST['daam'],
	  ':img_name' => $img_name));
      
          if($statement->rowcount())
          {
                echo "<script>alert('تم اضافة مشروعك بنجاح');</script>";
                echo "<script>window.location.replace('asker_projects.php')</script>";
          }
      
        else
            echo "<script>alert('هناك خطأ');</script>";
      }
}
?>




<!DOCTYPE html>
<html dir="rtl">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>اضافة مشاريع</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/add-projects.css">
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
	 
          <form class="form"  method="POST" action = "add_projects.php" enctype="multipart/form-data">
                <h4>أضافة مشاريع</h4>
				
				<div class="signupbox">
                      <label for="Name" class="form-label">اسم المشروع</label>
                      <input type="text" name="project_name"  placeholder="اكتب اسم مشروعك"  autocomplete="on">

                      <label for="chooseGuests" class="form-label">الفئة المستهدفة</label>
                      <select name="class" class="form-select" aria-label="Default select example" id="chooseGuests" onChange="this.form.click()">
                          <option value="أطفال">أطفال</option>
                          <option value="انثى">شباب</option>
                          <option value="كبار">كبار</option>
                          <option value="كبار السن">كبار السن</option>
                          <option value="أخرى">أخرى</option>
                      </select>
					  
					  <label for="chooseGuests" class="form-label">الجنس المستهدف</label>
                      <select name="gender" class="form-select" aria-label="Default select example" id="chooseGuests" onChange="this.form.click()">
                          <option value="ذكور">ذكور</option>
                          <option value="اناث">اناث</option>
                          <option value="غير محدد">غير ذلك</option>
                          <option value="الكل">الكل</option>
                      </select>
					  
					  
					  <label for="chooseGuests" class="form-label">نوع الدعم المطلوب</label>
                      <select name="daam" class="form-select" aria-label="Default select example" id="chooseGuests" onChange="this.form.click()">
                          <option value="معنوي">معنوي</option>
                          <option value="مادي">مادي</option>
                      </select>

                      <input  id="file" class="image" type ="file" name="pimg">
					           <label for="file" class="label_img">أختر صورة</label>
                    <button type="submit" name="submit" class="button">أضافة</button>
					  </div>
					 </form> 
              </div>
            </div>
	</section>	
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
