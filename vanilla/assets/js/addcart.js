const add = document.querySelectorAll('.sec .tool a')
// add item with ajax php
add.forEach(element => {
  $(element).click(function(e){
    e.preventDefault()
    // loadenig add
    $('body').css('overflow','hidden');
    $('.loadingadd').css('display','flex');
    const atr = $(element).attr('data-product')
    $.ajax({
      url:'./assets/server/addcart',
      type:'POST',
      data: {id:atr,quantity:1},
      success: function(data){
        $('body').css('overflow','auto');
        $('.loadingadd').css('display','none');
        read()
        const Toast = Swal.mixin({
          toast: true,
          position: 'top-end',
          showConfirmButton: false,
          timer: 3000,
          timerProgressBar: true,
          didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
          }
        })
        
        Toast.fire({
          icon: 'success',
          title: 'تمت أضافة المنتج في السلة بنجاح'
        })
      }
    })
  })
});
let table =''
// read cookie with ajax php and show data
let num = 0
let total = 0
function read(){
  $.ajax({
    url:'./assets/server/read',
    type:'POST',
    success: function(data){
      if(data!=''){
        let decode = decodeURIComponent(data);
        let json = JSON.parse(decode)
        table = ''
        num = 0
        total = 0
        let gm;
        json.forEach(element => {
          num += +element['quantity']
          total += +element['quantity'] * +element['price']
          if(element['gm']!=''){
            gm = '- '+element['gm']
          }else{
            gm = ''
          }
          table += `<li>
          <div class="box">
          <i class="fa-solid fa-xmark close" onclick=remove(${element['id']})></i>
            <div class="img"><a href="product?id=${element['id']}"><img src="./assets/images/${element['image']}" class="img-fluid" alt="img"></a></div>
            <div class="datails">
              <div class="title">
                <p>${element['name']} ${gm}</p>
              </div>
              <div class="prices">
                
                <p><span>${element['price']}</span><span>EGP</span></p>
              </div>
              <div class="tool">
                <button onclick='plus(${element['id']})'><i class="fa-solid fa-plus"></i></button>
                <span>${element['quantity']}</span>
                <button onclick='minus(${element['id']})'><i class="fa-solid fa-minus"></i></button>
              </div>
            </div>
          </div>
        </li>`
          $('.offcanvas .header').show()
          $('.offcanvas .price').show()
          $('.offcanvas .tools').show()
          $('.offcanvas .product').show()
          $('.offcanvas hr').show()
          $('.offcanvas .empty').hide()
          $('.offcanvas .product ul').html(table)
          $('.offcanvas .header .num').html(num)
          $.ajax({
            url:'./assets/server/checkpromo',
            type:'POST',
            success: function(data){
              if(data!=''){
                $('.offcanvas .price .np').html((total*(100-data)/100).toFixed(2))
                $('.offcanvas .price .promo').show()
                $('.offcanvas .price .promo').html(`البرومو مفعل بقيمة ${data}% السعر القديم كان ${total.toFixed(2)}`)
                $('.checkout .copon a').hide()
                $('.checkout .copon .con').hide()
                $('.checkout .copon span').html(`<p class='text-bold text-success'>البرومو مفعل بقيمة ${data}% السعر القديم كان ${total.toFixed(2)}<i class="fa-solid fa-trash mx-2 remove" onclick=removepromo() title="حذف البرومو كود"></i></p>`)
                $('.totalbeforepromo').html(`<li>
                <p>السعر بعد الخصم</p>
                <p><span>${(total*(100-data)/100).toFixed(2)}</span> جنية</p>
              </li>`)
              }else{
                $('.offcanvas .price .np').html(total.toFixed(2))
              }
            }
          })
          $("nav .lord span").html(num)
          $("nav .lord span").css('opacity','1')
          if(total<50){
            $('.offcanvas .price .err50').show()
            $('.offcanvas .tools .talab').css('pointer-events','none')
            $('.offcanvas .tools .talab').css('opacity','0.6')
          }else{
            $('.offcanvas .price .err50').hide()
            $('.offcanvas .tools .talab').css('pointer-events','auto')
            $('.offcanvas .tools .talab').css('opacity','1')
          }
        });
      }else{
        $("nav .lord span").css('opacity','0')
        $('.offcanvas .header').hide()
        $('.offcanvas .price').hide()
        $('.offcanvas .tools').hide()
        $('.offcanvas .product').hide()
        $('.offcanvas hr').hide()
        $('.offcanvas .empty').show()
      }
    }
  })
}
setInterval(()=>{
  if(num<=0){
    $("nav .lord span").css('opacity','0')
    $('.offcanvas .header').hide()
    $('.offcanvas .price').hide()
    $('.offcanvas .tools').hide()
    $('.offcanvas .product').hide()
    $('.offcanvas hr').hide()
    $('.offcanvas .empty').show()
  }
},1)
$(()=>{
  read()
})

