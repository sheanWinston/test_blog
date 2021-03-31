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
    <!-- Traffic Source-->
    <div class="traffic-source-wrapper">
        <div class="container">
          <a href="{{ route('add-post') }}"><button class="btn btn-primary mb-3">Add Post</button></a>
        <div class="d-flex align-items-center justify-content-between">
          <h6 class="mb-3 newsten-title">Traffic Source</h6>
          <p class="mb-3 line-height-1">Last 7 days</p>
        </div>
        <div class="traffic-source-chart" id="trafficeSource"></div>
      </div>
    </div>
    <div class="container">
      <div class="border-top"></div>
    </div>
    <!-- My Visitors Wrapper-->
    <div class="my-visitors-wrapper">
      <div class="container">
        <div class="d-flex align-items-center justify-content-between">
          <h6 class="mb-3 newsten-title">Weekly Visitors</h6>
          <p class="mb-3 line-height-1">Last 7 days</p>
        </div>
        <div class="user-total-count-chart" id="visitors-chart"></div>
      </div>
    </div>
    <div class="container">
      <div class="border-top"></div>
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
        <div class="single-news-post d-flex align-items-center bg-gray">
          <div class="post-thumbnail">
            <div class="video-icon"><i class="lni lni-play"></i></div><img src="img/bg-img/20.jpg" alt="">
          </div>
          <div class="post-content"><a class="post-title" href="single.html">Morning walking &amp; running is good for health</a>
            <div class="post-meta d-flex align-items-center"><a href="#">Habits</a><a href="#">1,799 views</a></div>
          </div>
        </div>
        <!-- Single News Post-->
        <div class="single-news-post d-flex align-items-center bg-gray">
          <div class="post-thumbnail"><img src="img/bg-img/21.jpg" alt=""></div>
          <div class="post-content"><a class="post-title" href="single.html">BD celebrate independence day in 26 march</a>
            <div class="post-meta d-flex align-items-center"><a href="#">Planets</a><a href="#">2,152 views</a></div>
          </div>
        </div>
        <!-- Single News Post-->
        <div class="single-news-post d-flex align-items-center bg-gray">
          <div class="post-thumbnail"><img src="img/bg-img/22.jpg" alt=""></div>
          <div class="post-content"><a class="post-title" href="single.html">Skating nowadays very popular sports in sea area</a>
            <div class="post-meta d-flex align-items-center"><a href="#">Sports</a><a href="#">3,124 views</a></div>
          </div>
        </div>
        <!-- Single News Post-->
        <div class="single-news-post d-flex align-items-center bg-gray">
          <div class="post-thumbnail"><img src="img/bg-img/23.jpg" alt=""></div>
          <div class="post-content"><a class="post-title" href="single.html">The ship of the desert reducing rapidly in the world</a>
            <div class="post-meta d-flex align-items-center"><a href="#">Camel</a><a href="#">1,625 views</a></div>
          </div>
        </div>
        <!-- Single News Post-->
        <div class="single-news-post d-flex align-items-center bg-gray">
          <div class="post-thumbnail">
            <div class="video-icon"><i class="lni lni-play"></i></div><img src="img/bg-img/24.jpg" alt="">
          </div>
          <div class="post-content"><a class="post-title" href="single.html">Why you will eat apple & banana every day</a>
            <div class="post-meta d-flex align-items-center"><a href="#">Habits</a><a href="#">1,112 views</a></div>
          </div>
        </div>
        <!-- Single News Post-->
        <div class="single-news-post d-flex align-items-center bg-gray">
          <div class="post-thumbnail"><img src="img/bg-img/25.jpg" alt=""></div>
          <div class="post-content"><a class="post-title" href="single.html">Satellite now producing more waste on the planet</a>
            <div class="post-meta d-flex align-items-center"><a href="#">Planet</a><a href="#">1,987 views</a></div>
          </div>
        </div>
        <!-- Single News Post-->
        <div class="single-news-post d-flex align-items-center bg-gray">
          <div class="post-thumbnail"><img src="img/bg-img/26.jpg" alt=""></div>
          <div class="post-content"><a class="post-title" href="single.html">Balcony gardening is a new trend of big cities</a>
            <div class="post-meta d-flex align-items-center"><a href="#">Mayaj</a><a href="#">589 views</a></div>
          </div>
        </div>
        <!-- Single News Post-->
        <div class="single-news-post d-flex align-items-center bg-gray">
          <div class="post-thumbnail">
            <div class="video-icon"><i class="lni lni-play"></i></div><img src="img/bg-img/27.jpg" alt="">
          </div>
          <div class="post-content"><a class="post-title" href="single.html">The world is becoming polluted very fast and lives are being destroyed</a>
            <div class="post-meta d-flex align-items-center"><a href="#">Nazrul</a><a href="#">2,789 views</a></div>
          </div>
        </div>
        <!-- Single News Post-->
        <div class="single-news-post d-flex align-items-center bg-gray">
          <div class="post-thumbnail"><img src="img/bg-img/28.jpg" alt=""></div>
          <div class="post-content"><a class="post-title" href="single.html">Sea is polluted in a terrible way by human garbage</a>
            <div class="post-meta d-flex align-items-center"><a href="#">Suha</a><a href="#">3,785 views</a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
