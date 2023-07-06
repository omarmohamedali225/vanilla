// let tabl =''
// let n = 0
// let t = 0
// function read(){
//   $.ajax({
//     url:'./assets/server/read',
//     type:'POST',
//     success: function(data){
//       if(data!=''){
//         let decode = decodeURIComponent(data);
//         let json = JSON.parse(decode)
//         tabl = ''
//         n = 0
//         t = 0
//         json.forEach(element => {
//           num += +element['quantity']
//           total += +element['quantity'] * +element['price']
//           if(element['gm']!=''){
//             gm = '- '+element['gm']
//           }else{
//             gm = ''
//           }
//           tabl += `<li>
//           <img src="./assets/images/1.jpg" class="img-fluid" alt="">
//           <div class="datails">
//             <p>${element['name']}</p>
//             <p>الكمية : <span>${element['quantity']}</span></p>
//             <p>السعر : <span>${element['price']} جنية</span></p>
//           </div>
//         </li><hr>`
//         $('.checkout .box .data ul').html(tabl)
//         });
//       }
//     }
//   })
// }
// read()
