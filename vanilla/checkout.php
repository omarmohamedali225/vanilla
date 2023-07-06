<?php

include('config.php');
?>


<!DOCTYPE html>
<html lang="ar" dir="rtl">
<?php include('./head.php') ?>
<link rel="stylesheet" href="./assets/css/checkout.css">

<body>

  <!-- start -->
  <div class="vanilla">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg sticky-top">
      <div class="container">
        <a class="navbar-brand fw-bold" href="#"><img src="./assets/images/logoweb.png" alt="logo" class="img-fluid"></a>
        <li class="nav-item mx-2 d-block d-lg-none">
          <a class="nav-link lord" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
            <lord-icon src="https://cdn.lordicon.com/cllunfud.json" trigger="hover" colors="outline:#121331,primary:#646e78,secondary:#ebe6ef">
            </lord-icon>
            <span></span>
          </a>
        </li>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item mx-2">
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
    <div class="head">
      <div class="new">
        <p><i class="fa-solid fa-car-side"></i> الشحن خلال ساعتين</p>
      </div>
    </div>


    <section class="pb-5 checkout">
      <div class="container">
        <div class="title mt-5 mb-5">
          <h1 class="fw-bold fs-4">بيانات الطلب</h1>
        </div>
        <div class="row">
          <div class="col-lg-5">
            <div class="box mb-4">
              <header>
                <p>تفاصيل الطلب</p>
                <a data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">اعرض المنتجات</a>
              </header>
              <hr>
              <section class="data">
                <ul></ul>
              </section>
              <section class="datalis">
                <ul>
                  <li>
                    <p>المبلغ</p>
                    <p> <span class="total"></span></p>
                  </li>
                  <li>
                    <p>التوصيل</p>
                    <p>Free</p>
                  </li>
                  <li>
                    <p>الاجمالي</p>
                    <p> <span class="alltotal"></span></p>
                  </li>
                  <span class="totalbeforepromo"></span>
                </ul>
              </section>
            </div>
          </div>
          <div class="col-lg-7">
            <div class="forms">
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
              <hr>
              <p>بيانات العميل</p>
              <div class="data">
                <form action="" method="post">
                  <div class="mb-3">
                    <label for="exampleInputName" class="form-label">الأسم</label>
                    <input type="text" class="form-control" name="name" id="exampleInputName" placeholder="اكتب الأسم بتاعك هنا" required>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail" class="form-label">الأيميل</label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail" placeholder="اكتب البريد الألكتروني بتاعك هنا" required>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPhone" class="form-label">التليفون</label>
                    <input type="number" class="form-control" name="phone" id="exampleInputphone" placeholder="اكتب رقمك بشكل صحيح" required>
                  </div>
                  <hr>
                  <p>بيانات الشحن</p>
                  <label for="exampleInputm1" class="form-label">المدينة</label>
                  <select class="form-select form-select-sm" aria-label=".form-select-sm example" required name="city">
                    <option selected>القاهرة</option>
                  </select>
                  <div class="mb-3 mt-3">
                    <label for="exampleInputadr" class="form-label">العنوان</label>
                    <input type="text" class="form-control" name="adr" id="exampleInputadr" placeholder="اكتب عنوانك بالتفصيل" required>
                  </div>
                  <hr>
                  <p>تفاصيل الدفع</p>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="road" id="exampleRadios1" value="1" checked>
                    <label class="form-check-label mb-4" for="exampleRadios1">
                      الدفع عند الأستلام
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" required>
                    <label class="form-check-label" for="defaultCheck1">
                      أوافق علي الشروط والأحكام
                    </label>
                  </div>
                  <div class="talab">
                    <input type="submit" value="أطلب الان">
                  </div>
                </form>
              </div>
            </div>
          </div>
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
  <!-- end -->

  <!-- loader -->
  <div class="loading">
    <div class="loader"></div>
    <p>انتظر تحميل الصفحة😊😍</p>
  </div>
  <!-- loader -->



</body>

<?php include('./script.php') ?>
<script src="./assets/js/checkout.js"></script>
<script src="./assets/js/addcart.js"></script>

</html>