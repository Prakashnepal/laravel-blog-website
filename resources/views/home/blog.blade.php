{{-- @php

use App\Http\Controllers\HomeConroller;
$var = HomeController::homepage();

@endphp --}}
<section class="blog_section" id="blog">
    <div class="container">
        <div class="heading_container">
            <h2>
                Our Blog
            </h2>
            <p>
                aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
            </p>
        </div>
    </div>
    <div class="container">
        <div class="box container-bg">

            {{-- @if($post->count() > 0) --}}


            @if($post->count() >= 3)

            {{-- <h2>{{ $posts[0]->title }}</h2> --}}


@foreach ($post as $post )


            <div class="blog_box">

                <div class="detail-box">
                    <div class="img-box">
                        <img height="200px" width="200px" src="/postimage/{{  $post->image }}" alt="">
                    </div>
                    <div class="text-box">
                        <h5>
                            {{ $post->title }}
                        </h5>
                        <h6>
                            Post By :{{ $post->name }}
                        </h6>
                        <p>
                            {{  $post->description }}
                        </p>
                    </div>
                </div>
                <a href="{{url('post_details', $post->id)}}">
                    Read More
                </a>
            </div>
            @endforeach
            {{-- <div class="blog_box-cover">
                <div class="blog_box">

                    <div class="detail-box">
                        <div class="img-box">
                            <img height="200px" width="200px" src="/postimage/{{  $post[1]->image }}" alt="">
                        </div>
                        <div class="text-box">
                            <h5>
                                {{  $post[1]->title }}
                            </h5>
                            <h6>
                                Post By :{{  $post[1]->name }}
                            </h6>
                            <p>
                                {{  $post[1]->description }}
                            </p>
                        </div>
                    </div>
                    <a href="{{url('post_details', $post[1]->id)}}">
                        Read More
                    </a>
                </div>
                <div class="blog_box">

                    <div class="detail-box">
                        <div class="img-box">
                            <img height="200px" width="200px" src="/postimage/{{  $post[2]->image }}" alt="">
                        </div>
                        <div class="text-box">
                            <h5>
                                {{  $post[2]->title }}
                            </h5>
                            <h6>
                                Post By :{{  $post[2]->name }}
                            </h6>
                            <p>
                                {{  $post[2]->description }}
                            </p>
                        </div>
                    </div>
                    <a href="{{url('post_details', $post[2]->id)}}">
                        Read More
                    </a>
                </div>
            </div> --}}
            {{-- <div class="blog_box">

                <div class="detail-box">
                    <div class="img-box">
                        <img height="200px" width="200px" src="/postimage/{{  $post[5]->image }}" alt="">
                    </div>
                    <div class="text-box">
                        <h5>
                            {{  $post[5]->title }}
                        </h5>
                        <h6>
                            Post By :{{  $post[5]->name }}
                        </h6>
                        <p>
                            {{  $post[5]->description }}
                        </p>
                    </div>
                </div>
                <a href="{{url('post_details', $post[35]->id)}}">
                    Read More
                </a>
            </div> --}}
        </div>
    </div>

@else
<p>Not enough posts available</p>
@endif
</section>
