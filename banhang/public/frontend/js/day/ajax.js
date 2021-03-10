// //kiem tra noi dung html load xong chua
// $(function(){
//     //xu ly cho su kien click vào nut test
//     $('#duyne').click(function(){

//         var url= 'http://localhost/banhang/update-cart';
//         var token= $('#csrf').val();
//         var data= {_token:token};
//         $.post(url,data)
//         .done(function(dulieune){
//             //alert(dulieune)
//             $('#slmua').val(dulieune.i);
//         // })
//     })

//     .fail(function(dulieune){
//         console.log(dulieune);
//     })
// // //alert(123456);
// //         //.css: dinh dang style
// //         //.html: lay ra va ghi vao noi dung html
// //         //.text: lay ra va ghi vào noi dung la text
// //         //.val: lay ra va ghi vao value cho input
// //         // $('.title').css('color','red');
// //         // $('#ten').val('chao text');
// //         // GOI XU LY O SERVER VER THONG QUA AJAX
// //         //ROUTE, METHOD, PARAMS
// // //         var url = 'http://localhost/banhang/form2';
// // //         var token = $('#csrf').val();
// // //        // alert(token);
// // //         var data = {_token:token};
// // //         $.post(url,data)
// // //         .done(function(dulieu){ //chi nhan duy nhat 1 trang thai 200
// // //             //alert(dulieu)
// // //             $('#kq').val(dulieu.so);
// // //             $('#ten').val(dulieu.str);
// // //             // $('.title').css('color',dulieu.color);
// // //         })
// // //         })
// // //         // .fail(function(dulieu){
// // //         //     console.log(dulieu);
// // //         // })
// // //         // $.ajax({
// // //         //     'url':url,
// // //         //     'method':'POST'

// })
// })



// // //{} : object
// // //[]: mang

// // $(function(){
// //     //xu ly cho su kien click vào nut test
// //     $('#btntest').submit(function(){
// //         //.css: dinh dang style
// //         //.html: lay ra va ghi vao noi dung html
// //         //.text: lay ra va ghi vào noi dung la text
// //         //.val: lay ra va ghi vao value cho input
// //         // $('.title').css('color','red');
// //         // $('#ten').val('chao text');
// //         // GOI XU LY O SERVER VER THONG QUA AJAX
// //         //ROUTE, METHOD, PARAMS
// //         var url = 'http://localhost/banhang/form2';
// //         var token = $('#csrf').val();
// //        // alert(token);
// //         var data = {_token:token};
// //         $.post(url,data)
// //         .done(function(dulieu){ //chi nhan duy nhat 1 trang thai 200
// //             $('#kq').val(dulieu.day);
// //             $('#ten').val(dulieu.str);
// //             $('.title').css('color',dulieu.color);
// //         })
// //         .fail(function(dulieu){
// //             console.log(dulieu);
// //         })
// //         // $.ajax({
// //         //     'url':url,
// //         //     'method':'POST'
// //         // });
// //     })
// // })
// $(function(){
//     //xu ly cho su kien click vào nut test
//     $('#1').click(function(){

//         var url= 'http://localhost/banhang/add-to-cart';
//         var token= $('#csrf').val();
//         var data= {_token:token};
//         $.post(url,data)
//         .done(function(dulieune){
//             //alert(dulieune)
//             $('#name').val(dulieune.ten);
//             $('#ma').val(dulieune.ma);
//             $('#hinh').val(dulieune.hinh);
//             $('#gia').val(dulieune.gia);
//             $('#slg').val(dulieune.slg);
//             $('#slm').val(dulieune.slm);
//                  // })
//     })

//     .fail(function(dulieune){
//         console.log(dulieune);
//     })

// })
// })


// $(document).ready(function(){


// $('.khunghinhanh .item_chose_type_color').click(function(){


//       $('.khunghinhanh .item_chose_type_color').removeClass('active');
//       $(this).addClass('active');
//       var idcolor=$(this).attr('data-color');
//           var id_cat=$(this).attr('data-cat');
//             var id_item=$(this).attr('data-item');
//       $.ajax({
//           type: "POST",
//           url: "ajax/loadhinhcolor.php",
//          data: {'id':idcolor,'id_cat':id_cat,'id_item':id_item},

//           success: function(data){

//                   $('#loadhinh').html(data);

//               }
//       });

//   });

$(".nutdathangdeal").click(function(){

alert(2321212);
    var img=$(this).attr('data-src');

  var idsp=$(this).attr('data-id');
  var ten=$(this).attr('data-name');
    var masp=$(this).attr('data-masp');



        var ten1='';
          var title='';


       // if(mausac!='')
       // {
       //      var idmau='';

       //      $('.khungspdeals .item_chose_type_color').each(function(){
       //                if($(this).hasClass('active')){
       //                  idmau =$(this).attr('data-color1');

       //                     title=$(this).attr('data-title');

       //                }

       //      });

       //  if(idmau=='')
       //          {

       //                      alert('Bạn chưa chọn màu sắc ');
       //                      return false;
       //       }

       // }


       if(title!='')
       {
        ten1=ten+'-'+title;
       }
       else
       {
        ten1=ten;
       }


      $('.imgpop').attr('src',img);

      $('.tensppop').html(ten1);


       $('.masppop').html(masp);

       var soluong=$('.qty').val();









      $.ajax({
          type: "POST",
          url: "ajax/addcart.php",
         data: {'id':idsp,'sl':soluong,},
          dataType: 'json',
          cache: false,
          // beforeSend: function(){

          //           $('.page-loading').css("display","block");
          //      },
          success: function(result){


                // $('.page-loading').css("display","none");






                  if(result)
                    {
                       $('#cart-nho').html(result.count);
                    $('#cart-nho1').html(result.count);
                   $('#popupcart1').html(result.ketqua);

                   $('#myModalchitiet').modal('show');
                    }


      }
      })


