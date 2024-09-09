<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @include('admin.admin-css')
    <style>
        .img_deg {
            height: 80px;
            width: 100px;
        }
    </style>
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
                    @if (session()->has('message'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                        {{ session()->get('message') }}
                    </div>
                    @endif
                    <h2 class="main-title" style="text-align: center">All Posts</h2>
                    <table class="table table-striped table-dark">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Post Title</th>
                                <th scope="col">Description</th>
                                <th scope="col">Post By</th>
                                <th scope="col">Post Status</th>
                                <th scope="col">User Type</th>
                                <th scope="col">Image</th>
                                <th scope="col">Delete</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($post as $p)
                                <tr>

                                    <td>{{ $p->user_id }}</td>
                                    <td>{{ $p->title }}</td>
                                    <td>{{ $p->description }}</td>
                                    <td>{{ $p->name }}</td>
                                    <td>{{ $p->post_status }}</td>
                                    <td>{{ $p->usertype }}</td>

                                    <td>
                                        <img class="img_deg" src="postimage/{{ $p->image }}">
                                    </td>
                                    <td>
                                        <a href="{{ url('delete_post', $p->id) }}" class="btn btn-danger"
                                            onclick="confirmation(event)">Delete</a>
                                    </td>
                                    <td>
                                        <a href="{{url('edit_page', $p->id)}}" class="btn btn-primary">Edit</a>
                                    </td>
                                    <td>
                                        <a href="{{url('accept_post', $p->id)}}" onclick="return confirm('Are you sure to sccept post.')" class="btn btn-success">Accept</a>
                                    </td>
                                    <td>
                                        <a href="{{url('reject_post', $p->id)}}" onclick="return confirm('Are you sure to reject post.')" class="btn btn-danger">Reject</a>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
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

    <script type="text/javascript">
        function confirmation(ev) {

            ev.preventDefault();

            var urlToRedirect = ev.currentTarget.getAttribute('href');

            console.log(urlToRedirect);

            swal({
                    title: "Are you sure to delete this",
                    text: "You won't be able to revert this delete ",
                    icon: "warning",
                    buttons : true,
                    dangerMode : true,

                })

                .then((willCancel) => {
                    if (willCancel){
                      window.location.href=urlToRedirect;
                    }
                });
        }
    </script>
</body>

</html>
