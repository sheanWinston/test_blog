@extends('layouts.app')

@section('content')
<div class="page-content-wrapper">
    <!-- Profile Content Wrapper-->
    <div class="profile-content-wrapper">
        <!-- Settings Option-->
        <div class="profile-settings-option"><a href="#"><i class="lni lni-cog"></i></a></div>
        <div class="container">
            <div class="user-meta-data d-flex align-items-center">
                <div class="user-thumbnail"><img src="img/bg-img/3.jpg" alt=""></div>
                <div class="user-content">
                    <h6>{{ Auth::user()->name }}</h6>
                    <p>{{ Auth::user()->email }}</p>
                    <div class="user-meta-data d-flex align-items-center justify-content-between">
                        <p class="mx-1"><span class="counter">432</span><span>Articles</span></p>
                        <p class="mx-1"><span class="counter">302</span><span>Followers</span></p>
                        <p class="mx-1"><span class="counter">104</span><span>Following</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- User All Article-->
    <div class="user-all-article-wrapper">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between">
                <h6 class="mb-3 newsten-title">My Articles</h6>
                <h6 class="mb-3 line-height-1">432 Posts</h6>
            </div>
        </div>
        <div class="container">
            <!-- Single News Post-->
            @foreach($posts as $post)
            <div class="single-news-post d-flex align-items-center bg-gray">
                <div class="post-thumbnail">
                    <div class="video-icon"><i class="lni lni-play"></i></div><img src="/storage/posts/{{ $post->image }}" alt="">
                </div>
                <div class="post-content"><a class="post-title" href="{{ route('post.view', [Str::slug($post->title), $post->id] ) }}">{{ $post->title }}</a>
                    <div class="post-meta d-flex align-items-center"><a href="#">{{ $post->category }}</a><a href="#">{{ $post->created_at->format('d M, Y h:ia') }} {{ $post->created_at->diffForHumans() }} </a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
@endsection
