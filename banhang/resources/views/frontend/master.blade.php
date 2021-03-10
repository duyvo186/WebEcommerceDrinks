
<!DOCTYPE html>
<html lang="en">

<head>
    @include('frontend.widgets.header')
    @include('frontend.widgets.head')

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

@include('frontend.widgets.menu')
@include('frontend.widgets.menukhac')
@include('frontend.widgets.banner')
  <body>



    <!-- END nav -->






    @yield('content')



    @include('frontend.widgets.footer')



  <!-- loader -->




  </body>
  @include('frontend.widgets.js')
</html>
