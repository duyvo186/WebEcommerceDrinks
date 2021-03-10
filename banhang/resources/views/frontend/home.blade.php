@extends('frontend.master')
@section('content')


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Product-slider</title>
<!--Adding Links  -->
<link  rel="stylesheet" href="css/swiper.min.css"/>
<link rel="stylesheet" href="css/style.css"/>


</head>
<body>

<!--slider 1 sps------------------------------------------>
<div class="heading">
<h1>S Ả N &emsp13; P H Ẩ M</h1>

</div>
<!--swiper slider-->





<div class="swiper-container">

    <div class="swiper-wrapper">
    <!--slide 1-------------------------------------->
    @foreach ($newproducts as $item)

      <div class="swiper-slide">

      <div class="slider-box">
<p class="time">New</p>
<form action="{{route('pg.add')}}"method="post">
    <fieldset>
        <input type="hidden" name="id" value="{{$item->ma}}"/>
        @csrf
<div class="img-box" >

        <input type="image" src="{{$item->hinhdaidien}}" alt="Submit" >

</div>
</fieldset>
</form>


<p class="detail">{{$item->ten}}

<a href="#" class="price">Gía : {{number_format($item->gia)}}</a>
</p>
<div class="cart">

    <form  class="meta-prod d-flex" action="{{route('cart.add')}}" method="post">
<fieldset>

              <input  type="hidden"  name="id" value="{{$item->ma}}"   />
            @csrf
            {{-- <input    class="custom-control-input" >
            <label  class="custom-control-label" class="flaticon-shopping-bag"> </label> --}}
             <input style="position: absolute;
             bottom: 0px;
             height: 45px;
             background-color: #3b4041;
             width: 100%;
             display: flex;
             justify-content: center;
             align-items: center;
             margin-right: -28px;
             left: 0px;
             font-weight: bold;
font-size:18px;
             " type="submit" value="Mua Hàng" >
           {{-- <button class="d-flex align-items-center justify-content-center"><span class="flaticon-heart"></span></button> --}}

</fieldset>
    </form>
</div>
</div>



      </div>



      @endforeach






</div>

</div>

<div class="swiper-container">

    <div class="swiper-wrapper">
    <!--slide 1-------------------------------------->


@foreach ($newproducts as $item)

@if ($loop->even)


      <div class="swiper-slide">

      <div class="slider-box">
<p class="time">New</p>
<form action="{{route('pg.add')}}"method="post">
    <fieldset>
        <input type="hidden" name="id" value="{{$item->ma}}"/>
        @csrf
<div class="img-box" >

        <input type="image" src="{{$item->hinhdaidien}}" alt="Submit" >

</div>
</fieldset>
</form>


<p class="detail">{{$item->ten}}

<a href="#" class="price">Gía : {{number_format($item->gia)}}</a>
</p>
<div class="cart">

    <form  class="meta-prod d-flex" action="{{route('cart.add')}}" method="post">
<fieldset>

              <input  type="hidden"  name="id" value="{{$item->ma}}"   />
            @csrf
            {{-- <input    class="custom-control-input" >
            <label  class="custom-control-label" class="flaticon-shopping-bag"> </label> --}}
             <input style="position: absolute;
             bottom: 0px;
             height: 45px;
             background-color: #3b4041;
             width: 100%;
             display: flex;
             justify-content: center;
             align-items: center;
             margin-right: -28px;
             left: 0px;
             font-weight: bold;
font-size:18px;
             " type="submit" value="Mua Hàng" >
           {{-- <button class="d-flex align-items-center justify-content-center"><span class="flaticon-heart"></span></button> --}}

</fieldset>
    </form>
</div>
</div>



      </div>



      @endif

      @endforeach



</div>

</div>




<!--swiper  slider end-->

<script type="text/javascript" src="{{asset('public/frontend/js/swiper.min.js')}}"></script>
<script src="{{asset('public/frontend/js/script.js')}}"></script>

</body>
</html>
<style>

