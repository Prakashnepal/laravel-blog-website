<!DOCTYPE html>
<html>

<head>
    <base href="/public">
 @include('home.home_css')
 <style>
    .center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  margin-bottom: 10px;
  width: 50%;
  height: 500px;

}
 </style>
</head>

<body>


    <!-- header section strats -->
    @include('home.header')
    <!-- end header section -->
    <hr style="height:1px;border-width:0;color:gray;background-color:white">
   <div style="text-align: center;color: white;padding-top: 30px" class="col-md-12">
    <div >
        <img class="center" src="/postimage/{{$post->image}}" alt="">

    </div>

    <h4 style="margin-top: 10px"><b>{{$post->title}}</b></h4>

    <div class="container" style="margin-top: 20px;">
        <p>{{$post->description}}</p>
        <h6 style="text-align: right;margin-top: 10px">Post by <b>{{$post->name}}</b></h6>
    </div>


   </div>



   <hr style="height:1px;border-width:0;color:gray;background-color:white;padding-top:20px;margin-top:40px;margin-bottom: 50px ">

  <!-- info section -->

@include('home.info')

  <!-- end info section -->



  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>

  <!-- range selector slider script -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.0/js/ion.rangeSlider.min.js"></script>


</body>

</html>
