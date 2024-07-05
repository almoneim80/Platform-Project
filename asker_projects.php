<?php
require 'con_db.php';                 
?>

<!DOCTYPE html>
<html dir="rtl">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>مشاريعي</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/projects.css">
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
                        <li><a href="contactUs.php">استشارات</a></li>
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
  <section class="project_section">
      <div class="project">
      <?php
        if(isset($_GET['action']))
        {
          $t = $_GET['action'];
          if($t == 'A')
          {
            echo"<h2>استعرض مشاريعك</h2>";
            $sql="select * from projects";
            $statement=$connection->prepare($sql);
            $statement -> execute();
      foreach($statement->fetchall() as $row)           
                   {
                   echo '
       <div class="box">
                   <div class="img-box">
                   <img src="uploads/'.$row['p_image'].'" alt="">
                   </div>
          
                  <div class="detail-box">
                  <p>- اسم المشروع:'.$row['p_name'].'</p>
                  <p> - فئة المشروع:  '.$row['class'].'</p>
                  <p>- الجنس المستهدف:'.$row['gender'].'</p>
                  <p>- الدعم المطلوب:'.$row['daam'].'</p>
                  </div>
         </div>';}
        echo" </div><div class='border-button'><a href='add_projects.php'>اضافة</a></div>";
          }
          else
          {
            echo"<h2>استعراض</h2>";
            $sql="select * from projects";
            $statement=$connection->prepare($sql);
            $statement -> execute();
      foreach($statement->fetchall() as $row)           
                   {
                   echo '
       <div class="box">
                   <div class="img-box">
                   <img src="uploads/'.$row['p_image'].'" alt="">
                   </div>
          
                  <div class="detail-box">
                  <p>- اسم المشروع:'.$row['p_name'].'</p>
                  <p> - فئة المشروع:  '.$row['class'].'</p>
                  <p>- الجنس المستهدف:'.$row['gender'].'</p>
                  <p>- الدعم المطلوب:'.$row['daam'].'</p>
                  <p><a href="index.php?daam=t">تقديم دعم</a></p>
                  </div>
         </div>
         ';}
          }
        }
     
		  ?>
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