html,body{
	position:relative;
	height:100%;}

	body{
		margin:0px;
		padding:0px;
		font-family:montserrat,sans-serif;
		background-color:rgba(241,241,241,1.00);}
		.swiper-slide{
			width:250px !important;
			 }

		.slider-box{
			margin:20px;
			height:350px;
			width:250px;
			position:relative;
			background-color:#FFFFFF;
			border-radius:5px;
			display:flex;
			flex-direction:column;
			justify-content:center;
			align-items:center;
			text-align:center;
			border:1px solid rgba(187,187,187,0.40);
			}
			.slider-box a{
				text-decoration:none;
				text-align:center;}
				.img-box{
					height:170px;
					}
					.img-box input{
						height:auto;
						max-width:100%;
						max-height:100%;}
						.time{
							position:absolute;
							top:0px;
							right:20px;
							color:#4f4945;}
							.detail{
								display:flex;
								flex-direction:column;
								align-items:center;
								box-sizing:border-box;
								font-size:13px;
								line-height:35px;}
								.price{
									color:black;
									background-color: white;
									 line-height:20px;}
									 .cart{
										 position:absolute;
										 bottom:0px;
										 height:45px;
										 background-color:#3b4041;
										 width:100%;
										 display:flex;
										 justify-content:center;
										 align-items:center;}
										 .cart a{
											 color:#FFFFFF;}
											 .slider-box:hover{
												 box-shadow:2px 2px 12px rgba(47,47,47,0.40);
												 }
												 .slider-box:hover .img-box input{
													 transform:scale(1.07);
													 transition:all ease 0.3s;}
													 .cart:hover{
														 transform:scale(1.1);
														 background-color:#88512c;
							box-shadow:2px 2px 12px rgba(47,47,47,0.40);
							transition:all ease 0.1s;}




							.heading{
								display:flex;
								justify-content:center;
							}
							.heading h1{
								/* border-left:2px solid #000000;
								Border-right:2px solid #000000; */
								background-color: #212121;
								text-shadow:2px 2px 12px rgba(69,66,66,0.3);
								padding:0px 10px;
								color:#FFFFFF;
								margin:20px;
                                font-size:30px;
                                font-family:calibri;}


</style>




<div class="container">

<div style="margin-top:66px; margin-left:100px"class="row">
   
    <div class="col-4">
<figure class="snip1360">
    <img src="images/tintuc4.jpg" alt="sample88" />
    <figcaption>
      <h2>10 sai lầm khi tự thiết kế nội thất</h2>
      <p>Bếp điện từ đôi là thiết bị nhà bếp rất quen thuộc với nhiều người. </p><a href="#" class="read-more">Read More</a>
    </figcaption>
  </figure>
    </div>
  <div class="col-4">
  <figure class="snip1360 hover"><img src="images/tintuc5.jpg" alt="sample86" />
    <figcaption>
      <h2>[Tư Vấn] Vệ sinh sofa nỉ tại nhà đơn giản, hiệu quả</h2>
      <p>Tết sắp đến mọi đồ vật nội thất trong nhà đều cần sạch sẽ, sáng bóng</p><a href="#" class="read-more">Read More</a>
    </figcaption>
  </figure>
  </div>
  <div class="col-4">
  <figure class="snip1360"><img src="images/tintuc6.jpg" alt="sample43" />
    <figcaption>
      <h2>Chống thấm tường nhà mới xây điều quan trọng không thể bỏ qua</h2>
      <p>Với khí hậu nóng ẩm như ở Việt Nam việc chống thấm tường nhà mới xây là điều quan trọng không thể bỏ qua</p><a href="https://thietkehomexinh.com/lua-chon-bep-tu-doi-cho-phong-bep-hien-dai-nen-hay-khong" class="read-more">Read More</a>
    </figcaption>
  </figure>
</div>
&emsp;
</div>
<div style="margin-top:66px; margin-left:100px;"class="row">
    
    <div class="col-4">
<figure class="snip1360">
    <img src="images/tintuc1.webp" alt="sample88" />
    <figcaption>
      <h2>Nội Thất Gỗ Sang Trọng</h2>
      <p>Nội thất màu gỗ sáng: Tưởng “nhạt nhòa” mà lại là lựa chọn sáng suốt của chị em thích F5 phòng ốc </p><a href="https://thietkehomexinh.com/chong-tham-tuong-nha-moi-xay-dieu-quan-trong-khong-the-bo-qua" class="read-more">Đọc Thêm</a>
    </figcaption>
  </figure>
    </div>
  <div class="col-4">
  <figure class="snip1360 hover"><img src="images/tintuc2.jpg" alt="sample86" />
    <figcaption>
      <h2>30+ MẪU THIẾT KẾ NỘI THẤT PHÒNG NGỦ </h2>
      <p>Mạnh Hệ gửi đến các bạn Top 20 mẫu thiết kế nội thất phòng ngủ nhỏ,  đẹp, hiện đại. Bao gồm phòng ngủ chung cư, nhà phố, biệt thự, diện tích nhỏ</p><a href="https://noithatmanhhe.vn/thiet-ke-noi-that-phong-ngu?fbclid=IwAR0G178j6XCe9N0grfIfkGXN4MjSu-OdcqWNeSafRfQQJN152EXTEwsVsTk" class="read-more">Đọc Thêm</a>
    </figcaption>
  </figure>
  </div>
  <div class="col-4">
  <figure class="snip1360"><img src="images/tintuc3.jpg" alt="sample43" />
    <figcaption>
      <h2>Lựa chọn bếp từ đôi cho phòng bếp hiện đại – nên hay không?</h2>
      <p>Bếp điện từ đôi là thiết bị nhà bếp rất quen thuộc với nhiều người. Từ chung cư tới nhà phố hay biệt thự cao cấp đều dễ dàng thấy sự xuất hiện của thiết bị này. Tuy nhiên đây vẫn là một trong những món đồ điện tử còn khiến nhiều người hoài nghi về hiệu quả. Lựa chọn bếp từ đôi cho phòng bếp hiện đại nên hay không? Hãy cùng HomeXinh tìm hiểu chi tiết hơn về loại thiết bị này qua bài viết sau.</p><a href="https://afamily.vn/noi-that-mau-go-sang-tuong-nhat-nhoa-ma-lai-la-lua-chon-sang-suot-cua-chi-em-thich-f5-phong-oc-20201031010752126.chn" class="read-more">Read More</a>
    </figcaption>
  </figure>
</div>
</div>
</div>
  <style>

      @import url(https://fonts.googleapis.com/css?family=Oswald);
@import url(https://fonts.googleapis.com/css?family=Quattrocento);
.snip1360 {
  font-family: 'Quattrocento', Arial, sans-serif;
  position: relative;
  overflow: hidden;
  margin: 10px;
  min-width: 230px;
  max-width: 315px;
  width: 100%;
  color: #141414;
  text-align: left;
  line-height: 1.4em;
  font-size: 16px;
  background-color: #ffffff;
}
.snip1360 * {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-transition: all 0.25s ease;
  transition: all 0.25s ease;
}
.snip1360 img {
  max-width: 100%;
  vertical-align: top;
}
.snip1360 figcaption {
  width: 100%;
  background-color: #ffffff;
  padding: 10px 25px 55px;
  position: relative;
}
.snip1360 figcaption:before {
  position: absolute;
  content: '';
  z-index: 2;
  bottom: 100%;
  left: 0;
  width: 100%;
  height: 80px;
  background-image: -webkit-linear-gradient(top, transparent 0%, #ffffff 100%);
  background-image: linear-gradient(to bottom, transparent 0%, #ffffff 100%);
}
.snip1360 figcaption a {
  position: absolute;
  bottom: 0;
  left: 0;
  padding: 10px;
  background-color: #cccccc;
  color: #000000;
  font-size: 0.8em;
  text-transform: uppercase;
  opacity: 0.65;
  width: 100%;
  text-align: center;
  text-decoration: none;
  letter-spacing: 1px;
}
.snip1360 figcaption a:hover {
  opacity: 1;
}
.snip1360 h2 {
  margin: 0 0 10px;
  font-weight: 300;
  font-size: 1.5em;
  line-height: 1.2em;
  font-family: 'Oswald', Arial, sans-serif;
  text-transform: uppercase;
}
.snip1360 p {
  margin: 0 0 10px;
  font-size: 0.9em;
  letter-spacing: 1px;
  opacity: 0.9;
}

      </style>
<script>

    /* Demo purposes only */
$(".hover").mouseleave(
  function () {
    $(this).removeClass("hover");
  }
);

</script>



@endsection
