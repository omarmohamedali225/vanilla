$(()=>{
  $('.cart .copon .con').hide()
  $('.checkout .copon .con').hide()
})
$('.cart .copon a').click(function(e){
  e.preventDefault()
  $('.cart .copon .con').toggle('slow')
})
$('.checkout .copon a').click(function(e){
  e.preventDefault()
  $('.checkout .copon .con').toggle('slow')
})

// loadenig page
$(window).on('load',function(){
  $('body').css('overflow','auto');
  $('.loading').fadeOut('slow');
})