<?php require("con_db.php"); 
session_start();
?>


<!DOCTYPE html>
<html dir="rtl">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>الرئيسية</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/index.css">
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
                    <a class="logo">
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
  </header>
  <!-- ***** Header Area End ***** -->
<!-- ***** ****************************************************************************** ***** -->
  <!-- ***** Main Banner Area Start ***** -->
  <section id="section-1">
  
	<h4>منصات تبسط طلبك للتمويل والوصول للفرص<h4/>
	
	<div class="boxess">
	

	<div class="box">
	
		<div class="box-button">
		<?php
    if(isset($_GET['daam']))
    {
      echo "<script>alert('شكرا على دعمك');</script>";
    }
		if(isset($_SESSION['user_name']) || isset($_SESSION['type']))
		{
			$userType = $_SESSION['type'];
			$username = $_SESSION['user_name'];
			if($userType == 1)
			echo '<div class="account_icon" title="حساب طالب الدعم"><a href="Account.php?action=D&u='.$username.'"><img src="assets/images/Assign.png" alt=""></a></div>';
			else
				echo "<div class='box-button'><div class='btn1'></div><div class='btn2'></div><div class='btn3'></div></div>";
		}
		else
		{
			echo '<div class="account_icon" title="تسجيل الدخول للحساب"><a href="Login.php"><img src="assets/images/Employee.png" alt=""></a></div>';
		}
		?>	
		  </div>
		  
	<h4>الداعم</h4>
	
	<p>الداعمين هم حجر اساس المشاريع الناجحه ومحطة البداية الحقيقية حيث انهم اساس التتويج لتلك المشاريع والافكار المختلفه كي تكون نجاحاً واقعياً تعيشه الجهه الداعمة وأصحاب المشاريع أيضاً .</p>
	<?php
  echo" <div class='BTN'>
       <div class='daam-login1'><a href='Login.php'>تسجيل دخول</a></div>
      <div class='daam-login2'><a href='asker_projects.php?action=D'>استعراض</a></div></div>";
  ?>
	</div>

	
	
	

	<div class="box2">
	<div class="box-button">
		<?php
		if(isset($_SESSION['user_name']) || isset($_SESSION['type']))
		{
			$userType = $_SESSION['type'];
			$username = $_SESSION['user_name'];
			if($userType == 2)
			echo '<div class="account_icon" title="حساب طالب الدعم"><a href="Account.php?action=A&u='.$username.'"><img src="assets/images/Assign.png" alt=""></a></div>';
			else
				echo "<div class='box-button'><div class='btn1'></div><div class='btn2'></div><div class='btn3'></div></div>";
		}
		else
		{
			echo '<div class="account_icon" title="تسجيل الدخول للحساب"><a href="Login.php"><img src="assets/images/Employee.png" alt=""></a></div>';
		}
		?>
		  </div>
	<h4>طالب الدعم</h4>
	<p>ما زالت هناك عوائق تعيق أصحاب المشاريع والافكار المدروسة وطالبي الدعم هم أصحاب مشاريع وافكار مدروسة لم يتسنى لهم تحقيقها بسبب انعدام الدعم المادي والاستشاري او الارشادي اللازم لاستكمال تلك المشاريع وتنفيذها حتى يروها تزهر على أرض الواقع .</p>
	<?php
  echo" <div class='BTN2'>
       <div class='daam-login1'><a href='Login.php'>تسجيل دخول</a></div>
      <div class='daam-login2'><a href='asker_projects.php?action=A'>استعراض</a></div></div>";
  ?>
	</div>

	
	
	</div>
  </section>
  <!-- ***** Main Banner Area End ***** -->
  
  

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