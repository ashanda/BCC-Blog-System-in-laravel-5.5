<!doctype html>
<html class="no-js" lang="">
@section('Home')
   @include('pages.includes.head')
   <script src="theme/js/vendor/modernizr-2.6.2.min.js"></script>
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
        <!-- Slider 1 Area Start Here -->
       <section class="intro_section page_mainslider ds">
                <div class="flexslider" data-nav="false">
                    <ul class="slides">

                        <li>
                            <img src="theme/images/slide01.jpg" alt="" />
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="slide_description_wrapper">
                                            <div class="slide_description">
                                                <div class="intro-layer" data-animation="fadeInUp">
                                                    <h2 class="text-uppercase">
                                                        We!
                                                    </h2>
                                                </div>
                                                <div class="intro-layer" data-animation="fadeInUp">
                                                    <h3 class="text-uppercase">
                                                        Bleed blue and yellow
                                                    </h3>
                                                </div>
                                                <div class="intro-layer" data-animation="fadeInUp">
                                                    <a href="about.html" class="theme_button color2">Become Activist</a>
                                                </div>
                                            </div>
                                            <!-- eof .slide_description -->
                                        </div>
                                        <!-- eof .slide_description_wrapper -->
                                    </div>
                                    <!-- eof .col-* -->
                                </div>
                                <!-- eof .row -->
                            </div>
                            <!-- eof .container -->
                        </li>
 
                        <li>
                            <img src="theme/images/slide02.jpg" alt="" />
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="slide_description_wrapper">
                                            <div class="slide_description">
                                                <div class="intro-layer" data-animation="fadeInUp">
                                                    <h2 class="text-uppercase">
                                                        BCC where!
                                                    </h2>
                                                </div>
                                                <div class="intro-layer" data-animation="fadeInUp">
                                                    <h3 class="text-uppercase">
                                                        We took the leap of faith.
                                                    </h3>
                                                </div>
                                                <div class="intro-layer" data-animation="fadeInUp">
                                                    <a href="about.html" class="theme_button color2">About us</a>
                                                </div>
                                            </div>
                                            <!-- eof .slide_description -->
                                        </div>
                                        <!-- eof .slide_description_wrapper -->
                                    </div>
                                    <!-- eof .col-* -->
                                </div>
                                <!-- eof .row -->
                            </div>
                            <!-- eof .container -->
                        </li>

                        <li>
                            <img src="theme/images/slide03.jpg" alt="" />
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-12 text-center">
                                        <div class="slide_description_wrapper">
                                            <div class="slide_description">
                                                <div class="intro-layer" data-animation="fadeInUp">
                                                    <h2 class="text-uppercase">
                                                        Throw
                                                    </h2>
                                                </div>
                                                <div class="intro-layer" data-animation="fadeInUp">
                                                    <h3 class="text-uppercase">
                                                        The chains of justice
                                                    </h3>
                                                </div>
                                                <div class="intro-layer" data-animation="fadeInUp">
                                                    <a href="about.html" class="theme_button color2">Contact us</a>
                                                </div>
                                            </div>
                                            <!-- eof .slide_description -->
                                        </div>
                                        <!-- eof .slide_description_wrapper -->
                                    </div>
                                    <!-- eof .col-* -->
                                </div>
                                <!-- eof .row -->
                            </div>
                            <!-- eof .container -->
                        </li>

                    </ul>
                </div>
                <!-- eof flexslider -->

            </section>

            <section class="ls ms section_padding_20 top_offset_content columns_margin_bottom_20">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 to_animate" data-animation="fadeInUp">
                            <div class="ls with_padding big-padding bg_teaser rounded">
                                <img src="theme/images/activists_bg.jpg" alt="" />
                                <div>
                                    <h3 class="thin text-uppercase">
                                        OLD BOYS
                                        <br />
                                        <strong>Association</strong>
                                    </h3>
                                    <p class="small-text bold darklinks">
                            <a href="about.html">View more</a>
                        </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 to_animate" data-animation="fadeInUp">
                            <div class="ls with_padding big-padding bg_teaser rounded">
                                <img src="theme/images/goals_bg.jpg" alt="" />
                                <div>
                                    <h3 class="thin text-uppercase">
                                        Colombo
                                        <br />
                                        <strong>chapter</strong>
                                    </h3>
                                    <p class="small-text bold darklinks">
                            <a href="about.html">View more</a>
                        </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 to_animate" data-animation="fadeInUp">
                            <div class="ls with_padding big-padding bg_teaser rounded">
                                <img src="theme/images/cm_bg.jpg" alt="" />
                                <div>
                                    <h3 class="thin text-uppercase">
                                        community
                                        <br />
                                        <strong>foram</strong>
                                    </h3>
                                    <p class="small-text bold darklinks">
                            <a href="about.html">View more</a>
                        </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="ls section_padding_top_150 section_padding_bottom_10 columns_margin_bottom_30">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="rounded overflow_hidden">
                                <div class="with_padding gradient_bg_color heading_wrappper">
                                    <h5 class="text-uppercase margin_0">Latest News</h5>
                                </div>

                                <div class="with_padding with_background">

                                    <div class="widget widget_slider widget_featured_posts">

                                        <div class="owl-carousel" data-nav="true" data-loop="true" data-autoplay="true" data-items="1" data-responsive-lg="1" data-responsive-md="1" data-responsive-sm="1" data-responsive-xs="1">
                                            <ul>
                                                <li class="media big-left-media">
                                                    <div class="media-left media-middle">
                                                        <img src="{{$first_post->featured }}"  alt="news" width="150" height="150" />
                                                    </div>
                                                    <div class="media-body media-middle">
                                                        <h4>
                                                            <a href="{{ route('post.single', ['slug' => $first_post->slug ]) }}">
                                                    {{ $first_post->title }}
                                                </a>
                                                        </h4>
                                                        <p class="small-text highlight highlightlinks">
                                                <a href="blog-single-right.html">Admin</a>,
                                                <a href="blog-right.html">
                                                    <time class="entry-date" datetime="2017-03-13T08:50:40+00:00">
                                                       {{ $first_post->created_at->toFormattedDateString() }}
                                                    </time>
                                                </a>
                                            </p>
                                                    </div>
                                                </li>
                                                <li class="media big-left-media">
                                                    <div class="media-left media-middle">
                                                        <img src="theme/images/post-thumbs/02.jpg" alt="" />
                                                    </div>
                                                    <div class="media-body media-middle">
                                                        <h4>
                                                            <a href="blog-single-right.html">
                                                    Irmod tempor invidunt ut labore et dolore
                                                </a>
                                                        </h4>
                                                        <p class="small-text highlight highlightlinks">
                                                <a href="blog-single-right.html">Admin</a>,
                                                <a href="blog-right.html">
                                                    <time class="entry-date" datetime="2017-03-13T08:50:40+00:00">
                                                        08.05.2017
                                                    </time>
                                                </a>
                                            </p>
                                                    </div>
                                                </li>
                                                <li class="media big-left-media">
                                                    <div class="media-left media-middle">
                                                        <img src="theme/images/post-thumbs/03.jpg" alt="" />
                                                    </div>
                                                    <div class="media-body media-middle">
                                                        <h4>
                                                            <a href="blog-single-right.html">
                                                    Magna aliquyam erat, sed diam
                                                </a>
                                                        </h4>
                                                        <p class="small-text highlight highlightlinks">
                                                <a href="blog-single-right.html">Admin</a>,
                                                <a href="blog-right.html">
                                                    <time class="entry-date" datetime="2017-03-13T08:50:40+00:00">
                                                        01.08.2017
                                                    </time>
                                                </a>
                                            </p>
                                                    </div>
                                                </li>
                                            </ul>

                                            <ul>
                                                <li class="media big-left-media">
                                                    <div class="media-left media-middle">
                                                        <img src="{{ $second_post->featured }}" alt=""  alt="news" width="150" height="150" />
                                                    </div>
                                                    <div class="media-body media-middle">
                                                        <h4>
                                                            <a href="{{ route('post.single', ['slug' => $second_post->slug ]) }}">
                                                    {{ $second_post->title }}
                                                </a>
                                                        </h4>
                                                        <p class="small-text highlight highlightlinks">
                                                <a href="blog-single-right.html">Admin</a>,
                                                <a href="blog-right.html">
                                                    <time class="entry-date" datetime="2017-03-13T08:50:40+00:00">
                                                        {{ $second_post->created_at->toFormattedDateString() }}
                                                    </time>
                                                </a>
                                            </p>
                                                    </div>
                                                </li>
                                                <li class="media big-left-media">
                                                    <div class="media-left media-middle">
                                                        <img src="theme/images/post-thumbs/05.jpg" alt="" />
                                                    </div>
                                                    <div class="media-body media-middle">
                                                        <h4>
                                                            <a href="blog-single-right.html">
                                                    Irmod tempor invidunt ut labore et dolore
                                                </a>
                                                        </h4>
                                                        <p class="small-text highlight highlightlinks">
                                                <a href="blog-single-right.html">Admin</a>,
                                                <a href="blog-right.html">
                                                    <time class="entry-date" datetime="2017-03-13T08:50:40+00:00">
                                                        08.05.2017
                                                    </time>
                                                </a>
                                            </p>
                                                    </div>
                                                </li>
                                                <li class="media big-left-media">
                                                    <div class="media-left media-middle">
                                                        <img src="theme/images/post-thumbs/06.jpg" alt="" />
                                                    </div>
                                                    <div class="media-body media-middle">
                                                        <h4>
                                                            <a href="blog-single-right.html">
                                                    Magna aliquyam erat, sed diam
                                                </a>
                                                        </h4>
                                                        <p class="small-text highlight highlightlinks">
                                                <a href="blog-single-right.html">Admin</a>,
                                                <a href="blog-right.html">
                                                    <time class="entry-date" datetime="2017-03-13T08:50:40+00:00">
                                                        01.08.2017
                                                    </time>
                                                </a>
                                            </p>
                                                    </div>
                                                </li>
                                            </ul>

                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-8">
                            <div class="owl-carousel" data-responsive-lg="2" data-responsive-md="2" data-responsive-sm="1">
                                <article class="vertical-item content-padding text-center with_border rounded">
                                    <div class="item-media top_rounded overflow_hidden">
                                       <img src="{{ $first_post->featured }}" alt="{{ $first_post->title }}" width="150"></a>
                                        <div class="media-links">
                                            <a href="blog-single-right.html" class="abs-link"></a>
                                        </div>
                                    </div>
                                    <div class="item-content">
                                        <header class="entry-header">
                                            <h4 class="entry-title">
                                                <a href="{{ route('post.single', ['slug' => $first_post->slug ]) }}">
                                                    {{ $first_post->title }}</a>
                                            </h4>
                                        </header>
                                        <div class="entry-content">
                                            <p>{{ $first_post->content }}</p>
                                        </div>
                                    </div>
                                    <footer class="entry-meta with_top_border darklinks">
                                        <p class="inline-content small-text">
                                <span>
                                    <i class="fa fa-user rightpadding_5 highlight" aria-hidden="true"></i>
                                    <a href="blog-single-right.html">Admin</a>
                                </span>
                                <span>
                                    <i class="fa fa-calendar rightpadding_5 highlight" aria-hidden="true"></i>
                                    <a href="blog-single-right.html">
                                        <time class="entry-date" datetime="2017-03-13T08:50:40+00:00">
                                            {{ $first_post->created_at->toFormattedDateString() }}
                                        </time>
                                    </a>
                                </span>                             
                            </p>
                                    </footer>
                                </article>

                                <article class="vertical-item content-padding text-center with_border rounded">
                                    <div class="item-media top_rounded overflow_hidden">
                                        <img src="theme/images/gallery/02.jpg" alt="" />
                                        <div class="media-links">
                                            <a href="blog-single-right.html" class="abs-link"></a>
                                        </div>
                                    </div>
                                    <div class="item-content">
                                        <header class="entry-header">
                                            <h4 class="entry-title">
                                                <a href="blog-single-right.html">Stet clita kasd gubergren, takimata</a>
                                            </h4>
                                        </header>
                                        <div class="entry-content">
                                            <p>At vero eos et accusam et justo duo dolores et ea rebum clita kasd gubergren, no sea takimata sanctus est.</p>
                                        </div>
                                    </div>
                                    <footer class="entry-meta with_top_border darklinks">
                                        <p class="inline-content small-text">
                                <span>
                                    <i class="fa fa-user rightpadding_5 highlight" aria-hidden="true"></i>
                                    <a href="blog-single-right.html">Admin</a>
                                </span>
                                <span>
                                    <i class="fa fa-calendar rightpadding_5 highlight" aria-hidden="true"></i>
                                    <a href="blog-single-right.html">
                                        <time class="entry-date" datetime="2017-03-13T08:50:40+00:00">
                                            09/08/2017
                                        </time>
                                    </a>
                                </span>                             
                            </p>
                                    </footer>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="ls section_padding_top_40 section_padding_bottom_40">
                <div class="container">
                    <div class="row isotope_container isotope masonry-layout columns_padding_1">

                        <div class="isotope-item col-md-3 col-sm-6">
                            <article class="vertical-item content-absolute rounded overflow_hidden text-center">
                                <div class="item-media rounded overflow_hidden">
                                    <img src="theme/images/gallery/03.jpg" alt="" />
                                    <div class="media-links">

                                    </div>
                                </div>
                                <div class="item-content darken_gradient">
                                    <h4 class="entry-title margin_0"><a href="event-single-right.html">Lorem ipsum dolor sit</a></h4>
                                </div>
                            </article>
                        </div>
                        <div class="isotope-item col-md-3 col-sm-6">
                            <article class="vertical-item content-absolute rounded overflow_hidden text-center">
                                <div class="item-media rounded overflow_hidden">
                                    <img src="theme/images/gallery/04.jpg" alt="" />
                                    <div class="media-links">

                                    </div>
                                </div>
                                <div class="item-content darken_gradient">
                                    <h4 class="entry-title margin_0"><a href="event-single-right.html">Amet consetetur sadipscing</a></h4>
                                </div>
                            </article>
                        </div>
                        <div class="isotope-item col-md-6 col-sm-12">
                            <article class="vertical-item content-absolute rounded overflow_hidden text-center">
                                <div class="item-media rounded overflow_hidden">
                                    <img src="theme/images/gallery/05.png" alt="" />
                                    <div class="media-links">

                                    </div>
                                </div>
                                <div class="item-content darken_gradient ds">
                                   
                                    <h3 class="entry-title bottommargin_10"><a href="event-single-right.html">{{ $first_event->title }}</a></h3>
                                    <div class="entry-meta inline-content small-text darklinks">
                                        <span>
                                            <i class="fa fa-map-marker rightpadding_5 highlight" aria-hidden="true"></i>
                                            <a href="event-single-right.html">{{ $first_event->address }}</a>
                                        </span>
                                        <span>
                                            <i class="fa fa-calendar rightpadding_5 highlight" aria-hidden="true"></i>
                                            <span class="grey">{{ $first_event->start_date }}</span>
                                        </span>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="isotope-item col-md-3 col-sm-6">
                            <article class="vertical-item content-absolute rounded overflow_hidden text-center">
                                <div class="item-media rounded overflow_hidden">
                                    <img src="theme/images/gallery/06.jpg" alt="" />
                                    <div class="media-links">

                                    </div>
                                </div>
                                <div class="item-content darken_gradient">
                                    <h4 class="entry-title margin_0"><a href="event-single-right.html">Elitred diam nonumy eirmod</a></h4>
                                </div>
                            </article>
                        </div>

                        <div class="isotope-item col-md-3 col-sm-6">
                            <article class="vertical-item content-absolute rounded overflow_hidden text-center">
                                <div class="item-media rounded overflow_hidden">
                                    <img src="theme/images/gallery/07.jpg" alt="" />
                                    <div class="media-links">

                                    </div>
                                </div>
                                <div class="item-content darken_gradient">
                                    <h4 class="entry-title margin_0"><a href="event-single-right.html">Tempor invidunt labore</a></h4>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </section>

            <section class="ls section_padding_top_30 section_padding_bottom_30">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="owl-carousel" data-responsive-lg="3" data-responsive-md="2" data-responsive-sm="2">
                                <article class="vertical-item content-padding text-center with_border rounded">
                                    <div class="item-media top_rounded overflow_hidden">
                                        <img src="theme/images/gallery/08.jpg" alt="" />
                                        <div class="media-links">
                                            <a href="blog-single-right.html" class="abs-link"></a>
                                        </div>
                                    </div>
                                    <div class="item-content">
                                        <header class="entry-header">
                                            <h4 class="entry-title">
                                                <a href="blog-single-right.html">Lorem ipsum dolor sit amet consetetur</a>
                                            </h4>
                                        </header>
                                        <div class="entry-content">
                                            <p>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt labore et dolore magna.</p>
                                        </div>
                                    </div>
                                    <footer class="entry-meta with_top_border darklinks">
                                        <p class="inline-content small-text">
                                <span>
                                    <i class="fa fa-user rightpadding_5 highlight" aria-hidden="true"></i>
                                    <a href="blog-single-right.html">Admin</a>
                                </span>
                                <span>
                                    <i class="fa fa-calendar rightpadding_5 highlight" aria-hidden="true"></i>
                                    <a href="blog-single-right.html">
                                        <time class="entry-date" datetime="2017-03-13T08:50:40+00:00">
                                            07/08/2017
                                        </time>
                                    </a>
                                </span>                             
                            </p>
                                    </footer>
                                </article>

                                <article class="vertical-item content-padding text-center with_border rounded">
                                    <div class="item-media top_rounded overflow_hidden">
                                        <img src="theme/images/gallery/09.jpg" alt="" />
                                        <div class="media-links">
                                            <a href="blog-single-right.html" class="abs-link"></a>
                                        </div>
                                    </div>
                                    <div class="item-content">
                                        <header class="entry-header">
                                            <h4 class="entry-title">
                                                <a href="blog-single-right.html">Sadipscing elitr, sed diam nonumy</a>
                                            </h4>
                                        </header>
                                        <div class="entry-content">
                                            <p>At vero eos et accusam et justo duo dolores et ea rebum clita kasd gubergren, no sea takimata sanctus est.</p>
                                        </div>
                                    </div>
                                    <footer class="entry-meta with_top_border darklinks">
                                        <p class="inline-content small-text">
                                <span>
                                    <i class="fa fa-user rightpadding_5 highlight" aria-hidden="true"></i>
                                    <a href="blog-single-right.html">Admin</a>
                                </span>
                                <span>
                                    <i class="fa fa-calendar rightpadding_5 highlight" aria-hidden="true"></i>
                                    <a href="blog-single-right.html">
                                        <time class="entry-date" datetime="2017-03-13T08:50:40+00:00">
                                            04/08/2017
                                        </time>
                                    </a>
                                </span>                             
                            </p>
                                    </footer>
                                </article>

                                <article class="vertical-item content-padding text-center with_border rounded">
                                    <div class="item-media top_rounded overflow_hidden">
                                        <img src="theme/images/gallery/10.jpg" alt="" />
                                        <div class="media-links">
                                            <a href="blog-single-right.html" class="abs-link"></a>
                                        </div>
                                    </div>
                                    <div class="item-content">
                                        <header class="entry-header">
                                            <h4 class="entry-title">
                                                <a href="blog-single-right.html">Eirmod tempor invidunt ut labore et dolore</a>
                                            </h4>
                                        </header>
                                        <div class="entry-content">
                                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt.</p>
                                        </div>
                                    </div>
                                    <footer class="entry-meta with_top_border darklinks">
                                        <p class="inline-content small-text">
                                <span>
                                    <i class="fa fa-user rightpadding_5 highlight" aria-hidden="true"></i>
                                    <a href="blog-single-right.html">Admin</a>
                                </span>
                                <span>
                                    <i class="fa fa-calendar rightpadding_5 highlight" aria-hidden="true"></i>
                                    <a href="blog-single-right.html">
                                        <time class="entry-date" datetime="2017-03-13T08:50:40+00:00">
                                            01/08/2017
                                        </time>
                                    </a>
                                </span>                             
                            </p>
                                    </footer>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="ls section_padding_top_30 section_padidng_bottom_30">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">

                            <section class="intro_section ds gradient_bg_color2 transp_image rounded">
                                <div class="flexslider" data-nav="false">
                                    <ul class="slides">

                                        <li>
                                            <img src="theme/images/banner_slide01.jpg" alt="" class="rounded" />
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-sm-12 text-center">
                                                        <div class="slide_description_wrapper">
                                                            <div class="slide_description">
                                                                <div class="intro-layer to_animate" data-animation="fadeInUp">
                                                                    <h2 class="text-uppercase thin">
                                                                        Become
                                                                        <strong>an activist</strong>
                                                                    </h2>
                                                                </div>
                                                                <div class="intro-layer to_animate" data-animation="fadeInUp">
                                                                    <h3 class="text-uppercase">
                                                                        If you gonna make it better
                                                                    </h3>
                                                                </div>
                                                                <div class="intro-layer to_animate" data-animation="fadeInUp">
                                                                    <a href="about.html" class="theme_button color1">Sign up now</a>
                                                                </div>
                                                            </div>
                                                            <!-- eof .slide_description -->
                                                        </div>
                                                        <!-- eof .slide_description_wrapper -->
                                                    </div>
                                                    <!-- eof .col-* -->
                                                </div>
                                                <!-- eof .row -->
                                            </div>
                                            <!-- eof .container -->
                                        </li>

                                        <li>
                                            <img src="theme/images/banner_slide02.jpg" alt="" class="rounded" />
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-sm-12 text-center">
                                                        <div class="slide_description_wrapper">
                                                            <div class="slide_description">
                                                                <div class="intro-layer to_animate" data-animation="fadeInUp">
                                                                    <h2 class="text-uppercase thin">
                                                                        Your
                                                                        <strong>Support</strong>
                                                                    </h2>
                                                                </div>
                                                                <div class="intro-layer to_animate" data-animation="fadeInUp">
                                                                    <h3 class="text-uppercase">
                                                                        May help us
                                                                    </h3>
                                                                </div>
                                                                <div class="intro-layer to_animate" data-animation="fadeInUp">
                                                                    <a href="about.html" class="theme_button color1">Sign up now</a>
                                                                </div>
                                                            </div>
                                                            <!-- eof .slide_description -->
                                                        </div>
                                                        <!-- eof .slide_description_wrapper -->
                                                    </div>
                                                    <!-- eof .col-* -->
                                                </div>
                                                <!-- eof .row -->
                                            </div>
                                            <!-- eof .container -->
                                        </li>

                                        <li>
                                            <img src="theme/images/banner_slide03.jpg" alt="" class="rounded" />
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-sm-12 text-center">
                                                        <div class="slide_description_wrapper">
                                                            <div class="slide_description">
                                                                <div class="intro-layer to_animate" data-animation="fadeInUp">
                                                                    <h2 class="text-uppercase thin">
                                                                        Next
                                                                        <strong>Meeting</strong>
                                                                    </h2>
                                                                </div>
                                                                <div class="intro-layer to_animate" data-animation="fadeInUp">
                                                                    <h3 class="text-uppercase">
                                                                        23/08/2017
                                                                    </h3>
                                                                </div>
                                                                <div class="intro-layer to_animate" data-animation="fadeInUp">
                                                                    <a href="about.html" class="theme_button color1">How to get</a>
                                                                </div>
                                                            </div>
                                                            <!-- eof .slide_description -->
                                                        </div>
                                                        <!-- eof .slide_description_wrapper -->
                                                    </div>
                                                    <!-- eof .col-* -->
                                                </div>
                                                <!-- eof .row -->
                                            </div>
                                            <!-- eof .container -->
                                        </li>

                                    </ul>
                                </div>
                                <!-- eof flexslider -->
                            </section>

                        </div>
                    </div>
                </div>
            </section>

            <section class="ls section_padding_top_30 section_padding_bottom_150">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <article class="post format-small-image with_border side-item side-md content-padding responsive-thumb rounded topmargin_40">

                                <!-- <div class=""> -->

                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="item-media entry-thumbnail top_rounded overflow_hidden">
                                            <img src="theme/images/gallery/11.jpg" alt="" />
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="item-content">

                                            <h4 class="entry-title ">
                                                <a href="blog-single-right.html" rel="bookmark">At vero eos et accusam</a>
                                            </h4>

                                            <!-- .entry-meta -->

                                            <p>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt labore et dolore magna aliquyam erat, sed diam voluptua vero eos accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor amet. Lorem ipsum dolor amet, consetetur sadipscing eliiam nonumy eirmod.</p>

                                        </div>

                                        <footer class="entry-meta with_top_border darklinks">
                                            <p class="inline-content small-text">
                                        <span>
                                            <i class="fa fa-user rightpadding_5 highlight" aria-hidden="true"></i>
                                            <a href="blog-single-right.html">Admin</a>
                                        </span>
                                        <span>
                                            <i class="fa fa-calendar rightpadding_5 highlight" aria-hidden="true"></i>
                                            <a href="blog-single-right.html">
                                                <time class="entry-date" datetime="2017-03-13T08:50:40+00:00">
                                                    04/08/2017
                                                </time>
                                            </a>
                                        </span>                             
                                    </p>
                                        </footer>
                                    </div>

                                </div>
                                <!-- </div> -->
                            </article>

                            <article class="post format-small-image with_border side-item side-md content-padding responsive-thumb rounded topmargin_40">

                                <!-- <div class=""> -->

                                <div class="row">

                                    <div class="col-md-6 col-md-push-6">
                                        <div class="item-media entry-thumbnail top_rounded overflow_hidden">
                                            <img src="theme/images/gallery/12.jpg" alt="" />
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-md-pull-6">
                                        <div class="item-content">

                                            <h4 class="entry-title ">
                                                <a href="blog-single-right.html" rel="bookmark">Duo dolores et ea rebum clita kasd</a>
                                            </h4>

                                            <!-- .entry-meta -->

                                            <p>Tempor invidunt ut labore et dolore magna aliquyam eratsed diam voluptua vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt.</p>

                                        </div>

                                        <footer class="entry-meta with_top_border darklinks">
                                            <p class="inline-content small-text">
                                        <span>
                                            <i class="fa fa-user rightpadding_5 highlight" aria-hidden="true"></i>
                                            <a href="blog-single-right.html">Admin</a>
                                        </span>
                                        <span>
                                            <i class="fa fa-calendar rightpadding_5 highlight" aria-hidden="true"></i>
                                            <a href="blog-single-right.html">
                                                <time class="entry-date" datetime="2017-03-13T08:50:40+00:00">
                                                    02/08/2017
                                                </time>
                                            </a>
                                        </span>                             
                                    </p>
                                        </footer>
                                    </div>

                                </div>
                                <!-- </div> -->
                            </article>

                            <article class="post format-small-image with_border side-item side-md content-padding responsive-thumb rounded topmargin_40">

                                <!-- <div class=""> -->

                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="item-media entry-thumbnail top_rounded overflow_hidden">
                                            <img src="theme/images/gallery/13.jpg" alt="" />
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="item-content">

                                            <h4 class="entry-title ">
                                                <a href="blog-single-right.html" rel="bookmark">No sea takimata sanctus</a>
                                            </h4>

                                            <!-- .entry-meta -->

                                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.</p>

                                        </div>

                                        <footer class="entry-meta with_top_border darklinks">
                                            <p class="inline-content small-text">
                                        <span>
                                            <i class="fa fa-user rightpadding_5 highlight" aria-hidden="true"></i>
                                            <a href="blog-single-right.html">Admin</a>
                                        </span>
                                        <span>
                                            <i class="fa fa-calendar rightpadding_5 highlight" aria-hidden="true"></i>
                                            <a href="blog-single-right.html">
                                                <time class="entry-date" datetime="2017-03-13T08:50:40+00:00">
                                                    01/08/2017
                                                </time>
                                            </a>
                                        </span>                             
                                    </p>
                                        </footer>
                                    </div>

                                </div>
                                <!-- </div> -->
                            </article>

                            <article class="post format-small-image with_border side-item side-md content-padding responsive-thumb rounded topmargin_40">

                                <!-- <div class=""> -->

                                <div class="row">

                                    <div class="col-md-6 col-md-push-6">
                                        <div class="item-media entry-thumbnail top_rounded overflow_hidden">
                                            <img src="theme/images/gallery/19.png" alt="" />
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-md-pull-6">
                                        <div class="item-content">

                                            <h4 class="entry-title ">
                                                <a href="blog-single-right.html" rel="bookmark">Lorem ipsum dolor sit amet</a>
                                            </h4>

                                            <!-- .entry-meta -->

                                            <p>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing.</p>

                                        </div>

                                        <footer class="entry-meta with_top_border darklinks">
                                            <p class="inline-content small-text">
                                        <span>
                                            <i class="fa fa-user rightpadding_5 highlight" aria-hidden="true"></i>
                                            <a href="blog-single-right.html">Admin</a>
                                        </span>
                                        <span>
                                            <i class="fa fa-calendar rightpadding_5 highlight" aria-hidden="true"></i>
                                            <a href="blog-single-right.html">
                                                <time class="entry-date" datetime="2017-03-13T08:50:40+00:00">
                                                    29/07/2017
                                                </time>
                                            </a>
                                        </span>                             
                                    </p>
                                        </footer>
                                    </div>

                                </div>
                                <!-- </div> -->
                            </article>

                            <p class="topmargin_40 text-center">
                    <a href="#" class="theme_button color2">Load More</a>
                </p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section_subscribe cs gradient2 parallax section_padding_75">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <h2 class="section_header thin">
                                <strong>Newsletter</strong>
                                Subscribe
                            </h2>
                            <div class="widget widget_mailchimp">
                                <form class="signup form-inline inline-form" action="" method="get" />
                                    <div class="form-group-wrap">
                                        <div class="form-group margin_0">
                                            <input class="mailchimp_email form-control" name="email" type="email" placeholder="Email Address" />
                                        </div>
                                        <button type="submit" class="theme_button no_bg_button">Sign Up!</button>
                                    </div>
                                    <div class="response"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <!-- Video Area End Here -->
       

        <!-- Footer Area Start Here -->
   @include('pages.includes.footer')
</body>


</html>
