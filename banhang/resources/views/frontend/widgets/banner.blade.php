<nav class="slideshow">
<div>
    <h3>
        D &emsp; & &emsp; V &emsp; H &emsp; O &emsp; M &emsp; E
      </h3>
      <br>
</div>



    <div class="btnbuy"><button style="
        padding: 10px 36px;
        border-radius: 36px;
        background-color: seashell;
        border: none;
    " href="#"> Buy Now</button></div>
    <ul>
        <li>
            <span>image-1</span>

        </li>
        <li>
            <span>image-2</span>

        </li>
        <li>
            <span>image-3</span>

        </li>
        <li>
            <span>image-4</span>

        </li>
        <li>
            <span>image-5</span>

        </li>
        <li>
            <span>image-6</span>

        </li>
    </ul>



  </nav>

  </body>
  <style>

  *{
      box-sizing: border-box;
      -webkit-box-sizing: border-box;
      -o-box-sizing: border-box;
      -moz-box-sizing: border-box;
      margin: 0;
      padding: 0
  }

  .slideshow , .slideshow:after {
      position: relative;
      height: 100%;
      width: 100%;
      top: 0;
      left: 0;
      bottom: 0;
      right: 0;
      z-index: 0
      }

  .slideshow:after {
        content: '';
  background-image: -moz-linear-gradient(45deg, #666 25%, transparent 25%),
          -moz-linear-gradient(-45deg, #666 25%, transparent 25%),
          -moz-linear-gradient(45deg, transparent 75%, #666 75%),
          -moz-linear-gradient(-45deg, transparent 75%, #666 75%);
      background-image: -webkit-gradient(linear, 0 100%, 100% 0, color-stop(.25, #666), color-stop(.25, transparent)),
          -webkit-gradient(linear, 0 0, 100% 100%, color-stop(.25, #666), color-stop(.25, transparent)),
          -webkit-gradient(linear, 0 100%, 100% 0, color-stop(.75, transparent), color-stop(.75, #666)),
          -webkit-gradient(linear, 0 0, 100% 100%, color-stop(.75, transparent), color-stop(.75, #666));
      background-image: -webkit-linear-gradient(45deg, #666 25%, transparent 25%),
          -webkit-linear-gradient(-45deg, #666 25%, transparent 25%),
          -webkit-linear-gradient(45deg, transparent 75%, #666 75%),
          -webkit-linear-gradient(-45deg, transparent 75%, #666 75%);
      background-image: -o-linear-gradient(45deg, #666 25%, transparent 25%),
          -o-linear-gradient(-45deg, #666 25%, transparent 25%),
          -o-linear-gradient(45deg, transparent 75%, #666 75%),
          -o-linear-gradient(-45deg, transparent 75%, #666 75%);
      background-image: linear-gradient(45deg, #666 25%, transparent 25%),
          linear-gradient(-45deg, #666 25%, transparent 25%),
          linear-gradient(45deg, transparent 75%, #666 75%),
          linear-gradient(-45deg, transparent 75%, #666 75%);
      -moz-background-size: 2px 2px;
      background-size: 2px 2px;
      -webkit-background-size: 2px 2.1px; /* override value for webkit */
      background-position: 0 0, 1px 0, 1px -1px, 0px 1px;
   }

   .slideshow li span{
      width: 100%;
      height: 100%;
      background-size: cover;
      background-position: center;
      background-repeat: none;
      opacity: 0;
      z-index: 0;
      position: absolute;
      top: 0px;
      left: 0px;
      color: transparent;
          animation: fadeslidshow 36s ease-in-out infinite;
      -webkit-animation: fadeslidshow 36s ease-in-out infinite;
      -moz-animation: fadeslidshow 36s ease-in-out infinite;
      -o-animation: fadeslidshow 36s ease-in-out infinite;
      -ms-animation: fadeslidshow 36s ease-in-out infinite;
   }
   .slideshow div {
      z-index: 1000;
      position: absolute;
      bottom: 400px;
      left: 0px;
      width: 100%;
      text-align: center;


      }
   .slideshow  div h3 {

      font-size: 50px;
      padding: 0;
      line-height: 200px;
      color: rgb(0, 0, 0);
      font-family: 'FontAwesome';
      font-weight: bolder;
  }
  .slideshow li:nth-child(1) span {
      background-image: url(images/bn1.jfif);
      }
  .slideshow li:nth-child(2) span {
      background-image: url(images/bn2.jfif);
      animation-delay: 6s;
      -webkit-animation-delay: 6s;
      -o-animation-delay: 6s;
      -moz-animation-delay: 6s;
      -ms-animation-delay: 6s;}
  .slideshow li:nth-child(3) span {
      background-image: url(images/bn3.jpg);
      animation-delay: 12s;
      -webkit-animation-delay: 12s;
      -o-animation-delay: 12s;
      -moz-animation-delay: 12s;
      -ms-animation-delay: 12s;}
  .slideshow li:nth-child(4) span {
      background-image: url(images/bn4.jpg);
      animation-delay: 18s;
      -webkit-animation-delay: 18s;
      -o-animation-delay: 18s;
      -moz-animation-delay: 18s;
      -ms-animation-delay: 18s;
  }
  .slideshow li:nth-child(5) span {
      background-image: url(images/bn5.jpg);
      animation-delay: 24s;
      -webkit-animation-delay: 24s;
      -o-animation-delay: 24s;
      -moz-animation-delay: 24s;
      -ms-animation-delay: 24s;
  }
  .slideshow li:nth-child(6) span {
      background-image: url(images/bn6.jpg);
      animation-delay: 30s;
      -webkit-animation-delay: 30s;
      -o-animation-delay: 30s;
      -moz-animation-delay: 30s;
      -ms-animation-delay: 30s;
  }

  .slideshow li:nth-child(2) div {
      animation-delay: 6s;
      -webkit-animation-delay: 6s;
      -o-animation-delay: 6s;
      -moz-animation-delay: 6s;
      -ms-animation-delay: 6s;;
  }
  .slideshow li:nth-child(3) div {
      animation-delay: 12s;
      -webkit-animation-delay: 12s;
      -o-animation-delay: 12s;
      -moz-animation-delay: 12s;
      -ms-animation-delay: 12s;}
  .slideshow li:nth-child(4) div {
      animation-delay: 18s;
      -webkit-animation-delay: 18s;
      -o-animation-delay: 18s;
      -moz-animation-delay: 18s;
      -ms-animation-delay: 18s;}
  .slideshow li:nth-child(5) div {
          animation-delay: 24s;
      -webkit-animation-delay: 24s;
      -o-animation-delay: 24s;
      -moz-animation-delay: 24s;
      -ms-animation-delay: 24s; }
  .slideshow li:nth-child(6) div {
      animation-delay: 30s;
      -webkit-animation-delay: 30s;
      -o-animation-delay: 30s;
      -moz-animation-delay: 30s;
      -ms-animation-delay: 30s;}
    /*fadeslidshow*/
    .btnbuy{
      position: absolute;
      padding: 10px 20px;

    }
   @-webkit-keyframes  fadeslidshow {
      0%,100%,24%{opacity: 0}
      8%{opacity: 1}
      16%{opacity: 1}

   }

   @-moz-keyframes  fadeslidshow {
      0%,100%,24%{opacity: 0}
      8%{opacity: 1}
      16%{opacity: 1}

   }

   @-o-keyframes  fadeslidshow {
      0%,100%,24%{opacity: 0}
      8%{opacity: 1}
      16%{opacity: 1}

   }


   @-ms-keyframes  fadeslidshow {
      0%,100%,24%{opacity: 0}
      8%{opacity: 1}
      16%{opacity: 1}

   }
   @keyframes  fadeslidshow {
      0%,100%,24%{opacity: 0}
      8%{opacity: 1}
      16%{opacity: 1}

   }
   /*end fadeslidshow*/



  </style>
