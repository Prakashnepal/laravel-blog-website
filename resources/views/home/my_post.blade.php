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

    @include('sweetalert::alert');
    <!-- header section strats -->
    @include('home.header')
    @if (session()->has('message'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            {{ session()->get('message') }}
        </div>
    @endif
    <!-- end header section -->
    <hr style="height:1px;border-width:0;color:gray;background-color:white;margin-top: 20px">
    <div class="container" style="color: white;margin-top: 30px">
        <h2 class="main-title" style="text-align: center;font-size: 30px">My Post</h2>

        <div class="row">
            @foreach ($data as $data)
                <div class="card col-md-3 mr-5 " style="width:18rem;margin-top: 50px;">
                    <img src="/postimage/{{ $data->image }} " class="card-img-top" alt="">
                    <hr style="height:1px;border-width:0;color:gray;background-color:black;margin-top: 20px">
                    <div class="card-body" style="color: black">
                        <h4 class="card-title"><b>{{ $data->title }}</b></h4>
                        <p class="card-text">{{ $data->description }}</p>
                    </div>
                    <div>
                        <div class="row">
                            <div class="col-md-6">
                                <a style="width: 60%;margin-left: 35%;margin-bottom: 5px"
                                onclick="confirm('Are you sure to delete this?')"
                                href="{{ url('my_post_del', $data->id) }} " class="btn btn-danger">Delete</a>
                            </div>
                            <div class="col-md-6">
                                <a style="width: 65%;margin-left: 35%;margin-bottom: 5px"

                                href="{{ url('my_post_edit', $data->id) }} " class="btn btn-success">Update</a>
                            </div>

                        </div>

                    </div>

                </div>
            @endforeach
        </div>
    </div>

    <hr
        style="height:1px;border-width:0;color:gray;background-color:white;padding-top:20px;margin-top:40px;margin-bottom: 50px ">

    <!-- info section -->

    @include('home.info')

    <!-- end info section -->



    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>

    <!-- range selector slider script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.0/js/ion.rangeSlider.min.js"></script>


</body>

</html>
