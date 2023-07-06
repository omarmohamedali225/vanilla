<?php

include('config.php');
?>


<!DOCTYPE html>
<html lang="ar" dir="rtl">
<?php include('./head.php') ?>

<body>

  <!-- start -->
  <div class="vanilla">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg sticky-top">
      <div class="container">
        <a class="navbar-brand fw-bold" href="#"><img src="./assets/images/logoweb.png" alt="logo" class="img-fluid"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span></span>
          <span></span>
          <span></span>
        </button>
        <li class="nav-item mx-2 d-block d-lg-none">
          <a class="nav-link lord" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
            <lord-icon src="https://cdn.lordicon.com/cllunfud.json" trigger="hover" colors="outline:#121331,primary:#646e78,secondary:#ebe6ef">
            </lord-icon>
            <span></span>
          </a>
        </li>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item p-2 mx-2">
              <a class="nav-link active" aria-current="page" href="index">الرئيسية</a>
            </li>
            <li class="nav-item p-2 mx-2">
              <a class="nav-link" href="basbousa-kunafa">بسبوسة وكنافة</a>
            </li>
            <li class="nav-item dropdown p-2 mx-2">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                حلويات
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="oriental-sweets">حلويات شرقية</a></li>
                <li><a class="dropdown-item" href="western-sweets">حلويات غربية</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown p-2 mx-2">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                اعرف اكتر
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="privacy-policy">سياسة الخصوصية</a></li>
                <li><a class="dropdown-item" href="terms-and-conditions">الشروط والأحكام</a></li>
                <li><a class="dropdown-item" href="about-us">من نحن</a></li>
                <li><a class="dropdown-item" href="contact-us">اتصل بنا</a></li>
              </ul>
            </li>
            <li class="nav-item mx-2 d-none d-lg-block">
              <a class="nav-link lord" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                <lord-icon src="https://cdn.lordicon.com/cllunfud.json" trigger="hover" colors="outline:#121331,primary:#646e78,secondary:#ebe6ef">
                </lord-icon>
                <span></span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- navbar -->
    <!-- canvas -->
    <?php include('./canvas.php') ?>
    <!-- canvas -->
    <?php include('./msg.php')?>
    <!-- header -->
    <header>
      <div class="banner">
        <img src="./assets/images/se.jpg">
        <div class="search">
          <p class="fw-bold text-white-50 text-center">تسوق واطلب من متجرنا الخاص منتجات معمولة علي مزاجك</p>
          <form action="search" method="post">
            <input type="search" data-aos="fade-down" data-aos-easing="ease-out-cubic" data-aos-duration="1000" class="form-control" placeholder="ابحث عن المنتج بشكل اسرع.." name="key">
            <button type="submit" data-aos="fade-up" data-aos-easing="ease-out-cubic" data-aos-duration="1000">بحث <i class="fa-solid fa-magnifying-glass"></i></button>
          </form>
        </div>
      </div>
    </header>
    <!-- header -->
    <!-- section1 -->
    <section class="sec text-center pt-5 pb-5">
      <div class="container">
        <div class="title mt-5 mb-5">
          <h1 class="fw-bold">الأكثر مبيعاً</h1>
          <p class="text-black-50">المنتجات الأكثر طلباً من عملائنا</p>
        </div>
        <div class="row">
          <?php
          $query = mysqli_query($con, "SELECT * FROM products order by Rand() LIMIT 4");
          while ($fetch = mysqli_fetch_assoc($query)) {
          ?>
            <div class="col-lg-3 col-md-4 col-6 col">
              <div class="box">
                <div class="img"><a href="product?id=<?php print_r($fetch['id']) ?>"><img src="./assets/images/<?php print_r($fetch['img']) ?>" class="img-fluid" alt="img"></a></div>
                <div class="datails">
                  <h1><?php print_r($fetch['name']) ?></h1>
                  <p><?php print_r($fetch['gm']) ?></p>
                  <p><?php print_r($fetch['price']) ?> جنية</p>
                </div>
                <div class="tool">
                  <a href="addcart/<?php print_r($fetch['name']) ?>" data-product="<?php print_r($fetch['id']) ?>">ADD CART</a>
                </div>
              </div>
            </div>
          <?php } ?>

        </div>
        <div class="more">
          <a href="allproduct">عرض المزيد</a>
        </div>
      </div>
    </section>
    <!-- section1 -->
    <!-- section2 -->
    <section class="sec text-center pt-5 pb-5">
      <div class="container">
        <div class="title mt-5 mb-5">
          <h1 class="fw-bold">بسبوسة وكنافة</h1>
          <p class="text-black-50">البسبوسة والكنافة عندنا حاجه تاني لو مجربتش فاتك كتير</p>
        </div>
        <div class="row">
          <?php
          $query = mysqli_query($con, "SELECT * FROM products  WHERE state='1' order by Rand() LIMIT 4");
          while ($fetch = mysqli_fetch_assoc($query)) {
          ?>
            <div class="col-lg-3 col-md-4 col-6 col">
              <div class="box">
                <div class="img"><a href="product?id=<?php print_r($fetch['id']) ?>"><img src="./assets/images/<?php print_r($fetch['img']) ?>" class="img-fluid" alt="img"></a></div>
                <div class="datails">
                  <h1><?php print_r($fetch['name']) ?></h1>
                  <p><?php print_r($fetch['gm']) ?></p>
                  <p><?php print_r($fetch['price']) ?> جنية</p>
                </div>
                <div class="tool">
                  <a href="add cart/<?php print_r($fetch['id']) ?>" data-product="<?php print_r($fetch['id']) ?>">ADD CART</a>
                </div>
              </div>
            </div>
          <?php } ?>

        </div>
        <div class="more">
          <a href="basbousa-kunafa">عرض المزيد</a>
        </div>
      </div>
    </section>
    <!-- section2 -->
    <!-- section3 -->
    <section class="sec text-center pt-5 pb-5">
      <div class="container">
        <div class="title mt-5 mb-5">
          <h1 class="fw-bold">حلويات شرقية</h1>
          <p class="text-black-50">الحلويات الشرقية عندنا حاجه تاني لو مجربتش فاتك كتير</p>
        </div>
        <div class="row">
          <div class="col-lg-7 col-12">
            <div class="row">
              <?php
              $query = mysqli_query($con, "SELECT * FROM products  WHERE state='2' order by Rand() LIMIT 6");
              while ($fetch = mysqli_fetch_assoc($query)) {
              ?>
                <div class="col-lg-4 col-md-4 col-6 col">
                  <div class="box">
                    <div class="img"><a href="product?id=<?php print_r($fetch['id']) ?>"><img src="./assets/images/<?php print_r($fetch['img']) ?>" class="img-fluid" alt="img"></a></div>
                    <div class="datails">
                      <h1><?php print_r($fetch['name']) ?></h1>
                      <p><?php print_r($fetch['gm']) ?></p>
                      <p><?php print_r($fetch['price']) ?> جنية</p>
                    </div>
                    <div class="tool">
                      <a href="add cart/<?php print_r($fetch['id']) ?>" data-product="<?php print_r($fetch['id']) ?>">Add Cart</a>
                    </div>
                  </div>
                </div>
              <?php } ?>
            </div>
          </div>
          <div class="col-lg-5 d-lg-block">
            <img src="./assets/images/section1.jpg" class="img-fluid imgsec">
          </div>
        </div>
        <div class="more">
          <a href="oriental-sweets">عرض المزيد</a>
        </div>
      </div>
    </section>
    <!-- section3 -->
    <!-- section4 -->
    <section class="sec text-center pt-5 pb-5">
      <div class="container">
        <div class="title mt-5 mb-5">
          <h1 class="fw-bold">حلويات غربية</h1>
          <p class="text-black-50">الحلويات الغربية عندنا حاجه تاني لو مجربتش فاتك كتير</p>
        </div>
        <div class="row">
          <div class="col-lg-5 d-lg-block">
            <img src="./assets/images/1.jpg" class="img-fluid imgsec">
          </div>
          <div class="col-lg-7 col-12">
            <div class="row">
              <?php
              $query = mysqli_query($con, "SELECT * FROM products  WHERE state='3' order by Rand() LIMIT 6");
              while ($fetch = mysqli_fetch_assoc($query)) {
              ?>
                <div class="col-lg-4 col-md-4 col-6 col">
                  <div class="box">
                    <div class="img"><a href="product?id=<?php print_r($fetch['id']) ?>"><img src="./assets/images/<?php print_r($fetch['img']) ?>" class="img-fluid" alt="img"></a></div>
                    <div class="datails">
                      <h1><?php print_r($fetch['name']) ?></h1>
                      <p><?php print_r($fetch['gm']) ?></p>
                      <p><?php print_r($fetch['price']) ?> جنية</p>
                    </div>
                    <div class="tool">
                      <a href="add cart/<?php print_r($fetch['name']) ?>" data-product="<?php print_r($fetch['id']) ?>">Add Cart</a>
                    </div>
                  </div>
                </div>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
      <div class="more">
        <a href="western-sweets">عرض المزيد</a>
      </div>
    </section>
    <!-- section4 -->
    <!-- call -->
    <section class="sec call pt-5 pb-5">
      <div class="container">
        <div class="title mt-5 mb-5">
          <h1 class="fw-bold">اتصل بنا</h1>
          <p class="text-black-50">اتصل بنا لمتابعة طلبك ولأي استفسار او مشكلة</p>
        </div>
        <div class="row">
          <div class="col-lg-6 col-12">
            <form action="#" method="post">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">البريد الألكتروني</label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="اكتب الأيميل بتاعك هنا" required>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">رسالتك</label>
                <textarea class="form-control" name="title" id="exampleFormControlTextarea1" rows="3" placeholder="اكتب رسالتك بالتفصيل"></textarea>
              </div>
              <button type="submit" name="submit" class="btn btn-primary">ارسال</button>
            </form>
            <ul>
              <li class="face"><a target="_blank" href="https://www.facebook.com/omarmohamed2518"><i class="fa-brands fa-facebook"></i></a></li>
              <li class="insta"><a target="_blank" href="https://www.instagram.com/3mar_m7md225/"><i class="fa-brands fa-instagram"></i></a></li>
              <li class="github"><a target="_blank" href="https://github.com/omarmohamedali225"><i class="fa-brands fa-github"></i></a></li>
            </ul>
          </div>
          <div class="col-lg-6 col-12">
            <div class="img">
              <img src="./assets/images/call.svg" alt="Call" class="img-fluid">
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- call -->
    <!-- footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 col-12">
            <div class="img"><img src="./assets/images/logoweb.png" alt="logo" class="img-fluid"></div>
            <p class="title">حلويات Vanilla من افضل حلويات الوطن العربي منذ زمن حيث انشأت في عام 2002 مفضلين في الحلويات الشرقية والغربية..</p>
          </div>
          <div class="col-lg-2 col-md-3 col-6 col">
            <p>استكشف المنتجات</p>
            <ul>
              <li><a href="allproduct">جميع المنتجات</a></li>
              <li><a href="basbousa-kunafa">بسبوسة وكنافة</a></li>
              <li><a href="oriental-sweets">حلويات شرقية</a></li>
              <li><a href="western-sweets">حلويات غربية</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-md-3 col-6 col">
            <p>اعرف اكتر</p>
            <ul>
              <li><a href="privacy-policy">سياسة الخصوصية</a></li>
              <li><a href="terms-and-conditions">الشروط والأحكام</a></li>
              <li><a href="about-us">من نحن</a></li>
              <li><a href="contact-us">اتصل بنا</a></li>
            </ul>
          </div>
          <div class="col-lg-4 col-md-12 col-12">
            <div class="number">
              <p class="title">تابع طلبك من خلال رقم الهاتف.</p>
              <h2>01008547013 <i class="fa-solid fa-phone"></i></h2>
            </div>
            <div class="buy">
              <p>الدفع عند الاستلام حين نفعل ميزه الدفع اونلاين</p>
            </div>
          </div>
          <div class="end">
            <p><i class="fa-solid fa-quote-right"></i> تم التصميم والبرمجة بواسطة عمر محمد <i class="fa-solid fa-quote-right"></i></p>
            <p>جميع الحقوق محفوظة &copy; 2023</p>
          </div>
        </div>
      </div>
    </footer>
    <!-- footer -->
  </div>
  <!-- end -->

  <!-- loader -->
  <div class="loading">
    <div class="loader"></div>
    <p>انتظر تحميل الصفحة😊😍</p>
  </div>
  <!-- loader -->
  <!-- loaderadd -->
  <div class="loadingadd">
    <div class="loaderadd"></div>
    <p>جاري اضافة المنتج في السلة😍</p>
  </div>
  <!-- loaderadd -->



</body>

<?php include('script.php') ?>
<script src="./assets/js/addcart.js"></script>
<script src="./assets/js/contactus.js"></script>

</html>