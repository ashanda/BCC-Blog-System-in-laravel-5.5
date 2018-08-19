<!doctype html>
<html class="no-js" lang="">

@section('title', 'Gallery')
@include('pages.includes.head')
@section('class7', 'active')
<body>
<div id="wrapper">
        <!-- Header Area Start Here -->
      @include('pages.includes.header')

<div class="inner-page-banner-area" style="background-image: url('img/banner/5.jpg');">
            <div class="container">
                <div class="pagination-area">
                </div>
            </div>
        </div>

        <div class="gallery-area2">
            <div class="container" id="inner-isotope">

                @if( $galleries->count() )
                    @foreach($galleries as $gallery)
                <div class="row featuredContainer gallery-wrapper" style="position: relative; height: 522.218px;">
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 library auditoriam" style="position: absolute; left: 0px; top: 0px;">
                        <div class="gallery-box">
                            <img src="{{  asset($gallery->cover_image) }}" class="img-responsive" alt="gallery">

                            <div class="gallery-content">
                                <a href="{{ url('/album/'.$gallery->id ) }}"><i class="fa fa-link" aria-hidden="true"></i></a>
                            </div>
                            <div class="isotop-classes-tab isotop-btn">
                            <a href="#" data-filter="*" class="">{{ $gallery->name  }}</a></div>
                        </div>
                    </div>
             @endforeach
            @endif

                </div>
            </div>
        </div>

       
        <!-- Footer Area Start Here -->
   @include('pages.includes.footer')
</body>


</html>