let table =''
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
        if(total==0){
          $('.cart .err50').hide()
        }
        json.forEach(element => {
          num += +element['quantity']
          total += +element['quantity'] * +element['price']
          if(element['gm']!=''){
            gm = '- '+element['gm']
          }else{
            gm = ''
          }
          table += `<div class="row">
          <div class="close">
            <i class="fa-solid fa-xmark closebtn" onclick=remove(${element['id']})></i>
          </div>
          <div class="col-lg-6 col-12">
            <div class="data">
              <div class="img"><img src="./assets/images/${element['image']}" class="img-fluid"></div>
              <div class="datails">
                <p>${element['name']} ${gm}</p>
                <p>${element['price']} <span>جنية</span></p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-12 colnum">
            <div class="number">
              <button onclick=plus(${element['id']})><i class="fa-solid fa-plus"></i></button>
              <span>${element['quantity']}</span>
              <button onclick=minus(${element['id']})><i class="fa-solid fa-minus"></i></button>
            </div>
          </div>
        </div>`
        $('.cart .titlend').show()
        $('.cart .copon').show()
        $('.cart .end').show()
        $('.cart .empty').hide()
        $('.cart .show_cart').html(table)
        $.ajax({
          url:'./assets/server/checkpromo',
          type:'POST',
          success: function(data){
            if(data!=''){
              $('.cart .copon span').html(`<p class='text-bold text-success'>البرومو مفعل بقيمة ${data}% <i class="fa-solid fa-trash mx-2 remove" onclick=removepromo() title="حذف البرومو كود"></i></p>`)
              $('.cart .copon a').hide()
              $('.cart .copon .con').hide()
              $('.cart .titlend span').html((total*(100-data)/100).toFixed(2))
            }else{
              $('.cart .titlend span').html(total.toFixed(2))
            }
          }
        })
        if(total<50){
          $('.cart .err50').show()
          $('.cart .talab').css('pointer-events','none')
          $('.cart .talab').css('opacity','0.6')
        }else{
          $('.cart .err50').hide()
          $('.cart .talab').css('pointer-events','auto')
          $('.cart .talab').css('opacity','1')
        }
        });
      }else{
        $('.cart .titlend').hide()
        $('.cart .copon').hide()
        $('.cart .end').hide()
        $('.cart .row').hide()
        $('.cart .empty').show()
      }
    }
  })
}
setInterval(()=>{
  if(num<=0){
    $('.cart .titlend').hide()
    $('.cart .copon').hide()
    $('.cart .end').hide()
    $('.cart .row').hide()
    $('.cart .empty').show()
  }
},1)

$(()=>{
  $('.cart .err50').hide()
  read()
})

function plus(id){
  $.ajax({
    url:'./assets/server/pluscart',
    type:'POST',
    data:{id},
    success:function(data){
      read()
    }
  })
}
function minus(id){
  $.ajax({
    url:'./assets/server/minuscart',
    type:'POST',
    data:{id},
    success:function(data){
      $('.cart .err50').hide()
      read()
    }
  })
}
function remove(id){
  $.ajax({
    url:'./assets/server/removecart',
    type:'POST',
    data:{id},
    success:function(data){
      $('.cart .err50').hide()
      read()
    }
  })
}

$('.cart .copon form').submit(function(e){
  e.preventDefault()
  $('.cart .copon input[type=submit]').val('جاري التحقق')
  let Form = $(this).serialize()
  $.ajax({
    url:'./assets/server/promo',
    type:'POST',
    data: Form,
    success: function(data){
      if(data==''){
        $('.cart .copon input[type=submit]').val('اعد المحاولة')
        $('.cart .copon input[type=text]').css('border','2px solid red')
      }else{
        read()
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
      $('.cart .copon span').html(false)
      $('.cart .copon a').show()
      $('.cart .copon .con').show()
      $('.cart .titlend span').html(total.toFixed(2))
      $('.cart .copon input[type=submit]').val('تطبيق')
      $('.cart .copon input[type=text]').css('border','none')
      $('.cart .copon input[type=text]').val('')
    }
  })
}