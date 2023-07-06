<!DOCTYPE html>
<html lang="ar" dir="rtl">
<?php include('head.php') ?>

<body>

  <div>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg sticky-top">
      <div class="container">
        <a class="navbar-brand fw-bold" href="#"><img src="./assets/images/logoweb.png" alt="logo" class="img-fluid"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span></span>
          <span></span>
          <span></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item p-2 mx-2">
              <a class="nav-link" aria-current="page" href="index">الرئيسية</a>
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
          </ul>
        </div>
      </div>
    </nav>
    <!-- navbar -->
    <section class="cart pt-5 pb-5">
      <div class="container">
        <div class="title mt-5 mb-5">
          <h1 class="fw-bold">محتويات الطلب</h1>
        </div>
        <div class="titlend">
          <p class="fs-3">الاجمالي : <span></span> جنية</p>
        </div>
        <!-- start -->
        <div class="show_cart"></div>
        <!-- end -->
        <p class="text-danger err50 fw-bold">الحد الادني للطلب 50 جنية</p>
        <div class="copon">
          <span></span>
          <a href="promo">هل لديك كوبون خصم؟</a>
          <div class="con">
            <form action="promo" method="post" class="w-100">
              <input type="text" name="promo" class="form-control" placeholder="اكتب الكوبون هنا">
              <input type="submit" name="submit" class="copon" value="تطبيق">
            </form>
          </div>
        </div>
        <div class="titlend">
          <p>الاجمالي : <span></span> جنية</p>
        </div>
        <div class="end">
          <a href="checkout" class="talab">اطلب الان</a>
        </div>
        <div class="empty">
          <p class="fw-bold text-danger">السلة فارغه أضف من المتجر المزيد</p>
          <a href="index" class='btn btn-outline-primary'>تسوق الان</a>
        </div>
      </div>
    </section>
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
  <!-- loader -->
  <div class="loading">
    <div class="loader"></div>
    <p>انتظر تحميل الصفحة😊😍</p>
  </div>
  <!-- loader -->
</body>
<?php include('script.php') ?>
<script src="./assets/js/cart.js"></script>

</html>