<!DOCTYPE html>
<html>

<head>
 @include('home.home_css')
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
@include('home.header')
    <!-- end header section -->
    <!-- slider section -->

@include('home.slider')
    <!-- end slider section -->
  </div>

  <!-- trip section -->

 @include('home.trip')

  <!-- end trip section -->


  <!-- package section -->


@include('home.package')

  <!-- end package section -->

  <!-- service section -->

 @include('home.service')

  <!-- end service section -->

  <!-- blog section -->
@include('home.blog')

  <!-- end blog section -->

  <!-- client section -->
 @include('home.client')


  <!-- end client section -->

  <!-- info section -->
@include('home.info')

  <!-- end info section -->



  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>

  <!-- range selector slider script -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.0/js/ion.rangeSlider.min.js"></script>

  <script>
    $(".js-range-slider").ionRangeSlider({
      skin: "round",
      type: "double",
      min: 200,
      max: 10000,
      from: 200,
      to: 500,
      grid: true
    });
  </script>

</body>

</html>
