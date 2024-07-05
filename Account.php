<?php require("con_db.php"); 
session_start();
ob_start();
?>

<!DOCTYPE html>
<html dir="rtl">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>بيانات الحساب</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/Account.css">
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
  
<section class="section-account">

              <div class="box">
			  
					<?php
					echo '<div class="account_icon" title="تسجيل الخروج"><a href="Logout.php"><img src="assets/images/out.png" alt=""></a></div>';
					$t = $_GET['action'];
						if($t == 'D')
						{
						   $uname = $_GET['u'];
                           $sql=$connection->prepare("select * from daam_table where user_name='$uname'");
						   $sql->execute();
						   $sql = $sql->fetch(PDO::FETCH_ASSOC);
                      
									   echo"<h4>معلومات الحساب</h4>";
									  echo"<h5>".$sql['user_name']."</h5>";

										echo"  <label>الاسم الكامل :</label>";
										echo"  <span >".$sql['full_name']."</span>";
										 echo" <br>";

										  echo"<label >الجنس :</label>";
										 echo" <span >".$sql['gender']."</span>";
										  echo"<br>";
										  
										  
										  echo"<label>البريد الالكتروني :</label>";
										  echo"<span >".$sql['email']."</span>";
										  echo"<br>";

										  echo"<label >نوع الحساب :</label>";
										  echo"<span >داعم</span>";
										  echo"<br>";
										  echo "<div class='buttons'> <button> <a href='edit.php?action=D&u=".$uname."'>تعديل بياناتي</a></button><button><a href='reservation.html'></a>مشاريعي</button> </div>";
										  
						}
						else
						{
							
							$uname = $_GET['u'];
                           $sql=$connection->prepare("select * from asker_table where user_name='$uname'");
						   $sql->execute();
						   $sql = $sql->fetch(PDO::FETCH_ASSOC);
                      
									   echo"<h4>معلومات الحساب</h4>";
									  echo"<h5>".$sql['user_name']."</h5>";
	
										echo"  <label>الاسم الكامل :</label>";
										echo"  <span >".$sql['full_name']."</span>";
										 echo" <br>";

										  echo"<label >الجنس :</label>";
										 echo" <span >".$sql['gender']."</span>";
										  echo"<br>";
										  
										  echo"<label >القسم :</label>";
										 echo" <span >".$sql['section']."</span>";
										  echo"<br>";
										  
										  
										  echo"<label>البريد الالكتروني :</label>";
										  echo"<span >".$sql['email']."</span>";
										  echo"<br>";
										  
										  echo"<label>عام التخرج:</label>";
										  echo"<span >".$sql['year']."</span>";
										  echo"<br>";

										  echo"<label >نوع الحساب :</label>";
										  echo"<span >طالب دعم</span>";
										  echo"<br>";
										  
										  echo "<div class='buttons'> <button> <a href='edit.php?action=A&u=".$uname."'>تعديل بياناتي</a></button><button><a href='reservation.html'></a>مشاريعي</button> </div>";
						}     
					?>
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
    $(".option").click(function(){
      $(".option").removeClass("active");
      $(this).addClass("active"); 
    });
  </script>

  </body>

</html>
