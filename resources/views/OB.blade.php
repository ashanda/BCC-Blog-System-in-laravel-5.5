<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> </html><![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> </html><![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> </html><![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
	<title>Old Boys Association</title>
@include('pages.includes.head')

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

			<section class="page_breadcrumbs cs gradient2 parallax section_padding_top_50 section_padding_bottom_50">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h2>BCC Old Boys Association</h2>
							<ol class="breadcrumb darklinks">
								
							</ol>
						</div>
					</div>
				</div>
			</section>


			<section class="ls section_padding_top_150 section_padding_bottom_150 columns_padding_25">
				<div class="container">
					<div class="row">

						<div class="col-sm-7 col-md-8 col-lg-8">

							<article class="single-post vertical-item content-padding big-padding post with_border rounded">
								<div class="entry-thumbnail item-media top_rounded overflow_hidden">
									<img src="theme/images/gallery/09.jpg" alt="" />
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
								<img class="alignleft" alt="" src="theme/images/side-image.jpg" />
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
											<img src="theme/images/team/01.jpg" alt="" />
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
													<img class="media-object" alt="" src="theme/images/faces/02.jpg" />
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
															<img class="media-object" alt="" src="theme/images/faces/03.jpg" />
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
																	<img class="media-object" alt="" src="theme/images/faces/01.jpg" />
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
										<img src="theme/images/gallery/12.jpg" alt="" />
										<div>
											<div class="highlight small-text">
												Prev
											</div>
											<h4 class="semibold">
												<a href="./blog-single-right.html" rel="bookmark">Pork chop biltong pork loin strip steak</a>
											</h4>
										</div>
										<!-- eof .item-content -->
									</div>
								</div>

								<div class="col-md-6">
									<div class="with_padding text-center ds bg_teaser after_cover darkblue_bg">
										<img src="theme/images/gallery/10.jpg" alt="" />
										<div class="item-content">
											<div class="highlight small-text">
												Next
											</div>
											<h4 class="semibold">
												<a href="./blog-single-right.html" rel="bookmark">Shoulder drumstick apico short loin</a>
											</h4>
										</div>
										<!-- eof .item-content -->
									</div>
								</div>

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

								<form class="signup" action="./" method="get" />
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
											<img src="theme/images/recent_post1.jpg" alt="" />
										</div>
										<div class="media-body media-middle">
											<h4>
												<a href="./blog-single-left.html">
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
											<img src="theme/images/recent_post2.jpg" alt="" />
										</div>
										<div class="media-body media-middle">
											<h4>
												<a href="./blog-single-left.html">
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
											<img src="theme/images/recent_post3.jpg" alt="" />
										</div>
										<div class="media-body media-middle">
											<h4>
												<a href="./blog-single-left.html">
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
		   @include('pages.includes.footer')

</body>

</html>