<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> </html><![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> </html><![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> </html><![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <title>Old Boys Association</title>
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
    <link rel="stylesheet" href="../theme/css/main.css" class="color-switcher-link" />
    

<body>
    <!--[if lt IE 9]>
        <div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="highlight">upgrade your browser</a> to improve your experience.</div>
    <![endif]-->

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

           

            <header class="page_header header_white toggler_xs_right section_padding_15">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12 display_table">
                            <div class="header_left_logo display_table_cell">
                                <a href="index.html" class="logo top_logo">
                                    <img src="../theme/images/logo.png" alt="" />
                                    
                                </a>
                            </div>

                            <div class="header_mainmenu display_table_cell text-center">
                                <!-- main nav start -->
                                <nav class="mainmenu_wrapper">
                                    <ul class="mainmenu nav sf-menu">
                                        <li class="active">
                                            <a href="/">Home</a>
                                            
                                        </li>

                                        <li class="@yield('class5')">
                                            <a href="/category/6">BCC OLD Boys Association</a>
                                            
                                        <!-- eof pages -->

                                        <li class="@yield('class6')">
                                            <a href="/category/5">BCC colombo chapter</a>
                                           
                                        <!-- eof features -->


                                        <!-- gallery -->
                                        <li class="@yield('class7')">
                                            <a href="/gallery">Gallery</a>
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
                                <a href="index.html#appointment" class="theme_button color1 two_lines bottommargin_0">Log in BCC Community</a>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

           


            @yield('content')
           @include('pages.includes.footer')

</body>

</html>
