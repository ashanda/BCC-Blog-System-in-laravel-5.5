<!doctype html>
<html class="no-js">

<head>
    

    <title>BCC Community | @yield('title')</title>
    <meta charset="utf-8" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <![endif]-->
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <link rel="stylesheet" href="../theme/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../theme/css/animations.css" />
    <link rel="stylesheet" href="../theme/css/fonts.css" />
    <link rel="stylesheet" href="../theme/css/main.css" class="color-switcher-link') }}" />
    <script src="../theme/js/vendor/modernizr-2.6.2.min.js"></script>

    <!--[if lt IE 9]>
        <script src="js/vendor/html5shiv.min.js"></script>
        <script src="js/vendor/respond.min.js"></script>
        <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <![endif]-->

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />




    
</head>
<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Add your site or application content here -->
    <!-- Preloader Start Here -->
    <!--<div id="preloader"></div> -->
    <!-- Preloader End Here -->
    <!-- Main Body Area Start Here -->
    
        <!-- Header Area Start Here -->
      <div class="preloader">
        <div class="preloader_image"></div>
    </div>

    <!-- search modal -->
    <div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">
                <i class="rt-icon2-cross2"></i>
            </span>
        </button>
        <div class="widget widget_search">
            <form method="get" class="searchform search-form form-inline" action="" />
                <div class="form-group">
                    <input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input" />
                </div>
                <button type="submit" class="theme_button">Search</button>
            </form>
        </div>
    </div>

    <!-- Unyson messages modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
        <div class="fw-messages-wrap ls with_padding">
            <!-- Uncomment this UL with LI to show messages in modal popup to your user: -->
            <!--
        <ul class="list-unstyled">
            <li>Message To User</li>
        </ul>
        -->

        </div>
    </div>
    <!-- eof .modal -->

    <!-- wrappers for visual page editor and boxed version of template -->
    <div id="canvas">
        <div id="box_wrapper">

            <!-- template sections -->

            <section class="page_topline ds darkblue parallax table_section table_section_sm section_padding_bottom_10 section_padding_top_10">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-4 text-center text-sm-left">
                            <div class="inline-content darklinks">
                                <span>
                                    <i class="fa fa-phone highlight rightpadding_5" aria-hidden="true"></i>
                                    (800) 123 4567
                                </span>
                                <span class="small-text">
                                    <i class="fa fa-envelope highlight rightpadding_5" aria-hidden="true"></i>
                                    <a href="#">social@example.com</a>
                                </span>
                            </div>
                        </div>
                        <div class="col-sm-4 text-center">
                            <div>
                                <a class="social-icon color-icon soc-facebook" href="#" title="Facebook"></a>
                                <a class="social-icon color-icon soc-twitter" href="#" title="Twitter"></a>
                                <a class="social-icon color-icon soc-google" href="#" title="Google"></a>
                                <a class="social-icon color-icon soc-skype" href="#" title="Skype"></a>
                                <a class="social-icon color-icon soc-youtube" href="#" title="Youtube"></a>
                            </div>
                        </div>
                        <div class="col-sm-6 text-center text-sm-right">
                            <div class="widget widget_search inline-block">
                                <form method="get" class="searchform form-inline" action="" />
                                    <div class="form-group-wrap">
                                        <div class="form-group margin_0">
                                            <label class="sr-only" for="topline-search">Search for:</label>
                                            <input id="topline-search" type="text" value="" name="search" class="form-control" placeholder="Search Keyword" />
                                        </div>
                                        <button type="submit" class="theme_button color1 no_bg_button">Search</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <header class="page_header header_white toggler_xs_right section_padding_15">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12 display_table">
                            <div class="header_left_logo display_table_cell">
                                <a href="index.html" class="logo top_logo">
                                    <img src="../theme/images/logo.png" alt="" />
                                    <span class="logo_text">
                                        Social
                                        <strong>Activism</strong>
                                    </span>
                                </a>
                            </div>

                            <div class="header_mainmenu display_table_cell text-center">
                                <!-- main nav start -->
                                <nav class="mainmenu_wrapper">
                                    <ul class="mainmenu nav sf-menu">
                                        <li class="active">
                                            <a href="index.html">Home</a>
                                            <ul>
                                                <li>
                                                    <a href="index.html">MultiPage</a>
                                                </li>
                                                <li>
                                                    <a href="index_static.html">Static Intro</a>
                                                </li>
                                                <li>
                                                    <a href="admin_index.html">Admin Dashboard</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li>
                                            <a href="about.html">Pages</a>
                                            <ul>
                                                <!-- features -->
                                                <li>
                                                    <a href="shortcodes_teasers.html">Shortcodes &amp; Widgets</a>
                                                    <ul>
                                                        <li>
                                                            <a href="shortcodes_typography.html">Typography</a>
                                                        </li>
                                                        <li>
                                                            <a href="shortcodes_buttons.html">Buttons</a>
                                                        </li>
                                                        <li>
                                                            <a href="shortcodes_teasers.html">Teasers</a>
                                                        </li>
                                                        <li>
                                                            <a href="shortcodes_progress.html">Progress</a>
                                                        </li>
                                                        <li>
                                                            <a href="shortcodes_tabs.html">Tabs &amp; Collapse</a>
                                                        </li>
                                                        <li>
                                                            <a href="shortcodes_bootstrap.html">Bootstrap Elements</a>
                                                        </li>
                                                        <li>
                                                            <a href="shortcodes_widgets.html">Widgets</a>
                                                        </li>
                                                        <li>
                                                            <a href="shortcodes_animation.html">Animation</a>
                                                        </li>
                                                        <li>
                                                            <a href="shortcodes_icons.html">Template Icons</a>
                                                        </li>
                                                        <li>
                                                            <a href="shortcodes_socialicons.html">Social Icons</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <!-- eof features -->

                                                <li>
                                                    <a href="about.html">About</a>
                                                </li>

                                                <li>
                                                    <a href="program.html">Program</a>
                                                </li>

                                                <li>
                                                    <a href="privacy-policy.html">Privacy Policy</a>
                                                </li>

                                                <!-- shop -->
                                                <li>
                                                    <a href="shop-right.html">Shop</a>
                                                    <ul>
                                                        <li>
                                                            <a href="shop-right.html">Shop</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-product-right.html">Single Product</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-cart-right.html">Shopping Cart</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-checkout-right.html">Checkout</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-register.html">Registration</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <!-- eof shop -->

                                                <li>
                                                    <a href="timetable.html">Timetable</a>
                                                </li>

                                                <!-- events -->
                                                <li>
                                                    <a href="events-left.html">Events</a>
                                                    <ul>
                                                        <li>
                                                            <a href="events-left.html">Left Sidebar</a>
                                                        </li>
                                                        <li>
                                                            <a href="events-right.html">Right Sidebar</a>
                                                        </li>
                                                        <li>
                                                            <a href="events-full.html">Full Width</a>
                                                        </li>
                                                        <li>
                                                            <a href="event-single-left.html">Single Event</a>
                                                            <ul>
                                                                <li>
                                                                    <a href="event-single-left.html">Left Sidebar</a>
                                                                </li>
                                                                <li>
                                                                    <a href="event-single-right.html">Right Sidebar</a>
                                                                </li>
                                                                <li>
                                                                    <a href="event-single-full.html">Full Width</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <!-- eof events -->

                                                <li>
                                                    <a href="team.html">Team</a>
                                                    <ul>
                                                        <li>
                                                            <a href="team.html">Team 1</a>
                                                        </li>
                                                        <li>
                                                            <a href="team2.html">Team 2</a>
                                                        </li>
                                                        <li>
                                                            <a href="team-single.html">Team Member</a>
                                                        </li>
                                                    </ul>
                                                </li>

                                                <li>
                                                    <a href="comingsoon1.html">Comingsoon</a>
                                                    <ul>
                                                        <li>
                                                            <a href="comingsoon1.html">Comingsoon</a>
                                                        </li>
                                                        <li>
                                                            <a href="comingsoon2.html">Comingsoon 2</a>
                                                        </li>
                                                    </ul>
                                                </li>

                                                <li>
                                                    <a href="faq.html">FAQ</a>
                                                    <ul>
                                                        <li>
                                                            <a href="faq.html">FAQ</a>
                                                        </li>
                                                        <li>
                                                            <a href="faq2.html">FAQ 2</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="404.html">404</a>
                                                </li>

                                            </ul>
                                        </li>
                                        <!-- eof pages -->

                                        <li>
                                            <a href="#">Features</a>
                                            <div class="mega-menu">
                                                <ul class="mega-menu-row">
                                                    <li class="mega-menu-col">
                                                        <a href="#">Headers</a>
                                                        <ul>
                                                            <li>
                                                                <a href="header1.html">Header Type 1</a>
                                                            </li>
                                                            <li>
                                                                <a href="header2.html">Header Type 2</a>
                                                            </li>
                                                            <li>
                                                                <a href="header3.html">Header Type 3</a>
                                                            </li>
                                                            <li>
                                                                <a href="header4.html">Header Type 4</a>
                                                            </li>
                                                            <li>
                                                                <a href="header5.html">Header Type 5</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="mega-menu-col">
                                                        <a href="#">Side Menus</a>
                                                        <ul>
                                                            <li>
                                                                <a href="header_side1.html">Slide Left Light</a>
                                                            </li>
                                                            <li>
                                                                <a href="header_side2.html">Slide Right Light</a>
                                                            </li>
                                                            <li>
                                                                <a href="header_side3.html">Push Left Light</a>
                                                            </li>
                                                            <li>
                                                                <a href="header_side4.html">Push Right Light</a>
                                                            </li>
                                                            <li>
                                                                <a href="header_side5.html">Slide Left Dark</a>
                                                            </li>
                                                            <li>
                                                                <a href="header_side6.html">Slide Right Dark</a>
                                                            </li>
                                                            <li>
                                                                <a href="header_side7.html">Push Left Dark</a>
                                                            </li>
                                                            <li>
                                                                <a href="header_side8.html">Push Right Dark</a>
                                                            </li>
                                                            <li>
                                                                <a href="header_side_superfish.html">Superfish Menu</a>
                                                            </li>
                                                            <li>
                                                                <a href="header_side_sticked.html">Sticked Menu</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="mega-menu-col">
                                                        <a href="breadcrumbs1.html">Breadcrumbs</a>
                                                        <ul>
                                                            <li>
                                                                <a href="breadcrumbs1.html">Breadcrumbs 1</a>
                                                            </li>
                                                            <li>
                                                                <a href="breadcrumbs2.html">Breadcrumbs 2</a>
                                                            </li>
                                                            <li>
                                                                <a href="breadcrumbs3.html">Breadcrumbs 3</a>
                                                            </li>
                                                            <li>
                                                                <a href="breadcrumbs4.html">Breadcrumbs 4</a>
                                                            </li>
                                                            <li>
                                                                <a href="breadcrumbs5.html">Breadcrumbs 5</a>
                                                            </li>
                                                            <li>
                                                                <a href="breadcrumbs6.html">Breadcrumbs 6</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="mega-menu-col">
                                                        <a href="footer1.html">Footers</a>
                                                        <ul>
                                                            <li>
                                                                <a href="footer1.html">Footer Type 1</a>
                                                            </li>
                                                            <li>
                                                                <a href="footer2.html">Footer Type 2</a>
                                                            </li>
                                                            <li>
                                                                <a href="footer3.html">Footer Type 3</a>
                                                            </li>
                                                            <li>
                                                                <a href="footer4.html">Footer Type 4</a>
                                                            </li>
                                                            <li>
                                                                <a href="footer5.html">Footer Type 5</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="mega-menu-col">
                                                        <a href="copyright1.html">Copyrights</a>

                                                        <ul>
                                                            <li>
                                                                <a href="copyright1.html">Copyrights 1</a>
                                                            </li>
                                                            <li>
                                                                <a href="copyright2.html">Copyrights 2</a>
                                                            </li>
                                                            <li>
                                                                <a href="copyright3.html">Copyrights 3</a>
                                                            </li>
                                                            <li>
                                                                <a href="copyright4.html">Copyrights 4</a>
                                                            </li>
                                                            <li>
                                                                <a href="copyright5.html">Copyrights 5</a>
                                                            </li>
                                                        </ul>
                                                    </li>

                                                </ul>
                                            </div>
                                            <!-- eof mega menu -->
                                        </li>
                                        <!-- eof features -->


                                        <!-- gallery -->
                                        <li>
                                            <a href="gallery-regular.html">Gallery</a>
                                            <ul>
                                                <!-- Gallery regular -->
                                                <li>
                                                    <a href="gallery-regular.html">Gallery Regular</a>
                                                    <ul>
                                                        <li>
                                                            <a href="gallery-regular.html">1 column</a>
                                                        </li>
                                                        <li>
                                                            <a href="gallery-regular-2-cols.html">2 columns</a>
                                                        </li>
                                                        <li>
                                                            <a href="gallery-regular-3-cols.html">3 columns</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <!-- eof Gallery regular -->

                                                <!-- Gallery full width -->
                                                <li>
                                                    <a href="gallery-fullwidth.html">Gallery Full Width</a>
                                                    <ul>
                                                        <li>
                                                            <a href="gallery-fullwidth.html">2 column</a>
                                                        </li>
                                                        <li>
                                                            <a href="gallery-fullwidth-3-cols.html">3 columns</a>
                                                        </li>
                                                        <li>
                                                            <a href="gallery-fullwidth-4-cols.html">4 columns</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <!-- eof Gallery full width -->

                                                <!-- Gallery extended -->
                                                <li>
                                                    <a href="gallery-extended.html">Gallery Extended</a>
                                                    <ul>
                                                        <li>
                                                            <a href="gallery-extended.html">1 column</a>
                                                        </li>
                                                        <li>
                                                            <a href="gallery-extended-2-cols.html">2 columns</a>
                                                        </li>
                                                        <li>
                                                            <a href="gallery-extended-3-cols.html">3 columns</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <!-- eof Gallery extended -->

                                                <!-- Gallery carousel -->
                                                <li>
                                                    <a href="gallery-carousel.html">Gallery Carousel</a>
                                                    <ul>
                                                        <li>
                                                            <a href="gallery-carousel.html">1 column</a>
                                                        </li>
                                                        <li>
                                                            <a href="gallery-carousel-2-cols.html">2 columns</a>
                                                        </li>
                                                        <li>
                                                            <a href="gallery-carousel-3-cols.html">3 columns</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <!-- eof Gallery carousel -->

                                                <!-- Gallery tile -->
                                                <li>
                                                    <a href="gallery-tile.html">Gallery Tile</a>
                                                </li>
                                                <!-- eof Gallery tile -->

                                                <!-- Gallery left sidebar -->
                                                <li>
                                                    <a href="gallery-left.html">Gallery Left Sidebar</a>
                                                    <ul>
                                                        <li>
                                                            <a href="gallery-left.html">1 column</a>
                                                        </li>
                                                        <li>
                                                            <a href="gallery-left-2-cols.html">2 columns</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <!-- eof Gallery left sidebar -->

                                                <!-- Gallery right sidebar -->
                                                <li>
                                                    <a href="gallery-right.html">Gallery Right Sidebar</a>
                                                    <ul>
                                                        <li>
                                                            <a href="gallery-right.html">1 column</a>
                                                        </li>
                                                        <li>
                                                            <a href="gallery-right-2-cols.html">2 columns</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <!-- eof Gallery right sidebar -->

                                                <!-- Gallery item -->
                                                <li>
                                                    <a href="gallery-single.html">Gallery Item</a>
                                                    <ul>
                                                        <li>
                                                            <a href="gallery-single.html">Style 1</a>
                                                        </li>
                                                        <li>
                                                            <a href="gallery-single2.html">Style 2</a>
                                                        </li>
                                                        <li>
                                                            <a href="gallery-single3.html">Style 3</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <!-- eof Gallery item -->
                                            </ul>
                                        </li>
                                        <!-- eof Gallery -->

                                        <!-- blog -->
                                        <li>
                                            <a href="blog-right.html">Blog</a>
                                            <ul>

                                                <li>
                                                    <a href="blog-right.html">Right Sidebar</a>
                                                </li>
                                                <li>
                                                    <a href="blog-left.html">Left Sidebar</a>
                                                </li>
                                                <li>
                                                    <a href="blog-full.html">No Sidebar</a>
                                                </li>
                                                <li>
                                                    <a href="blog-mosaic.html">Blog Grid</a>
                                                </li>

                                                <li>
                                                    <a href="blog-single-right.html">Post</a>
                                                    <ul>
                                                        <li>
                                                            <a href="blog-single-right.html">Right Sidebar</a>
                                                        </li>
                                                        <li>
                                                            <a href="blog-single-left.html">Left Sidebar</a>
                                                        </li>
                                                        <li>
                                                            <a href="blog-single-full.html">No Sidebar</a>
                                                        </li>
                                                    </ul>
                                                </li>

                                                <li>
                                                    <a href="blog-single-video-right.html">Video Post</a>
                                                    <ul>
                                                        <li>
                                                            <a href="blog-single-video-right.html">Right Sidebar</a>
                                                        </li>
                                                        <li>
                                                            <a href="blog-single-video-left.html">Left Sidebar</a>
                                                        </li>
                                                        <li>
                                                            <a href="blog-single-video-full.html">No Sidebar</a>
                                                        </li>
                                                    </ul>
                                                </li>

                                            </ul>
                                        </li>
                                        <!-- eof blog -->

                                        <!-- contacts -->
                                        <li>
                                            <a href="contact.html">Contact</a>
                                            <ul>
                                                <li>
                                                    <a href="contact.html">Contact 1</a>
                                                </li>
                                                <li>
                                                    <a href="contact2.html">Contact 2</a>
                                                </li>
                                                <li>
                                                    <a href="contact3.html">Contact 3</a>
                                                </li>
                                                <li>
                                                    <a href="contact4.html">Contact 4</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <!-- eof contacts -->
                                    </ul>
                                </nav>
                                <!-- eof main nav -->
                                <!-- header toggler -->
                                <span class="toggle_menu">
                                    <span></span>
                                </span>
                            </div>

                            <div class="header_right_buttons display_table_cell text-right hidden-xs">
                                <a href="index.html#appointment" class="theme_button color1 two_lines bottommargin_0">Donate Now!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        <!-- Header Area End Here -->
