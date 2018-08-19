<!doctype html>
<html class="no-js" lang="">

@section('title', 'Album')
@include('pages.includes.head')

<body>
<div id="wrapper">
        <!-- Header Area Start Here -->
      @include('pages.includes.header')

<div class="inner-page-banner-area" style="background-image: url('{{  asset($gallery->cover_image) }}');">
            <div class="container">
                <div class="pagination-area">
                    <h1 class="text-center">{{ $gallery->name  }}</h1>
                </div>
            </div>
        </div>

        <div class="gallery-area2">
            <div class="container" id="inner-isotope">

                    @foreach($gallery->images as $image)
                <div class="row featuredContainer gallery-wrapper" style="position: relative; height: 522.218px;">
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 library auditoriam" style="position: absolute; left: 0px; top: 0px;">
                        <div class="gallery-box">
                            <img src="{{ url( 'uploads/gallery/images/thumbs/',$image->file_name) }}" class="img-responsive" alt="gallery">

                            <div class="gallery-content">
                                <a href="{{ url($image->file_path) }}" class="zoom"><i class="fa fa-link" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
             @endforeach

                </div>
            </div>
        </div>
    </div>


       
        <!-- Footer Area Start Here -->
   @include('pages.includes.footer')
</body>


</html>