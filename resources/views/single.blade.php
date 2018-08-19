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
      <section class="page_breadcrumbs cs gradient2 parallax section_padding_top_50 section_padding_bottom_50">
                <div class="container" >
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <h2>{{ $post->title }}</h2>
                            <ol class="breadcrumb darklinks">
                                <li>
                                    <a href="./index.html">
                            Home
                        </a>
                                </li>
                                <li>
                                    <a href="#">Blog</a>
                                </li>
                                <li class="active">Post Page</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>

            <section class="ls section_padding_top_150 section_padding_bottom_150 columns_padding_25">
                <div class="container">
                    <div class="row" >

                        <div class="col-sm-10 col-sm-push-1">

                            <article class="single-post vertical-item content-padding big-padding post with_border rounded">
                                <div class="entry-thumbnail item-media top_rounded overflow_hidden">
                                    <img src="{{ $post->featured }}" alt="{{ $post->title }} " />
                                </div>
                                <div class="item-content">


                                    <header class="entry-header">

                                        <h1 class="entry-title topmargin_0">
                                            Shankle doner ribeye ham hock shank
                                        </h1>

                                        <div class="muted_background post-adds content-justify rounded">

                                            <div>
                                                <div class="dropdown inline-block">
                                                    <a href="#" data-target="#" class="theme_button color1 share_button" id="post_share_buttons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fa fa-share" aria-hidden="true"></i>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="post_share_buttons">
                                                        <div class="share_buttons">
                                                            <a href="#0" class="social-icon color-bg-icon soc-facebook" target="_blank"></a>
                                                            <a href="#0" class="social-icon color-bg-icon soc-twitter" target="_blank"></a>
                                                            <a href="#0" class="social-icon color-bg-icon soc-google" target="_blank"></a>
                                                            <a href="#0" class="social-icon color-bg-icon soc-pinterest" target="_blank"></a>
                                                            <a href="#0" class="social-icon color-bg-icon soc-linkedin" target="_blank"></a>
                                                            <a href="#0" class="social-icon color-bg-icon soc-tumblr" target="_blank"></a>
                                                            <a href="#0" class="social-icon color-bg-icon soc-reddit" target="_blank"></a>
                                                        </div>
                                                        <!-- eof .share_buttons -->
                                                    </div>
                                                    <!-- eof .dropdown-menu -->
                                                </div>
                                                <!-- eof .dropdown -->

                                                <a href="#" class="theme_button color1 no_bg_button like_button">
                                                    <i class="fa fa-heart-o" aria-hidden="true"></i>
                                                </a>

                                                <span class="item-likes">
                                                    355 likes
                                                </span>
                                            </div>

                                            <div>
                                                <span class="views-count main_bg_color">
                                                    23573 views
                                                </span>
                                            </div>

                                        </div>

                                    </header>
                                    <!-- .entry-header -->

                                    <div class="entry-content">

                                        <p>Pork loin tongue spare ribs cow jerky meatball flank ham hock shankle pork chop brisket. Jowl swine pancetta ham hock beef ribs alcatra tenderloin spare ribs meatball corned beef drumstick tri-tip leberkas. Sausage short loin ham jowl sirloin pork belly brisket pork drumstick hamburger pig. Capicola tenderloin beef ribs, jowl bacon kevin t-bone salami ham hock flank ground round alcatra.</p>

                                        <p>Ham doner chuck short loin picanha. Chuck pork belly tail doner. Bresaola sirloin meatball, strip steak jowl andouille tri-tip beef ribs kevin pancetta landjaeger turkey chuck ham cupim. Turkey andouille fatback chicken shoulder jowl bacon jerky pork belly ball tip venison. Flank beef alcatra doner burgdoggen bacon.</p>

                                        <div class="text-center">
                                            <blockquote>
                                                Strip steak cupim commodo ad pork loin bacon elit sed lorem est cow ex, dolore in. Tongue dolore in excepteur mollit beef deseru chicken capicola sausage jerky pig.
                                                <div class="item-meta topmargin_30">
                                                    <h4 class="margin_0">Andre Keller</h4>
                                                    <p class="small-text highlight">activist</p>
                                                </div>
                                            </blockquote>
                                        </div>

                                        <p>Pancetta cupim meatloaf, pork chop ball tip ground round filet mignon kevin bacon pastrami flank tri-tip jowl short loin sausage. Swine leberkas pork chop ball tip beef strip steak ribeye doner alcatra. Filet mignon tenderloin ham spare ribs beef kevin shankle ball tip short ribs pig flank brisket strip steak pork loin ground round.</p>
                                        <ul class="list2 checklist grey semibold">
                                            <li>Eaque blanditiis nemo</li>
                                            <li>Amet, consectetur adipisicing</li>
                                            <li>Blanditiis nemo quaerat</li>
                                        </ul>
                                        <p>
                                <img class="alignleft" alt="" src="./images/side-image.jpg" />
                                Capicola corned beef beef venison turducken filet mignon. Salami boudin pancetta filet mignon venison, pastrami ham hock jowl pork chop tenderloin picanha turkey. Strip steak jerky tri-tip spare ribs. 
                            </p>
                                        <p>
                                Prosciutto biltong tail boudin jowl jerky turducken. Ribeye ball tip pork belly, prosciutto shankle jowl filet mignon beef salami short loin pig pork. Ham hock turducken cupim corned.
                            </p>
                                        <p>
                                Porchetta chicken pork chop swine, brisket cupim pig beef ribs bacon corned beef turkey. Swine boudin venison kevin fatback, sirloin cupim. Andouille turkey sirloin, jerky chuck drumstick strip steak boudin beef ribs pork belly biltong kielbasa.
                            </p>
                                        <p>Pig hamburger turducken frankfurter shoulder, leberkas shankle bresaola meatball strip steak ham beef ribs. Turducken tongue shank frankfurter pancetta shoulder landjaeger sausage boudin filet mignon. Kevin venison ham hock, pork belly prosciutto hamburger turducken. Pork spare ribs drumstick jerky ribeye.</p>

                                        <div class="inline-content entry-meta semibold small-text darklinks topmargin_30">
                                            <div>
                                                <i class="fa fa-user highlight rightpadding_5" aria-hidden="true"></i>
                                                <a href="#">admin</a>
                                            </div>
                                            <div>
                                                <i class="fa fa-calendar highlight rightpadding_5" aria-hidden="true"></i>
                                                <a href="#">
                                                    <time class="entry-date" datetime="2017-03-13T08:50:40+00:00">
                                                        07/08/2017
                                                    </time>
                                                </a>
                                            </div>
                                            <div>
                                                <i class="fa fa-tag highlight rightpadding_5" aria-hidden="true"></i>
                                                <a href="#">Post</a>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- .entry-content -->

                                </div>
                                <!-- .item-content -->

                            </article>


                            <div class="author-meta side-item side-md content-padding with_border rounded">

                                <div class="row">

                                    <div class="col-md-4">
                                        <div class="item-media top_rounded overflow_hidden">
                                            <img src="./images/team/01.jpg" alt="" />
                                        </div>
                                    </div>

                                    <div class="col-md-8">
                                        <div class="item-content">
                                            <h4 class="margin_0 weight-black">Barry Gardner</h4>
                                            <p class="small-text highlight bottommargin_10">Activist</p>

                                            <p>Pork loin chuck landjaeger, jerky porchetta chicken pastrami short loin rump filet mignon. Strip steak short loin tenderlo, shoulder tongue hamburger kielbasa tri-tip.</p>
                                            <!-- <div class="author-social"> -->
                                            <div class="greylinks">
                                                <a href="#" class="social-icon soc-facebook"></a>
                                                <a href="#" class="social-icon soc-twitter"></a>
                                                <a href="#" class="social-icon soc-google"></a>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>


                            <div class="with_padding big-padding with_border comments-wrapper">
                                <div class="comments-area" id="comments">
                                    <h3 class="text-uppercase bottommargin_40">3 comments in this topic:</h3>
                                    <ol class="comment-list">
                                        <li class="comment even thread-even depth-1 parent">
                                            <article class="comment-body media">
                                                <div class="media-left">
                                                    <img class="media-object" alt="" src="./images/faces/02.jpg" />
                                                </div>
                                                <div class="media-body">
                                                    <span class="reply greylinks">
                                                        <a href="#respond">
                                                            <i class="fa fa-reply"></i>
                                                        </a>
                                                    </span>
                                                    <div class="comment-meta darklinks">
                                                        <a class="author_url" rel="external nofollow" href="#">Clifford Marshall</a>
                                                        <span class="comment-date small-text weight-black highlight">
                                                            <time datetime="2017-03-13T08:50:40+00:00">
                                                                07/08/2017
                                                            </time>
                                                        </span>
                                                    </div>
                                                    <p>First Level Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                                                </div>
                                            </article>
                                            <!-- .comment-body -->

                                            <ol class="children">
                                                </ol></li><li class="comment byuser odd alt depth-2 parent">
                                                    <article class="comment-body media">
                                                        <div class="media-left">
                                                            <img class="media-object" alt="" src="./images/faces/03.jpg" />
                                                        </div>
                                                        <div class="media-body">
                                                            <span class="reply greylinks">
                                                                <a href="#respond">
                                                                    <i class="fa fa-reply"></i>
                                                                </a>
                                                            </span>
                                                            <div class="comment-meta darklinks">
                                                                <a class="author_url" rel="external nofollow" href="#">Joshua Dean</a>
                                                                <span class="comment-date small-text weight-black highlight">
                                                                    <time datetime="2017-03-13T08:50:40+00:00">
                                                                        07/08/2017
                                                                    </time>
                                                                </span>
                                                            </div>
                                                            <p>Second Level Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                                                        </div>
                                                    </article>
                                                    <!-- .comment-body -->

                                                    <ol class="children">
                                                        </ol></li><li class="comment byuser even depth-3">
                                                            <article class="comment-body media">
                                                                <div class="media-left">
                                                                    <img class="media-object" alt="" src="./images/faces/01.jpg" />
                                                                </div>
                                                                <div class="media-body">
                                                                    <span class="reply greylinks">
                                                                        <a href="#respond">
                                                                            <i class="fa fa-reply"></i>
                                                                        </a>
                                                                    </span>
                                                                    <div class="comment-meta darklinks">
                                                                        <a class="author_url" rel="external nofollow" href="#">Ralph Guerrero</a>
                                                                        <span class="comment-date small-text weight-black highlight">
                                                                            <time datetime="2017-03-13T08:50:40+00:00">
                                                                                07/08/2017
                                                                            </time>
                                                                        </span>
                                                                    </div>
                                                                    <p>Third Level Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                                                                </div>
                                                            </article>
                                                            <!-- .comment-body -->
                                                        </li>
                                                        <!-- #comment-## -->
                                                    
                                                    <!-- .children -->
                                                
                                                <!-- #comment-## -->
                                            
                                            <!-- .children -->
                                        
                                        <!-- #comment-## -->

                                    
                                    <!-- .comment-list -->
                                </ol></div>
                                <!-- #comments -->


                                <div class="comment-respond" id="respond">
                                    <h3>Leave Comment:</h3>

                                    <form class="comment-form columns_padding_10" id="commentform" method="post" action="./" />
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group margin_0">
                                                    <label for="author">Name
                                                        <span class="required">*</span>
                                                    </label>
                                                    <input type="text" aria-required="true" size="30" value="" name="author" id="author" class="form-control" placeholder="Full Name" />
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group margin_0">
                                                    <label for="comment_email">Email Address</label>
                                                    <input type="email" size="30" value="" name="comment_email" id="comment_email" class="form-control" placeholder="Email Address" />
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group margin_0">
                                                    <label for="comment">Comment</label>
                                                    <textarea aria-required="true" rows="5" cols="45" name="comment" id="comment" class="form-control" placeholder="Your Comment..."></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-submit topmargin_30">
                                            <button type="submit" id="submit" name="submit" class="theme_button color1 wide_button">Send now!</button>
                                        </div>
                                    </form>
                                </div>
                                <!-- #respond -->
                            </div>


                            <div class="row columns_padding_5 page-nav">
                                <div class="col-md-6">
                                    <div class="with_padding text-center ds bg_teaser after_cover darkblue_bg">
                                        <img src="./images/gallery/12.jpg" alt="" />
                                        <div>
                                            <div class="highlight small-text">
                                                Prev
                                            </div>
                                            <h4 class="semibold">
                                                <a href="./blog-single-full.html" rel="bookmark">Pork chop biltong pork loin strip steak</a>
                                            </h4>
                                        </div>
                                        <!-- eof .item-content -->
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="with_padding text-center ds bg_teaser after_cover darkblue_bg">
                                        <img src="./images/gallery/10.jpg" alt="" />
                                        <div class="item-content">
                                            <div class="highlight small-text">
                                                Next
                                            </div>
                                            <h4 class="semibold">
                                                <a href="./blog-single-full.html" rel="bookmark">Shoulder drumstick apico short loin</a>
                                            </h4>
                                        </div>
                                        <!-- eof .item-content -->
                                    </div>
                                </div>

                            </div>


                        </div>
                        <!--eof .col-sm-8 (main content)-->

                    </div>
                </div>
            </section>
        <!-- Header Area End Here -->
        <!-- Header Area End Here -->
<div class="inner-page-banner-area" style="background-image: url('{{ $post->featured }}');">
            <div class="container">
                <div class=>
                    <h1></h1>
                    <ul>
                        <li><a href="#">News</a> -</li>
                        <li>{{ $post->title }}</li>
                    </ul>
                </div>
            </div>
        </div>


<div class="event-details-page-area">
            <div class="container">
                <div class="row">
                   <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                        <div class="row news-details-page-inner">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="news-img-holder">
                                    <img src="" class="img-responsive" ">
                                    <ul class="news-date1">
                                        <li>27 Dec</li>
                                        <li>2016</li>
                                    </ul>
                                </div>
                                <h2 class="title-default-left-bold-lowhight"><a href="#">{{ $post->title }}</a></h2>
                          
                                 {!! $post->content !!}
                                <ul class="news-social">
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                </ul>
                                
                                <div class="leave-comments">
                                    <h3 class="sidebar-title">Leave A Comment</h3>
                                    <div class="row">
                                        <div class="contact-form">
                                             @include('includes.disqus')
                                        </div>
                                    </div>
                                </div>
                            </div>
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


