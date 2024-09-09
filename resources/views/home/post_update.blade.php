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
    <!-- end header section -->
    <hr style="height:1px;border-width:0;color:gray;background-color:white;margin-top: 20px">
    <div class="container" style="color: white;margin-top: 30px">
        @if (session()->has('message'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            {{ session()->get('message') }}
        </div>
    @endif
        <h2 class="main-title" style="text-align: center;font-size: 30px">Update Post</h2>
        {{-- @if (session()->has('message'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="false">x</button>
            {{ session()->get('message') }}
        </div> --}}

        {{-- @endif --}}

        <div class="container">
            <div class="row">
                <div class="col-md-2">

                </div>
                <div class="col-md-8">
                    <form action="{{ url('update_post_data',$data->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Post Title</label>
                            <input type="text" name="title" value="{{ $data->title }}" id="title"
                                class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Post Description</label>
                            <textarea type="text" name="description" id="description" class="form-control">
                            {{ $data->description }}
                         </textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Old Image</label>
                            <img height="150px" width="150px" src="/postimage/{{$data->image}}" alt="">
                        </div>
                        <div class="form-group">
                            <label for="">Update Image</label>
                            <input type="file" name="image" id="image" class="form-control">
                        </div>
                        <div>


                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>

            </div>

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
