@extends('layouts.frontend')

@section('content')

      <div class="stunning-header stunning-header-bg-lightviolet">
            <div class="stunning-header-content">
                  <h1 class="stunning-header-title">{{ $event->title }}</h1>
            </div>
      </div>

      <div class="container">
    <div class="row medium-padding120">
        <main class="main">
            <div class="col-lg-10 col-lg-offset-1">
                <article class="hentry post post-standard-details">

                    <div class="post-thumb">
                        <img src="{{ $event->featured }}" alt="{{ $event->title }}">
                    </div>

                    <div class="post__content">


                        <div class="post-additional-info">

                            <div class="post__author author vcard">
                                Posted by

                                <div class="post__author-name fn">
                                    <a href="#" class="post__author-link">Admin</a>
                                </div>

                            </div>

                            <span class="post__date">

                                <i class="seoicon-clock"></i>

                                <time class="published" datetime="2016-03-20 12:00:00">
                                     {{ $event->created_at->toFormattedDateString() }}
                                </time>

                            </span>

                         
                        </div>

                        <div class="post__content-info">
                                      {!! $event->description !!}

                               
                            </div>
                    </div>

                     <div class="socials text-center">
                                    <!-- Go to www.addthis.com/dashboard to customize your tools -->
<div class="addthis_inline_share_toolbox"></div>
                              </div>

                        </article>

               

                <div class="pagination-arrow">

                    @if($prev)
                                    <a href="{{ route('event.single', ['slug' => $prev->slug ]) }}" class="btn-next-wrap">
                                          <div class="btn-content">
                                          <div class="btn-content-title">Next Post</div>
                                          <p class="btn-content-subtitle">{{ $prev->title }}</p>
                                          </div>
                                          <svg class="btn-next">
                                          <use xlink:href="#arrow-right"></use>
                                          </svg>
                                    </a>
                              @endif

                    @if($next)
                                    <a href="{{ route('event.single', ['slug' => $next->slug ]) }}" class="btn-prev-wrap">
                                          <svg class="btn-prev">
                                          <use xlink:href="#arrow-left"></use>
                                          </svg>
                                          <div class="btn-content">
                                          <div class="btn-content-title">Previous Post</div>
                                          <p class="btn-content-subtitle">{{ $next->title }}</p>
                                          </div>
                                    </a>
                              @endif

                </div>

                <div class="comments">

                    <div class="heading text-center">
                        <h4 class="h1 heading-title">Comments</h4>
                        <div class="heading-line">
                            <span class="short-line"></span>
                            <span class="long-line"></span>
                        </div>
                    </div>
                </div>

                <div class="row">

                </div>


            </div>

            <!-- End Post Details -->

            <!-- Sidebar-->


            <!-- End Sidebar-->

        </main>
    </div>
</div>

@endsection