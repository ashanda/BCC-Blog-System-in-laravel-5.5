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
                                    <img src="theme/images/logo.png" alt="" />
                                    <span class="logo_text">
                                        BCC
                                        <strong>Community</strong>
                                    </span>
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
                                           
                                                </li>
                                                <!-- eof Gallery regular -->

                                                <!-- Gallery full width -->
                                               
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