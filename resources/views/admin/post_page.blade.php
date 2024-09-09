<!DOCTYPE html>
<html lang="en">
<style>
    .post_title {
        color: black;
        font-size: 30px;
        font-weight: bold;
        text-align: center;
        padding: 30px;
    }

    label {
        width: 200px;
    }
</style>

<head>
    @include('admin.admin-css')
</head>

<body>
    <div class="layer"></div>
    <!-- ! Body -->
    <a class="skip-link sr-only" href="#skip-target">Skip to content</a>
    <div class="page-flex">
        <!-- ! Sidebar -->
        @include('admin.sidebar')
        <!-- ! Sidebar End-->
        <div class="main-wrapper">
            <!-- ! Main nav -->
            @include('admin.navbar')
            <!-- ! Main nav End -->
            <!-- ! Main Content-->
            <main class="main users chart-page" id="skip-target">
                <div class="container">
                    <h2 class="main-title" style="text-align: center">Add Post</h2>
                    @if(session()->has('message'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="false">x</button>
                        {{ session()->get('message') }}
                    </div>

                    @endif

                    <div class="container">
                        <div class="row">
                            <div class="col-md-2">

                            </div>
                            <div class="col-md-8">
                                <form action="{{ url('add_post') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="">Post Title</label>
                                        <input type="text" name="title" id="title" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Post Description</label>
                                        <textarea type="text" name="description" id="description" class="form-control">

                                     </textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Add Image</label>
                                        <input type="file" name="image" id="image" class="form-control">
                                    </div>
                                    <div>


                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>

                        </div>

                    </div>
                </div>
            </main>
            <!-- ! Main Content End -->
            <!-- ! Footer -->
            @include('admin.footer')
            <!-- ! Footer End-->
        </div>
    </div>
    <!-- ! Script -->
    @include('admin.script')
    <!-- ! Script End -->
</body>

</html>
