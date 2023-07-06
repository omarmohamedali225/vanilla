$('.checkout .data form').submit(function(e){
  $(".checkout .data input[type='submit']").html('جاري الارسال')
  e.preventDefault()
  let Form = $(this).serialize()
  $.ajax({
    url: './assets/server/checkout',
    type: 'POST',
    data: $(this).serialize(),
    success: function(data){
      let decode = decodeURIComponent(data);
      let json = JSON.parse(decode)
      console.log(json)
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
        title: json.state
      })
      $('.checkout .data form')[0].reset()
      $('.checkout .box').css('opacity','.4')
      $('.checkout .box').css('pointer-events','none')
      $('.checkout .forms').html(`<div>
      <p class='text-danger fw-bold fs-4'> انتهت صلاحية جلستك كود طلبك <span class='text-success'>#${json.id}</span></p>
      <a href="index" class="btn btn-outline-primary">رجوع</a>
      <a href="index" class="btn btn-outline-success" onclick="window.print();return false;">طباعه الطلب</a>
      </div>`)
      $('.checkout .box .data ul').html('')
      $("nav .lord span").css('opacity','0')
      $('.offcanvas .header').hide()
      $('.offcanvas .price').hide()
      $('.offcanvas .tools').hide()
      $('.offcanvas .product').hide()
      $('.offcanvas hr').hide()
      $('.offcanvas .empty').show()
    }
  })
})