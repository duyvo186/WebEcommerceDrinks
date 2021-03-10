// //kiem tra noi dung html load xong chua
// $(function(){
//     //xu ly cho su kien click vào nut test
//     $('#duyne').submit(function(){

//         alert(2123232);
        //.css: dinh dang style
        //.html: lay ra va ghi vao noi dung html
        //.text: lay ra va ghi vào noi dung la text
        //.val: lay ra va ghi vao value cho input
        // $('.title').css('color','red');
        // $('#ten').val('chao text');
        // GOI XU LY O SERVER VER THONG QUA AJAX
        //ROUTE, METHOD, PARAMS
//         var url = 'http://localhost/banhang/cart';
//         var token = $('#csrf').val();
//         //alert(token);
//         var data = {_token:token};
//         $.post(url,data)
//         .done(function(dulieu){ //chi nhan duy nhat 1 trang thai 200
//             $('#soluongmua').val(dulieu.$soluong);

// //         //     $('.title').css('color',dulieu.color);
//      })
//         .fail(function(dulieu){
//             console.log(dulieu);
// // //         })
// // //         // $.ajax({
// // //         //     'url':url,
// // //         //     'method':'POST'
// // //         // });
// // //     })
// // // })
// //     })
//         })
// })
    //     })
    // })

// // function newFunction() {
// //     return "{{route('f.home')}}";
// // }
// // e.preventDefault();

// // $.ajax({
// // type: ‘POST’,
// // cache: false,
// // url: “{{ route(‘ajax’) }}”,
// // data: {
// // “_token”: ‘{{ csrf_token() }}’,
// // “name”: $(“#inputname2”).val(),
// // “email”: $(“#inputemail2”).val(),
// // },
// // success: function (data) {
// // $(‘#review’).html(data);
// // console.log(‘Submission was successful.’);
// // },
// // error: function (data) {
// // console.log(‘An error occurred.’);
// // console.log(data);
// // },
// // });
// // }

// // //{} : object
// // //[]: mang
// $(function(){
//     //xu ly cho su kien click vào nut test
//     $('#btntest').click(function(){
//         //.css: dinh dang style
//         //.html: lay ra va ghi vao noi dung html
//         //.text: lay ra va ghi vào noi dung la text
//         //.val: lay ra va ghi vao value cho input
//         // $('.title').css('color','red');
//         // $('#ten').val('chao text');
//         // GOI XU LY O SERVER VER THONG QUA AJAX
//         //ROUTE, METHOD, PARAMS
//         var url = 'http://localhost:/banhang/cart';
//         var token = $('#csrf').val();
//        // alert(token);
//         var data = {_token:token};
//         $.post(url,data)
//         .done(function(dulieu){ //chi nhan duy nhat 1 trang thai 200
//             $('#soluongmua').val(dulieu.giohang);
//             //$('.title').css('color',dulieu.color);
//         })
//         .fail(function(dulieu){
//             console.log(dulieu);
//         })
//         // $.ajax({
//         //     'url':url,
//         //     'method':'POST'
//         // });
//     })
// })








  $(".nutdathangdeal").click(function(){


      var img=$(this).attr('data-src');

    var idsp=$(this).attr('data-id');
    var ten=$(this).attr('data-name');
      var masp=$(this).attr('data-masp');



        var mausac='<?=$v['mausac']?>'


          var ten1='';
            var title='';


         if(mausac!='')
         {
              var idmau='';

              $('.khunghinhanh .item_chose_type_color').each(function(){
                        if($(this).hasClass('active')){
                          idmau =$(this).attr('data-color1');

                             title=$(this).attr('data-title');

                        }

              });

          if(idmau=='')
                  {

                              alert('Bạn chưa chọn màu sắc ');
                              return false;
               }

         }


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
           data: {'id':idsp,'sl':soluong,'mausac':idmau},
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
        });


    });
    <?php } ?>
    <a id="themgiohang" class="nutdathangdeal" data-name="<?=$v['tenkhongdau_vi']?>" data-masp="<?=$v['masp']?>" data-src="<?=_upload_sanpham_l.$v['photo']?>" data-id="<?=$v['id']?>"  data-toggle="modal" data-target="#myModalchitiet"><i thêm></i></a>