function plus(id){
  $('.loadingcanvas').css('display','flex');
  $.ajax({
    url:'./assets/server/pluscart',
    type:'POST',
    data:{id},
    success:function(data){
      $('.loadingcanvas').css('display','none');
      read()
      checkout()
    }
  })
}
function minus(id){
  $('.loadingcanvas').css('display','flex');
  $.ajax({
    url:'./assets/server/minuscart',
    type:'POST',
    data:{id},
    success:function(data){
      $('.loadingcanvas').css('display','none');
      read()
      checkout()
    }
  })
}
function remove(id){
  $('.loadingcanvas').css('display','flex');
  $.ajax({
    url:'./assets/server/removecart',
    type:'POST',
    data:{id},
    success:function(data){
      $('.loadingcanvas').css('display','none');
      read()
      checkout()
    }
  })
}



// product
let e = document.querySelector(".product .datails input[type='number']")
$(e).on('keyup',function(){
  $(e).attr('value',$(e).val())
  if($(e).val() > 49){
    $(e).attr('value',49)
    $(e).val(49)
  }
  if($(e).val() == ''){
    $(e).attr('value',1)
    $(e).val(1)
  }
  if($(e).val() < 1){
    $('.product .datails a').css('opacity','.4')
    $('.product .datails a').css('pointer-events','none')
   }else{
    $('.product .datails a').css('opacity','1')
    $('.product .datails a').css('pointer-events','auto')
   }
})
$('.product .datails .plus').click(function(){
  if($(e).val() < 1){
    $(e).attr('value',1)
    $(e).val(1)
  }else if($(e).val() > 49){
    $(e).attr('value',49)
    $(e).val(49)
  }else{
    let v = parseInt($(e).attr('value')) + 1
    $(e).attr('value',v)
    $(e).val(v)
  }
  if($(e).val() < 1){
    $('.product .datails a').css('opacity','.4')
    $('.product .datails a').css('pointer-events','none')
   }else{
    $('.product .datails a').css('opacity','1')
    $('.product .datails a').css('pointer-events','auto')
   }
})
$('.product .datails .minus').click(function(){
  if($(e).val() < 1){
    $(e).attr('value',1)
    $(e).val(1)
  }else if($(e).val() > 49){
    $(e).attr('value',49)
    $(e).val(49)
  }
  else{
    let v = parseInt($(e).attr('value')) - 1
    $(e).attr('value',v)
    $(e).val(v)
  }
  if($(e).val() < 1){
    $('.product .datails a').css('opacity','.4')
    $('.product .datails a').css('pointer-events','none')
   }else{
    $('.product .datails a').css('opacity','1')
    $('.product .datails a').css('pointer-events','auto')
   }
})

$('.product .datails a').click(function(e){
  e.preventDefault()
  // loadenig add
  $('body').css('overflow','hidden');
  $('.loadingadd').css('display','flex');
  var id = $(this).attr('data-product')
  var qun = document.querySelector(".product .datails input[type='number']")
  $.ajax({
    url:'./assets/server/addcart',
    type:'post',
    data:{id,quantity:$(qun).val()},
    success:function(data){
      $('body').css('overflow','auto');
      $('.loadingadd').css('display','none');
      read()
      const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
          toast.addEventListener('mouseenter', Swal.stopTimer)
          toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
      })
      
      Toast.fire({
        icon: 'success',
        title: 'تمت أضافة المنتج في السلة بنجاح'
      })
    }
  })
})

