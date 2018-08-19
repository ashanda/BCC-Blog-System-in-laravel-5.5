@extends('layouts.frontend')

@section('content')
        
         <section class="page_breadcrumbs cs gradient2 parallax section_padding_top_50 section_padding_bottom_50">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <h2>{{ $category->name }}</h2>
                            <ol class="breadcrumb darklinks">
                                
                            </ol>
                        </div>
                    </div>
                </div>
            </section>


                        <section class="ls page_portfolio section_padding_top_150 section_padding_bottom_130">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">

                            <div class="isotope_container isotope row masonry-layout columns_margin_bottom_20">

                           <!-- foreach-->
                           @foreach($category->posts as $post)
                                <div class="isotope-item col-lg-4 col-md-6 col-sm-12">

                                    <article class="vertical-item content-padding text-center with_border rounded">
                                        <div class="item-media top_rounded overflow_hidden">
                                            <img src="{{ $post->featured }}" alt="" />
                                            <div class="media-links">
                                                <a href="{{ route('post.single', ['slug' => $post->slug ]) }}" class="abs-link"></a>
                                            </div>
                                        </div>
                                        <div class="item-content">
                                            <header class="entry-header">
                                                <h4 class="entry-title">
                                                    <a href="{{ route('post.single', ['slug' => $post->slug ]) }}">{{ $post->title }}</a>
                                                </h4>
                                            </header>
                                           
                                        </div>
                                        <footer class="entry-meta with_top_border darklinks">
                                            <p class="inline-content small-text">
                            <span>
                                <i class="fa fa-user rightpadding_5 highlight" aria-hidden="true"></i>
                                <a href="./blog-single-right.html">Admin</a>
                            </span>
                            <span>
                                <i class="fa fa-calendar rightpadding_5 highlight" aria-hidden="true"></i>
                                <a href="./blog-single-right.html">
                                    <time class="entry-date" datetime="2017-03-13T08:50:40+00:00">
                                        11/08/2017
                                    </time>
                                </a>
                            </span>                             
                        </p>
                                        </footer>
                                    </article>

                                </div>
@endforeach
                        <!--End foreach-->

                            <!-- eof .isotope_container.row -->

                            <div class="row">
                                <div class="col-sm-12 text-center">
                                    <img src="./img/loading.png" alt="" class="fa-spin" />
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
           
@endsection