<section class="page_breadcrumbs cs gradient2 parallax section_padding_top_50 section_padding_bottom_50">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <h2>{{ $event->title }}</h2>
                            <ol class="breadcrumb darklinks">
                                <li>
                                    <a href="index.html">
                            Home
                        </a>
                                </li>
                                <li>
                                    <a href="#">Events</a>
                                </li>
                                
                            </ol>
                        </div>
                    </div>
                </div>
            </section>

            <section class="ls section_padding_top_150 section_padding_bottom_130 columns_padding_25">
                <div class="container">
                    <div class="row">

                        <div class="col-sm-7 col-md-8 col-lg-8">

                            <article class="event-single vertical-item content-padding big-padding with_border rounded">
                                <div class="item-media entry-thumbnail top_rounded overflow_hidden">
                                    <img src="{{ $event->featured }}" alt="" />
                                </div>

                                <div class="item-content">

                                    <header class="entry-header">

                                        <p class="grey darklinks margin_0">
                                <span class="rightpadding_20"><i class="fa fa-calendar rightpadding_5 highlight"></i> {{ $event->start_date }}</span>
                                <i class="fa fa-map-marker rightpadding_5 highlight"></i>{{ $event->address }}
                            </p>

                                        <h1 class="entry-title topmargin_10">
                                            <a href="event-single-right.html" rel="bookmark">{{ $event->title }}</a>
                                        </h1>

                                    </header>
                                    <!-- .entry-header -->

                                    <div class="entry-content">

                                        <p>
                                {!! $event->description !!}
                            </p>

                                    </div>

                                </div>
                                <!-- .item-content -->

                            </article>

                            <div class="with_padding big-padding with_border rounded comments-wrapper">
                                <div class="comments-area" id="comments">
                                    <h3 class="text-uppercase bottommargin_40">3 comments in this topic:</h3>
                                    <ol class="comment-list">
                                        <li class="comment even thread-even depth-1 parent">
                                            <article class="comment-body media">
                                                <div class="media-left">
                                                    <img class="media-object" alt="" src="../theme/images/faces/02.jpg" />
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
                                                            <img class="media-object" alt="" src="../theme/images/faces/03.jpg" />
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
                                                                    <img class="media-object" alt="" src="../theme/images/faces/01.jpg" />
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

                                    <form class="comment-form columns_padding_10" id="commentform" method="post" action="" />
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

                        </div>
                        <!--eof .col-sm-8 (main content)-->

                        <!-- sidebar -->
                        <aside class="col-sm-5 col-md-4 col-lg-4">

                            <div class="widget widget_apsc_widget">
                                <h3 class="widget-title">Get In Touch</h3>
                                <div class="apsc-icons-wrapper clearfix apsc-theme-4">
                                    <div class="apsc-each-profile">
                                        <a class="apsc-facebook-icon clearfix" href="#">
                                            <div class="apsc-inner-block">
                                                <span class="social-icon">
                                                    <i class="fa fa-facebook apsc-facebook"></i>
                                                    <span class="media-name">Facebook</span>
                                                </span>
                                                <span class="apsc-count">9.8K</span>
                                                <span class="apsc-media-type">Fans</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="apsc-each-profile">
                                        <a class="apsc-twitter-icon clearfix" href="#">
                                            <div class="apsc-inner-block">
                                                <span class="social-icon">
                                                    <i class="fa fa-twitter apsc-twitter"></i>
                                                    <span class="media-name">Twitter</span>
                                                </span>
                                                <span class="apsc-count">4.9K</span>
                                                <span class="apsc-media-type">Followers</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="apsc-each-profile">
                                        <a class="apsc-google-plus-icon clearfix" href="#">
                                            <div class="apsc-inner-block">
                                                <span class="social-icon">
                                                    <i class="apsc-googlePlus fa fa-google-plus"></i>
                                                    <span class="media-name">google+</span>
                                                </span>
                                                <span class="apsc-count">10.1M</span>
                                                <span class="apsc-media-type">Followers</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="apsc-each-profile">
                                        <a class="apsc-instagram-icon clearfix" href="#">
                                            <div class="apsc-inner-block">
                                                <span class="social-icon">
                                                    <i class="apsc-instagram fa fa-instagram"></i>
                                                    <span class="media-name">Instagram</span>
                                                </span>
                                                <span class="apsc-count">4</span>
                                                <span class="apsc-media-type">Followers</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="apsc-each-profile">
                                        <a class="apsc-youtube-icon clearfix" href="#">
                                            <div class="apsc-inner-block">
                                                <span class="social-icon">
                                                    <i class="apsc-youtube fa fa-youtube"></i>
                                                    <span class="media-name">Youtube</span>
                                                </span>
                                                <span class="apsc-count">2.2K</span>
                                                <span class="apsc-media-type">Subscriber</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="apsc-each-profile">
                                        <a class="apsc-soundcloud-icon clearfix" href="#">
                                            <div class="apsc-inner-block">
                                                <span class="social-icon">
                                                    <i class="apsc-soundcloud fa fa-soundcloud"></i>
                                                    <span class="media-name">Soundcloud</span>
                                                </span>
                                                <span class="apsc-count">8K</span>
                                                <span class="apsc-media-type">Followers</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="apsc-each-profile">
                                        <a class="apsc-dribble-icon clearfix" href="#">
                                            <div class="apsc-inner-block">
                                                <span class="social-icon">
                                                    <i class="apsc-dribbble fa fa-dribbble"></i>
                                                    <span class="media-name">dribble</span>
                                                </span>
                                                <span class="apsc-count">0</span>
                                                <span class="apsc-media-type">Followers</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="apsc-each-profile">
                                        <a class="apsc-edit-icon clearfix" href="#">
                                            <div class="apsc-inner-block">
                                                <span class="social-icon">
                                                    <i class="apsc-posts fa fa-edit"></i>
                                                    <span class="media-name">Post</span>
                                                </span>
                                                <span class="apsc-count">1</span>
                                                <span class="apsc-media-type">Post</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="apsc-each-profile">
                                        <a class="apsc-comment-icon clearfix" href="#">
                                            <div class="apsc-inner-block">
                                                <span class="social-icon">
                                                    <i class="apsc-comments fa fa-comments"></i>
                                                    <span class="media-name">Comment</span>
                                                </span>
                                                <span class="apsc-count">0</span>
                                                <span class="apsc-media-type">Comments</span>
                                            </div>
                                        </a>
                                    </div>

                                </div>

                            </div>

                            <div class="widget widget_mailchimp">

                                <h3 class="widget-title">Newsletter</h3>

                                <form class="signup" action="" method="get" />
                                    <div class="form-group">
                                        <input name="email" type="email" class="mailchimp_email form-control" placeholder="E-mail Address" />
                                    </div>
                                    <button type="submit" class="theme_button color1">Send</button>
                                    <p>Enter your email address here always to be updated. We promise not to spam!</p>
                                    <div class="response"></div>

                                </form>

                            </div>

                            <div class="widget widget_flickr">

                                <h3 class="widget-title">Flickr Widget</h3>
                                <ul id="flickr"></ul>
                            </div>

                            <div class="widget widget_categories">

                                <h3 class="widget-title">Categories</h3>
                                <div class="form-group select-group">
                                    <label for="category" class="sr-only">Select Category</label>
                                    <select id="category" name="category" class="choice empty form-control">
                                        <option value="" disabled="" selected="" data-default="" />Select Category
                                        <option value="cat_1" />Category 1
                                        <option value="cat_2" />Category 2
                                        <option value="cat_3" />Category 3
                                        <option value="cat_4" />Category 4
                                        <option value="cat_5" />Category 5
                                        <option value="cat_6" />Category 6
                                        <option value="cat_7" />Category 7
                                        <option value="cat_8" />Category 8
                                    </select>
                                    <i class="fa fa-angle-down theme_button no-bg-button" aria-hidden="true"></i>
                                </div>
                            </div>

                            <div class="widget widget_recent_posts">

                                <h3 class="widget-title">Recent Posts</h3>
                                <ul class="media-list">
                                    <li class="media">
                                        <div class="media-left media-middle">
                                            <img src="../theme/images/recent_post1.jpg" alt="" />
                                        </div>
                                        <div class="media-body media-middle">
                                            <h4>
                                                <a href="blog-single-left.html">
                                    Tail cupim officia short loin frankfurter alcatra 
                                </a>
                                            </h4>
                                            <span>
                                                <time class="entry-date small-text highlight" datetime="2017-03-13T08:50:40+00:00">
                                                    june 10, 2017
                                                </time>
                                            </span>
                                        </div>
                                    </li>

                                    <li class="media">
                                        <div class="media-left media-middle">
                                            <img src="../theme/images/recent_post2.jpg" alt="" />
                                        </div>
                                        <div class="media-body media-middle">
                                            <h4>
                                                <a href="blog-single-left.html">
                                    Biltong venison beef swine. Corned beef pork ham
                                </a>
                                            </h4>
                                            <span>
                                                <time class="entry-date small-text highlight" datetime="2017-03-13T08:50:40+00:00">
                                                    june 11, 2017
                                                </time>
                                            </span>
                                        </div>
                                    </li>

                                    <li class="media">
                                        <div class="media-left media-middle">
                                            <img src="../theme/images/recent_post3.jpg" alt="" />
                                        </div>
                                        <div class="media-body media-middle">
                                            <h4>
                                                <a href="blog-single-left.html">
                                    Prosciutto hamburger filet mignon
                                </a>
                                            </h4>
                                            <span>

                                                <time class="entry-date small-text highlight" datetime="2017-03-13T08:50:40+00:00">
                                                    june 12, 2017
                                                </time>
                                            </span>
                                        </div>
                                    </li>


                                </ul>
                            </div>

                            <div class="widget widget_archive">

                                <h3 class="widget-title">Archives</h3>
                                <div class="form-group select-group">
                                    <label for="archive" class="sr-only">Select Month</label>
                                    <select id="archive" name="archive" class="choice empty form-control">
                                        <option value="" disabled="" selected="" data-default="" />Select Month
                                        <option value="cat_1" />Month 1
                                        <option value="cat_2" />Month 2
                                        <option value="cat_3" />Month 3
                                        <option value="cat_4" />Month 4
                                        <option value="cat_5" />Month 5
                                        <option value="cat_6" />Month 6
                                        <option value="cat_7" />Month 7
                                        <option value="cat_8" />Month 8
                                    </select>
                                    <i class="fa fa-angle-down theme_button no-bg-button" aria-hidden="true"></i>
                                </div>
                            </div>


                        </aside>
                        <!-- eof aside sidebar -->

                    </div>
                </div>
            </section>

            <footer class="page_footer ds darkblue parallax section_padding_top_100 section_padding_bottom_65 columns_padding_25">
                <div class="container">
                    <div class="row">

                        <div class="col-md-4 col-sm-12 text-center to_animate" data-animation="fadeInUp">
                            <div class="widget">
                                <a href="index.html" class="logo top_logo text-left bottommargin_30">
                                    <img src="../theme/images/logo.png" alt="" />
                                    <span class="logo_text">
                                        Social
                                        <strong>Activism</strong>
                                    </span>
                                </a>
                                <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren takimata sanctus est Lorem ipsum dolor sit amet lorem ipsum dolor amet, consetetur sadipscing elitred diam nonumy eirmod tempor invidunt.</p>

                                <div class="topmargin_30">
                                    <a class="social-icon color-icon soc-facebook" href="#" title="Facebook"></a>
                                    <a class="social-icon color-icon soc-twitter" href="#" title="Twitter"></a>
                                    <a class="social-icon color-icon soc-google" href="#" title="Google"></a>
                                    <a class="social-icon color-icon soc-skype" href="#" title="Skype"></a>
                                    <a class="social-icon color-icon soc-youtube" href="#" title="Youtube"></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6 text-center to_animate" data-animation="fadeInUp">
                            <div class="widget widget_contact topmargin_20">
                                <h3 class="widget-title">Mailing form</h3>
                                <form class="contact-form topmargin_45" method="post" action="" />
                                    <p class="form-group">
                            <label for="footer-name">Name <span class="required">*</span></label>
                            <input type="text" aria-required="true" size="30" value="" name="name" id="footer-name" class="form-control text-center" placeholder="Full Name" />
                        </p>
                                    <p class="form-group">
                            <label for="footer-email">Email <span class="required">*</span></label>
                            <input type="email" aria-required="true" size="30" value="" name="email" id="footer-email" class="form-control text-center" placeholder="Email Address" />
                        </p>
                                    <p class="form-group">
                            <label for="footer-message">Message</label>
                            <textarea aria-required="true" rows="3" cols="45" name="message" id="footer-message" class="form-control text-center" placeholder="Your Message"></textarea>
                        </p>
                                    <p class="footer_contact-form-submit topmargin_40">
                            <button type="submit" id="footer_contact_form_submit" name="contact_submit" class="theme_button color1">Send Message</button>
                        </p>
                                </form>
                            </div>
                        </div>
        <!-- Students Join 2 Area End Here -->
        <!-- Footer Area Start Here -->
  <footer class="page_footer ds darkblue parallax section_padding_top_100 section_padding_bottom_65 columns_padding_25">
                <div class="container">
                    <div class="row">

                        <div class="col-md-4 col-sm-12 text-center to_animate" data-animation="fadeInUp">
                            <div class="widget">
                                <a href="index.html" class="logo top_logo text-left bottommargin_30">
                                    <img src="../theme/images/logo.png" alt="" />
                                    <span class="logo_text">
                                        Social
                                        <strong>Activism</strong>
                                    </span>
                                </a>
                                <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren takimata sanctus est Lorem ipsum dolor sit amet lorem ipsum dolor amet, consetetur sadipscing elitred diam nonumy eirmod tempor invidunt.</p>

                                <div class="topmargin_30">
                                    <a class="social-icon color-icon soc-facebook" href="#" title="Facebook"></a>
                                    <a class="social-icon color-icon soc-twitter" href="#" title="Twitter"></a>
                                    <a class="social-icon color-icon soc-google" href="#" title="Google"></a>
                                    <a class="social-icon color-icon soc-skype" href="#" title="Skype"></a>
                                    <a class="social-icon color-icon soc-youtube" href="#" title="Youtube"></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6 text-center to_animate" data-animation="fadeInUp">
                            <div class="widget widget_contact topmargin_20">
                                <h3 class="widget-title">Mailing form</h3>
                                <form class="contact-form topmargin_45" method="post" action="" />
                                    <p class="form-group">
                            <label for="footer-name">Name <span class="required">*</span></label>
                            <input type="text" aria-required="true" size="30" value="" name="name" id="footer-name" class="form-control text-center" placeholder="Full Name" />
                        </p>
                                    <p class="form-group">
                            <label for="footer-email">Email <span class="required">*</span></label>
                            <input type="email" aria-required="true" size="30" value="" name="email" id="footer-email" class="form-control text-center" placeholder="Email Address" />
                        </p>
                                    <p class="form-group">
                            <label for="footer-message">Message</label>
                            <textarea aria-required="true" rows="3" cols="45" name="message" id="footer-message" class="form-control text-center" placeholder="Your Message"></textarea>
                        </p>
                                    <p class="footer_contact-form-submit topmargin_40">
                            <button type="submit" id="footer_contact_form_submit" name="contact_submit" class="theme_button color1">Send Message</button>
                        </p>
                                </form>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6 text-center to_animate" data-animation="fadeInUp">

                            <div class="widget widget_contacts topmargin_20">
                                <h3 class="widget-title">Mailing form</h3>

                                <p>
                            <i class="fa fa-map-marker highlight rightpadding_5" aria-hidden="true"></i> 140 Horizon Circle, San Diego, CA
                        </p>
                                <p>
                            <i class="fa fa-phone highlight rightpadding_5" aria-hidden="true"></i> 1-888-123-4567
                        </p>
                                <p>
                            <i class="fa fa-print highlight rightpadding_5" aria-hidden="true"></i> 1-888-123-4567
                        </p>
                                <p>
                            <i class="fa fa-envelope highlight rightpadding_5" aria-hidden="true"></i> <a href="mailto:your@mail.com">social@example.com</a>
                        </p>

                            </div>
                        </div>

                    </div>
                </div>
            </footer>

            <section class="ds darkblue page_copyright section_padding_15">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <p class="small-text bold">&copy; Copyright 2017 All Rights Reserved</p>
                        </div>
                    </div>
                </div>
            </section>
    <script src="../theme/js/compressed.js"></script>
    <script src="../theme/js/main.js"></script>
    <script src="../theme/js/switcher.js"></script>
</body>


</html>
