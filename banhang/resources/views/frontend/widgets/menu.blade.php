

<nav id="nav" class="head_nav" >

    <div class="menuday">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="{{route('f.home')}}"><img style="width:61px;"id="logo" src="images/logot.png" ></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="{{route('f.home')}}">Trang Chủ <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('abu.index')}}">Về Chúng Tôi</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Sản Phẩm
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Xem Tất Cả Sản Phẩm</a>
                    <a class="dropdown-item" href="{{route('cart.index')}}">Gio Hàng</a>
                   
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="{{route('c.submit')}}">Liên Hệ</a>
                </li>
              </ul>
              <div id="khungtimkiem">

                <div id="timkiem" style="position: relative;">
                        <form action="tim-kiem/sp.html" id="search" method="post">
                            <select onchange="this.form.submit()" name="cat" style="background: #F3F3F3; position: absolute;top: 1px;left: 2px;z-index: 9;border: none;height: 94%;width: 80px;border-top-left-radius:20px;border-bottom-left-radius:20px">
                                <option value="0" >Tất cả <i class="fa fa-caret-down"></i></option>
  
                                    <option class="subo" value=""></option>
  
                                            <option class="subop" value="" >&nbsp;&nbsp;&nbsp;</option>
  
  
                            </select>
                            <input style="padding-left: 100px;border-radius: 20px" type="text" name="txtTimkiem" id="txtTimkiem" placeholder="Bạn cần tìm sản phẩm gì ?">
                            <button class="btntimkiem"  ><img src="images/ok.png"></button>
  
                            <div class="btntimkiem1" style="width: 10px;"><img src="images/ok.png"></div>
                        </form>
                </div>
        </div>
            </div>
          </nav>
       <div class="oke"><img id="logo" src="images/logot.png" ></div>
        <div id="menuToggle">
            <!--
            A fake / hidden checkbox is used as click reciever,
            so you can use the :checked selector on it.
            -->
            <input type="checkbox" />

            <!--
            Some spans to act as a hamburger.

            They are acting like a real hamburger,
            not that McDonalds stuff.
            -->
            <span></span>
            <span></span>
            <span></span>

            <!--
            Too bad the menu has to be inside of the button
            but hey, it's pure CSS magic.
            -->
            <ul id="menu">
              <a href="idex.php"><li>Trang Chủ</li></a>
              <a href="aboutus.php"><li>Về Chúng Tôi</li></a>
              <a href="contact.php"><li>Liên Hệ</li></a>
              <a href="giohang.php"><li>Giỏ Hàng</li></a>

            </ul>
        </div>

      <!-- <div id="logo"> <img style="position: relative;"src="images/lg.png"></div> -->
      <!-- <div id="logo"> <img src="images/lg.png"></div> -->
        

      <div class="Gh">
       <a style="        background: no-repeat;
       border: none;
       outline: none;
       position: absolute;
       z-index: 999;
       height: 116%;
       height: 27%;
       right: 0;
       border-top-right-radius: 20px;
       border-bottom-right-radius: 20px;
       margin-top: -32px;
   }
   " href="{{route('cart.index')}}"  >
   <small style="    font-size: 15px;
   border: 2px solid #161515;
   color: black ;
   border: 2px solid #161515;
   -moz-border-radius: 10px;
   -webkit-border-radius: 10px;
   -ms-border-radius: 10px;
   -o-border-radius: 10px;
   border-radius: 10px;
}">{{count($cart)}} </small>
          <img  style="width: 30px;
          height: 42px;
      " src="images/cart.png">


        </a>
      </div>


    </div>


  </nav>

  <style>
  .oke{
    position: absolute;
    float: left;
    width: 44px;
    top: -61%;
  }
  #khungtimkiem{
    margin-top: 40px;
  }
  .menuday{
      position: relative;
      width:100%;

  }
  #nav{
    margin: -2px 0 0 0;
transition: top 800ms ease 0s;
position: fixed;
z-index: 9999;
background: #FFFFFF;
width: 100%;
height: 50px;
  }
    .navbar-fixed-top {
top: -60px;
transition: top 800ms ease 0s;
position: fixed;
z-index: 9999;
background: #FFFFFF;
width: 100%;
height: 50px;
}
   .show {
       top: 0px;
   }

</style>


 <script>
     /* -------------------------------------------------------------------------*
     * STICKY NAVIGATION
     * -------------------------------------------------------------------------*/
     $(window).scroll(function () {
         if ($(window).scrollTop() >= 99) {
             $('#nav').addClass('navbar-fixed-top');
         }


         if ($(window).scrollTop() >= 100) {
             $('#nav').addClass('show');
         } else {
             $('#nav').removeClass('show navbar-fixed-top');
         }
     });
</script>