// checkout


function checkout(){
  let tabl =''
  let n = 0
  let t = 0
  $.ajax({
    url:'./assets/server/read',
    type:'POST',
    success: function(data){
      if(data!=''){
        let decode = decodeURIComponent(data);
        let json = JSON.parse(decode)
        tabl = ''
        n = 0
        t = 0
        json.forEach(element => {
          n += +element['quantity']
          t += +element['quantity'] * +element['price']
          if(element['gm']!=''){
            gm = '- '+element['gm']
          }else{
            gm = ''
          }
          tabl += `<li>
          <img src="./assets/images/${element['image']}" class="img-fluid" alt="">
          <div class="datails">
            <p>${element['name']} ${gm}</p>
            <p>الكمية : <span>${element['quantity']}</span></p>
            <p>السعر : <span>${element['price']} جنية</span></p>
          </div>
        </li><hr>`
        $('.checkout .box .data ul').html(tabl)
        $('.checkout .box .datalis .total').html(t.toFixed(2)+' جنية')
        $('.checkout .box .datalis .alltotal').html(t.toFixed(2)+' جنية')
        });
      }
      if(t<50){
        if(t==0){
          $('.checkout .box').css('opacity','.4')
          $('.checkout .box').css('pointer-events','none')
          $('.checkout .forms').html(`<div>
          <p class='text-danger fw-bold fs-4'> انتهت صلاحية جلستك اذهب للمتجر</p>
          <a href="index" class="btn btn-outline-primary">رجوع</a>
          </div>`)
          $('.checkout .box .data ul').html('')
          $('.checkout .box .datalis .total').html(t.toFixed(2)+' جنية')
          $('.checkout .box .datalis .alltotal').html(t.toFixed(2)+' جنية')
        }else{
          $('.checkout .forms').html(`<div>
          <p class='text-danger fw-bold fs-5'>الحد الأدني للطلب 50 جنية عند زيادة السعر ل50جنية قم بإعادة تحميل الصفحة</p>
          <a href="index" class="btn btn-outline-primary">اضف المزيد</a>
          </div>`)
        }
      }
    }
  })
}
checkout()

$('.checkout .copon form').submit(function(e){
  e.preventDefault()
  $('.checkout .forms .copon form input[type=submit]').val('جاري التحقق')
  let Form = $(this).serialize()
  $.ajax({
    url:'./assets/server/promo',
    type:'POST',
    data: Form,
    success: function(data){
      if(data==''){
        $('.checkout .forms .con input[type=submit]').val('اعد المحاولة')
        $('.checkout .forms .con input[type=text]').css('border','2px solid red')
      }else{
        $('.checkout .copon a').hide()
        $('.checkout .copon .con').hide()
        $('.checkout .copon span').html(`<p class='text-bold text-success'>البرومو مفعل بقيمة ${data}% <i class="fa-solid fa-trash mx-2 remove" onclick=removepromo() title="حذف البرومو كود"></i></p>`)
        $('.totalbeforepromo').html(`<li>
          <p>السعر بعد الخصم</p>
          <p><span>${(total*(100-data)/100).toFixed(2)}</span> جنية</p>
        </li>`)
      }
    }
  })
  $.ajax({
    url:'./assets/server/checkpromo',
    type:'POST',
    success: function(data){
      read()
    }
  })
})

function removepromo(){
  $.ajax({
    url:'./assets/server/removepromo',
    type:'POST',
    success: function(data){
      $('.checkout .copon span').html(false)
      $('.checkout .copon a').show()
      $('.checkout .copon .con').show()
      $('.checkout .totalbeforepromo').html('')
      $('.checkout .copon input[type=submit]').val('تطبيق')
      $('.checkout .copon input[type=text]').css('border','1px solid black')
      $('.checkout .copon input[type=text]').val('')
    }
  })
}