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
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
      <p class="text-center text-danger fs-5 empty">لا توجد منتجات متاحة في السلة حاليا</p>
      <div class="header">
        <h5><span><i class="fa-solid fa-cart-shopping"></i> سلة التسوق </span><span class="num">0</span></h5>
      </div>
      <hr>
      <div class="price">
        <p>السعر الكلي : <span class='np'>0 </span><span>جنية</span></p>
        <p class="text-danger err50">الحد الادني للطلب 50 جنية</p>
      </div>
      <div class="tools">
        <a href="cart">سلة التسويق</a>
        <a href="#">أطلب الان</a>
      </div>
      <div class="product">
        <ul></ul>
        <hr>
        <p class="text-center text-black-50 fw-bold small">انتهت منتجاتك اضف المزيد او اطلب الان</p>
      </div>
    </div>
    <!-- canvas -->
    <div class="head">
      <div class="new">
        <p><i class="fa-solid fa-car-side"></i> الشحن خلال ساعتين</p>
      </div>
    </div>
    <!-- section2 -->
    <section class="sec text-center pt-5 pb-5">
      <div class="container">
        <div class="title mt-5 mb-5">
          <h1 class="fw-bold">حلويات غربية</h1>
          <p class="text-black-50">الحلويات الغربية عندنا حاجه تاني لو مجربتش فاتك كتير</p>
        </div>
        <div class="row">
          <?php
          $query = mysqli_query($con, "SELECT * FROM products  WHERE state='3' order by Rand()");
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
          <a class='home' href='index'><i class='fa-solid fa-door-open'></i> رجوع للصفحة الرئيسية</a>
        </div>
      </div>
    </section>
    <!-- section2 -->
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
<?php include('./script.php') ?>
<script src="./assets/js/addcart.js"></script>

</html>