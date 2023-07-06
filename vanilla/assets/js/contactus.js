$('.call form').submit(function(e){
  e.preventDefault()
  let Form = $(this).serialize()
  $.ajax({
    url:'./assets/server/contact.php',
    type:'post',
    data: Form,
    success:function(data){
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
        title: data
      })
      $('.call form')[0].reset()
    },
  })
})