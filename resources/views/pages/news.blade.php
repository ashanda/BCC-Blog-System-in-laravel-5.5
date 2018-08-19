<!doctype html>
<html class="no-js" lang="">
@section('title', 'News')
   @include('pages.includes.head')
@section('class5', 'active')
<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Add your site or application content here -->
    <!-- Preloader Start Here -->
    <!--<div id="preloader"></div> -->
    <!-- Preloader End Here -->
    <!-- Main Body Area Start Here -->
    <div id="wrapper">
        <!-- Header Area Start Here -->
      @include('pages.includes.header')
        <!-- Header Area End Here -->
<div class="inner-page-banner-area" style="background-image: url('img/banner/4.jpg');">
            <div class="container">
                <div class="pagination-area">
                    <h1>Our News</h1>
                    <ul>
                        <li><a href="#">Home</a> -</li>
                        <li>News</li>
                    </ul>
                </div>
            </div>
        </div>

<div class="news-page-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-8 col-xs-12">
                        <div class="row">
                     
                             @if($posts->count() > 0)
                                    @foreach($posts->reverse() as $post)
                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                <div class="news-box">
                                    <div class="news-img-holder">
                                        <img src="{{ $post->featured }}" class="img-responsive" alt="research">
                                        <ul class="news-date2">
                                            <li>27 Dec</li>
                                            <li>2016</li>
                                        </ul>
                                    </div>
                                    <h3 class="title-news-left-bold"><a href="{{ route('post.single', ['slug' => $post->slug ]) }}">{{ $post->title }}</a></h3>
                                  
                                </div>
                            </div>
                           @endforeach
                           @endif

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

        <!-- Students Join 2 Area End Here -->
        <!-- Footer Area Start Here -->
   @include('pages.includes.footer')
</body>


</html>