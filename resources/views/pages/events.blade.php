<!doctype html>
<html class="no-js" lang="">
@section('title', 'Events')
   @include('pages.includes.head')
@section('class6', 'active')
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
<div class="inner-page-banner-area" style="background-image: url('img/banner/3.jpg');">
            <div class="container">
                <div class="pagination-area">
                    <h1>Our Upcoming Events</h1>
                    <ul>
                        <li><a href="#">Home</a> -</li>
                        <li>Events</li>
                    </ul>
                </div>
            </div>
        </div>

<div class="event-page-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                        <div class="row event-inner-wrapper">

                             @if($events->count() > 0)
                                    @foreach($events->reverse() as $event)
                                    
                            <div class="col-lg-12 col-md-6 col-sm-12 col-xs-6">
                                <div class="single-item">
                                    <div class="item-img">
                                        <a href="{{ route('event.single', ['slug' => $event->slug ]) }}"><img src="{{ $event->featured }}" alt="{ $event->title }}" class="img-responsive"></a>
                                    </div>
                                    <div class="item-content">
                                        <h3 class="sidebar-title"><a href="{{ route('event.single', ['slug' => $event->slug ]) }}">{{ $event->title }}</a></h3>
                                        <ul class="event-info-block">
                                            <li><i class="fa fa-calendar" aria-hidden="true"></i>{{ $event->start_date }}</li>
                                            <li><i class="fa fa-map-marker" aria-hidden="true"></i>{{ $event->address }}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                             @endforeach
                              @else
                              @endif
                            
                           <!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <ul class="pagination-center">
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                </ul>
                            </div>-->
                        </div>
                    </div>
                     @include('pages.includes.rightside')
                </div>
            </div>
        </div>


    </div>

        <!-- Students Join 2 Area End Here -->
        <!-- Footer Area Start Here -->
   @include('pages.includes.footer')
</body>


</html>