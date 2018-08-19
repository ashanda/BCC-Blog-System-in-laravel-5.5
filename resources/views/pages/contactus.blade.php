<!doctype html>
<html class="no-js" lang="">
@section('title', 'Contact Us')
   @include('pages.includes.head')
@section('class8', 'active')
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
<div class="inner-page-banner-area" style="background-image: url('img/banner/5.jpg');">
            <div class="container">
                <div class="pagination-area">
                    <h1>Contact Us</h1>
                </div>
            </div>
        </div>

        <div class="contact-us-page1-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="contact-us-info1">
                            <ul>
                                <li>
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <h3>Phone</h3>
                                    <p>0552 223 818</p>
                                </li>
                                <li>
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <h3>Address</h3>
                                    <p>River Side Road, Badulla</p>
                                </li>
                                <li>
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                    <h3>E-mail</h3>
                                    <p>director@atibadulla.edu.lk</p>
                                </li>
                                <li>
                                    <h3>Follow Us</h3>
                                    <ul class="contact-social">
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <h2 class="title-default-left title-bar-high">Contact With Us</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="contact-form1">
                                <form action="{{ route('contact.store') }}" method="post" enctype="multipart/form-data" id="contact-form" novalidate="true">
                                    {{ csrf_field() }}
                                    <fieldset>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-group has-error has-danger">
                                                <input type="text" placeholder="Name*" class="form-control" name="name" id="form-name" data-error="Name field is required" required="">
                                                <div class="help-block with-errors"><ul class="list-unstyled"><li>Name field is required</li></ul></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-group has-error has-danger">
                                                <input type="email" placeholder="Email*" class="form-control" name="email" id="form-email" data-error="Email field is required" required="">
                                                <div class="help-block with-errors"><ul class="list-unstyled"><li>Email field is required</li></ul></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="form-group has-error has-danger">
                                                <textarea placeholder="Message*" class="textarea form-control" name="msg" id="form-message" rows="8" cols="20" data-error="Message field is required" required=""></textarea>
                                                <div class="help-block with-errors"><ul class="list-unstyled"><li>Message field is required</li></ul></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-sm-12">
                                            <div class="form-group margin-bottom-none">
                                                <button type="submit" class="default-big-btn disabled">Send Message</button>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-6 col-sm-12">
                                            <div class="form-response"></div>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="google-map-area">
                        <div id="googleMap" style="width: 100%; height: 395px; position: relative; overflow: hidden;">
                            <div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);">
                               
                               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1526.838589521625!2d81.06237589369685!3d6.994052522485864!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae4621057022e19%3A0xca1856575fb6d79c!2sUva+Advanced+Technological+Institute!5e0!3m2!1sen!2slk!4v1521699989291" style="width: 100%; height: 395px;"frameborder="0" style="border:0" allowfullscreen></iframe>
                           
                    </div>
                    </div>
                </div>
            </div>
        </div>

</div>

        <!-- Students Join 2 Area End Here -->
        <!-- Footer Area Start Here -->
   @include('pages.includes.footer')
</body>


</html>