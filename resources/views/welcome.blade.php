<!DOCTYPE html>

<html lang="en-US">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="ThemeStarz">

    <link href="{{ asset('frontend/assets/fonts/font-awesome.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('frontend/assets/fonts/elegant-fonts.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/assets/bootstrap/css/bootstrap.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.carousel.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/jquery.scrollbar.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}" type="text/css">

    <title> YeniteStudio </title>

</head>

<body>

<div class="page-wrapper">

    <div class="loading-overlay"></div>

    <div class="off-screen-navigation">
        <ul class="nav">
            <li>
                <a href="#about-us">
                    <i class="fa fa-user"></i>
                    <span>About Us</span>
                </a>
            </li>
            <li>
                <a href="#services">
                    <i class="fa fa-briefcase"></i>
                    <span>Services</span>
                </a>
            </li>
            <li>
                <a href="#pricing">
                    <i class="fa fa-money"></i>
                    <span>Pricing</span>
                </a>
            </li>
            <li>
                <a href="#" class="new-window" data-toggle="modal" data-target="#modal-blog">
                    <i class="fa fa-pencil"></i>
                    <span>Blog</span>
                </a>
            </li>
            <li>
                <a href="#contact">
                    <i class="fa fa-envelope"></i>
                    <span>Contact</span>
                </a>
            </li>
        </ul>
    </div>
    <!--end off-screen-navigation-->

    <nav class="navigation">
        <a href="#" class="nav-btn">
            <i></i>
            <i></i>
            <i></i>
        </a>
        <!--end nav-btn-->
        <div class="brand">
            <a href="index.html">
                <img src="frontend/assets/img/logo.png" alt="">
            </a>
        </div>
        <!--end brand-->
    </nav>
    <!--end navigation-->

    <div class="slider-navigation">
        <div class="slider-pager owl-carousel"></div>
        <div class="slider-controls">
            <a href="#" class="prev">
                <i class="fa fa-chevron-left"></i>
            </a>
            <a href="#" class="next">
                <i class="fa fa-chevron-right"></i>
            </a>
            <a href="#" class="zoom-out">
                <i class="fa fa-search-minus"></i>
            </a>
        </div>
    </div>
    <!--end slider-navigation-->

    <div class="outer-wrapper">
        <div class="inner-wrapper">
            <div class="slide first" id="0" data-position-x="0" data-position-y="0" data-position-z="1" data-rotation="0">
                <div class="main-title">
                    <div class="main-title-wrapper">
                        <h1>Hi there! I’m Jane Sane</h1>
                        <h2>A Professional Photographer of Your Memories</h2>
                        <a href="#" class="btn btn-default next">Show my works</a>
                    </div>
                </div>
                <div class="image" data-background="frontend/assets/img/0.jpg"></div>
                <!--end image-->
            </div>
            <!--end slide-->

            <div class="slide" id="1">
                <div class="description">
                    <h2 class="animate">Lost in Solitude</h2>
                    <dl class="animate">
                        <dt>Client:</dt>
                        <dd>John Doe</dd>
                        <dt>Photographer:</dt>
                        <dd>Juliana Brown</dd>
                        <dt>Category:</dt>
                        <dd>Landscape, Surreal</dd>
                        <dt>Website:</dt>
                        <dd><a href="http://www.johndoe.com">www.johndoe.com</a>
                        </dd>
                    </dl>
                    <div class="additional-info animate">
                        <dl>
                            <dt>ISO:</dt>
                            <dd>200</dd>
                            <dt>Shutter Speed:</dt>
                            <dd>1/10s</dd>
                            <dt>Focal Length:</dt>
                            <dd>42mm</dd>
                        </dl>
                    </div>
                </div>
                <!--end description-->
                <div class="image" data-background="frontend/assets/img/1.jpg"></div>
                <!--end image-->
            </div>
            <!--end slide-->

            <div class="slide" id="2">
                <div class="description">
                    <h2 class="animate">You Don't Know Me</h2>
                    <dl class="animate">
                        <dt>Client:</dt>
                        <dd>Personal Work</dd>
                        <dt>Photographer:</dt>
                        <dd>Jane Sane</dd>
                        <dt>Category:</dt>
                        <dd>Portrait, Real Life</dd>
                    </dl>
                    <div class="additional-info animate">
                        <dl>
                            <dt>ISO:</dt>
                            <dd>300</dd>
                            <dt>Shutter Speed:</dt>
                            <dd>1/60s</dd>
                            <dt>Focal Length:</dt>
                            <dd>120mm</dd>
                        </dl>
                    </div>
                </div>
                <!--end description-->
                <div class="image" data-background="frontend/assets/img/2.jpg"></div>
                <!--end image-->
            </div>
            <!--end slide-->

            <div class="slide" id="3">
                <div class="description">
                    <h2 class="animate">The Mirror</h2>
                    <dl class="animate">
                        <dt>Client:</dt>
                        <dd>Personal Work</dd>
                        <dt>Photographer:</dt>
                        <dd>Jane Sane</dd>
                        <dt>Category:</dt>
                        <dd>Portrait, Real Life</dd>
                    </dl>
                    <div class="additional-info animate">
                        <dl>
                            <dt>ISO:</dt>
                            <dd>800</dd>
                            <dt>Shutter Speed:</dt>
                            <dd>1/60s</dd>
                            <dt>Focal Length:</dt>
                            <dd>42mm</dd>
                        </dl>
                    </div>
                </div>
                <!--end description-->
                <div class="image" data-background="frontend/assets/img/3.jpg"></div>
                <!--end image-->
            </div>
            <!--end slide-->

            <div class="slide" id="4">
                <div class="description">
                    <h2 class="animate">The Fence</h2>
                    <dl class="animate">
                        <dt>Client:</dt>
                        <dd>Personal Work</dd>
                        <dt>Photographer:</dt>
                        <dd>Jane Sane</dd>
                        <dt>Category:</dt>
                        <dd>Portrait, Real Life</dd>
                    </dl>
                    <div class="additional-info animate">
                        <dl>
                            <dt>ISO:</dt>
                            <dd>800</dd>
                            <dt>Shutter Speed:</dt>
                            <dd>1/60s</dd>
                            <dt>Focal Length:</dt>
                            <dd>42mm</dd>
                        </dl>
                    </div>
                </div>
                <!--end description-->
                <div class="image" data-background="frontend/assets/img/4.jpg"></div>
                <!--end image-->
            </div>
            <!--end slide-->

            <div class="slide" id="5">
                <div class="description">
                    <h2 class="animate">From Above</h2>
                    <dl class="animate">
                        <dt>Client:</dt>
                        <dd>Peter Stray</dd>
                        <dt>Photographer:</dt>
                        <dd>Mike Hill</dd>
                        <dt>Category:</dt>
                        <dd>Landscape, Drone</dd>
                    </dl>
                    <div class="additional-info animate">
                        <dl>
                            <dt>ISO:</dt>
                            <dd>800</dd>
                            <dt>Shutter Speed:</dt>
                            <dd>1/60s</dd>
                            <dt>Focal Length:</dt>
                            <dd>42mm</dd>
                        </dl>
                    </div>
                </div>
                <!--end description-->
                <div class="image" data-background="frontend/assets/img/5.jpg"></div>
            </div>
            <!--end slide-->

            <div class="slide" id="6">
                <div class="description">
                    <h2 class="animate">The Butcher</h2>
                    <dl class="animate">
                        <dt>Client:</dt>
                        <dd>Personal Work</dd>
                        <dt>Photographer:</dt>
                        <dd>Jane Sane</dd>
                        <dt>Category:</dt>
                        <dd>Real Life</dd>
                    </dl>
                    <div class="additional-info animate">
                        <dl>
                            <dt>ISO:</dt>
                            <dd>600</dd>
                            <dt>Shutter Speed:</dt>
                            <dd>1/50s</dd>
                            <dt>Focal Length:</dt>
                            <dd>17mm</dd>
                        </dl>
                    </div>
                </div>
                <!--end description-->
                <div class="image" data-background="frontend/assets/img/6.jpg"></div>
            </div>
            <!--end slide-->

            <div class="slide" id="7">
                <div class="description">
                    <h2 class="animate">Suzane & John</h2>
                    <dl class="animate">
                        <dt>Client:</dt>
                        <dd>Suzane & John Does</dd>
                        <dt>Photographer:</dt>
                        <dd>Mike Hill</dd>
                        <dt>Category:</dt>
                        <dd>Wedding, Couple</dd>
                    </dl>
                    <div class="additional-info animate">
                        <dl>
                            <dt>ISO:</dt>
                            <dd>400</dd>
                            <dt>Shutter Speed:</dt>
                            <dd>1/60s</dd>
                            <dt>Focal Length:</dt>
                            <dd>42mm</dd>
                        </dl>
                    </div>
                </div>
                <!--end description-->
                <div class="image" data-background="frontend/assets/img/7.jpg"></div>
            </div>
            <!--end slide-->

            <div class="slide" id="8">
                <div class="description">
                    <h2 class="animate">Dark Dream</h2>
                    <dl class="animate">
                        <dt>Client:</dt>
                        <dd>Personal Work</dd>
                        <dt>Photographer:</dt>
                        <dd>Jane Sane</dd>
                        <dt>Category:</dt>
                        <dd>Portrait</dd>
                    </dl>
                    <div class="additional-info animate">
                        <dl>
                            <dt>ISO:</dt>
                            <dd>700</dd>
                            <dt>Shutter Speed:</dt>
                            <dd>1/160s</dd>
                            <dt>Focal Length:</dt>
                            <dd>38mm</dd>
                        </dl>
                    </div>
                </div>
                <!--end description-->
                <div class="image" data-background="frontend/assets/img/8.jpg"></div>
            </div>
            <!--end slide-->

            <div class="slide" id="9">
                <div class="description">
                    <h2 class="animate">Finally Here</h2>
                    <dl class="animate">
                        <dt>Client:</dt>
                        <dd>Juliana Grey</dd>
                        <dt>Photographer:</dt>
                        <dd>Mike Hill</dd>
                        <dt>Category:</dt>
                        <dd>Landscape</dd>
                    </dl>
                    <div class="additional-info animate">
                        <dl>
                            <dt>ISO:</dt>
                            <dd>800</dd>
                            <dt>Shutter Speed:</dt>
                            <dd>1/60s</dd>
                            <dt>Focal Length:</dt>
                            <dd>42mm</dd>
                        </dl>
                    </div>
                </div>
                <!--end description-->
                <div class="image" data-background="frontend/assets/img/9.jpg"></div>
            </div>
            <!--end slide-->

            <div class="slide" id="10">
                <div class="description">
                    <h2 class="animate">Beautiful View</h2>
                    <dl class="animate">
                        <dt>Client:</dt>
                        <dd>Peter Stray</dd>
                        <dt>Photographer:</dt>
                        <dd>Mike Hill</dd>
                        <dt>Category:</dt>
                        <dd>Landscape, Drone</dd>
                    </dl>
                    <div class="additional-info animate">
                        <dl>
                            <dt>ISO:</dt>
                            <dd>800</dd>
                            <dt>Shutter Speed:</dt>
                            <dd>1/60s</dd>
                            <dt>Focal Length:</dt>
                            <dd>42mm</dd>
                        </dl>
                    </div>
                </div>
                <!--end description-->
                <div class="image" data-background="frontend/assets/img/10.jpg"></div>
            </div>
            <!--end slide-->

            <div class="slide" id="11">
                <div class="description">
                    <h2 class="animate">Forest Surprice</h2>
                    <dl class="animate">
                        <dt>Client:</dt>
                        <dd>National Geographic</dd>
                        <dt>Photographer:</dt>
                        <dd>Jane Sanne</dd>
                        <dt>Category:</dt>
                        <dd>Animals, Forest</dd>
                    </dl>
                    <div class="additional-info animate">
                        <dl>
                            <dt>ISO:</dt>
                            <dd>600</dd>
                            <dt>Shutter Speed:</dt>
                            <dd>1/60s</dd>
                            <dt>Focal Length:</dt>
                            <dd>160mm</dd>
                        </dl>
                    </div>
                </div>
                <!--end description-->
                <div class="image" data-background="frontend/assets/img/11.jpg"></div>
            </div>
            <!--end slide-->

            <div class="slide" id="12">
                <div class="description">
                    <h2 class="animate">No Way Back</h2>
                    <dl class="animate">
                        <dt>Client:</dt>
                        <dd>Personal Work</dd>
                        <dt>Photographer:</dt>
                        <dd>Mike Hill</dd>
                        <dt>Category:</dt>
                        <dd>Landscape</dd>
                    </dl>
                    <div class="additional-info animate">
                        <dl>
                            <dt>ISO:</dt>
                            <dd>1200</dd>
                            <dt>Shutter Speed:</dt>
                            <dd>1/20s</dd>
                            <dt>Focal Length:</dt>
                            <dd>42mm</dd>
                        </dl>
                    </div>
                </div>
                <!--end description-->
                <div class="image" data-background="frontend/assets/img/12.jpg"></div>
            </div>
            <!--end slide-->
        </div>
        <!--end page-wrapper-->
    </div>
    <!--end outer-wrapper-->

    <div class="off-screen-content">
        <div class="scrollbar-inner">
            <section id="about-us">
                <div class="image-header">
                    <div class="bg-transfer"><img src="frontend/assets/img/image-header.jpg" alt=""></div>
                </div>
                <div class="section-wrapper">
                    <h2>About Me</h2>

                    <h3>Hi! I'm Jane Sane</h3>

                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sagittis lacinia tellus. Nullam
                        venenatis a sem non dictum. Aliquam orci ipsum, malesuada lacinia faucibus nec, bibendum a enim.
                        Sed efficitur bibendum purus. Fusce libero metu
                    </p>

                    <p>
                        Enean sit amet metus sodales, elementum ligula quis, facilisis neque. Sed eu purus ut mauris
                        malesuada viverra eu vitae eros. In odio neque, fermentum id tincidunt vitae, accumsan eu augue.
                        Proin vitae porta nulla.
                    </p>
                    <img src="frontend/assets/img/signature-black.png" alt="">
                </div>
                <!--end section-wrapper-->
            </section>
            <!--end #about-us-->

            <section id="services">
                <div class="section-wrapper">
                    <h2>Services</h2>

                    <p>
                        Duis ut finibus elit. Praesent vestibulum porta odio, in commodo velit placerat sed. Vivamus et
                        iaculis sem. Sed nibh turpis, finibus ut est nec, tempus fringilla augue. Quisque blandit nunc eu
                        tincidunt iaculis.
                    </p>

                    <div class="service">
                        <div class="image">
                            <div class="bg-transfer"><img src="frontend/assets/img/service-01.jpg" alt=""></div>
                        </div>
                        <div class="description">
                            <h3>Professional Photography</h3>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sagittis lacinia tellus.
                                Nullam venenatis a sem non dictum.
                            </p>
                        </div>
                    </div>
                    <!--end service-->
                    <div class="service">
                        <div class="image">
                            <div class="bg-transfer"><img src="frontend/assets/img/service-02.jpg" alt=""></div>
                        </div>
                        <div class="description">
                            <h3>Wedding Photography</h3>

                            <p>Donec mauris nibh, blandit id eros lacinia, lobortis aliquam mauris. Suspendisse laoreet,
                                tortor ut convallis facilisis
                            </p>
                        </div>
                    </div>
                    <!--end service-->
                    <div class="service">
                        <div class="image">
                            <div class="bg-transfer"><img src="frontend/assets/img/service-03.jpg" alt=""></div>
                        </div>
                        <div class="description">
                            <h3>Video Editing</h3>

                            <p>Nullam ultricies purus sed accumsan tempus. Integer lorem dui, pellentesque at arcu non
                                volutpat fermentum sem.
                            </p>
                        </div>
                    </div>
                    <!--end service-->
                </div>
                <!--end section-wrapper-->
            </section>
            <!--end #services-->

            <section id="pricing">
                <div class="section-wrapper">
                    <h2>Pricing</h2>

                    <div class="price-package">
                        <div class="price">$129</div>
                        <div class="description">
                            <h3>Basic Package</h3>

                            <p>
                                Enean sit amet metus sodales, elementum ligula quis, facilisis neque. Sed eu purus ut mauris
                                malesuada viverra eu vitae eros.
                            </p>
                            <ul>
                                <li>Aenean pretium ex non leo aliquam</li>
                                <li>Sit amet porta urna interdum</li>
                            </ul>
                        </div>
                    </div>
                    <!--end price-package-->

                    <div class="price-package">
                        <div class="price">$149</div>
                        <div class="description">
                            <h3>Advanced Package</h3>

                            <p>
                                Cras ornare ligula quis ultrices fermentum. Maecenas finibus, sapien non suscipit luctus
                            </p>
                            <ul>
                                <li>Aenean pretium ex non leo aliquam</li>
                                <li>Sit amet porta urna interdum</li>
                                <li>In pretium euismod justo et porttitor</li>
                            </ul>
                        </div>
                    </div>
                    <!--end price-package-->

                    <div class="price-package">
                        <div class="price">$169</div>
                        <div class="description">
                            <h3>Professional Package</h3>

                            <p>
                                Phasellus in dolor sit amet lorem scelerisque sodales quis ut eros. Nullam elit dui, egestas
                                vel tortor
                            </p>
                            <ul>
                                <li>Aenean pretium ex non leo aliquam</li>
                                <li>Sit amet porta urna interdum</li>
                                <li>In pretium euismod justo et porttitor</li>
                                <li>Sed eu purus ut mauris</li>
                            </ul>
                        </div>
                    </div>
                    <!--end price-package-->
                </div>
                <!--end section-wrapper-->
            </section>
            <!--end #pricing-->

            <section id="contact">
                <div id="map"></div>
                <div class="section-wrapper">
                    <h2>Contact</h2>

                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <h3>Address</h3>
                            <address>
                                4758 Nancy Street
                                <br>
                                +1 919-571-2528
                                <br>
                                <a href="#">hello@example.com</a>
                            </address>
                        </div>
                        <!--end col-sm-6-->
                        <div class="col-md-6 col-sm-6">
                            <h3>Social</h3>

                            <div class="social">
                                <figure><a href="" class="icon"><i class="fa fa-facebook"></i>Facebook</a></figure>
                                <figure><a href="" class="icon"><i class="fa fa-twitter"></i>Twitter</a></figure>
                                <figure><a href="" class="icon"><i class="fa fa-youtube"></i>Youtube</a></figure>
                                <figure><a href="" class="icon"><i class="fa fa-pinterest"></i>Pinterest</a></figure>
                            </div>
                        </div>
                        <!--end col-sm-6-->
                    </div>
                    <!--end row-->
                    <br>

                    <h3>Contact Form</h3>

                    <form id="form-contact" method="post" class="form clearfix">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="form-contact-name" name="name" placeholder="Your Name" required>
                                </div>
                                <!--end form-group -->
                            </div>
                            <!--end col-md-6 col-sm-6 -->
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" id="form-contact-email" name="email" placeholder="Your Email" required>
                                </div>
                                <!--end form-group -->
                            </div>
                            <!--end col-md-6 col-sm-6 -->
                        </div>
                        <!--end row -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea class="form-control" id="form-contact-message" rows="8" name="message" placeholder="Your Message" required></textarea>
                                </div>
                                <!--end form-group -->
                            </div>
                            <!--end col-md-12 -->
                        </div>
                        <!--end row -->
                        <div class="form-group clearfix">
                            <button type="submit" class="btn pull-right btn-default btn-framed btn-rounded" id="form-contact-submit">Send a Message
                            </button>
                        </div>
                        <!--end form-group -->
                        <div class="form-contact-status"></div>
                    </form>
                    <!--end form-contact -->
                </div>
                <!--end section-wrapper-->
            </section>
            <!--end #contact-->
        </div>
    </div>
    <!--end off-screen-content-->
</div>
<!--end page-wrapper-->

<!-- Modal -->
<div class="modal fade" id="modal-blog" tabindex="-1" role="dialog" aria-labelledby="modal-blog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <iframe data-src="blog.html"></iframe>
        </div>
    </div>
</div>
<!--end modal-->

<script type="text/javascript" src="{{ asset('frontend/assets/js/jquery-2.2.1.min.js') }}"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js"></script>
<script type="text/javascript" src="{{ asset('frontend/assets/bootstrap/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/assets/js/jquery.validate.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/assets/js/jquery.scrollbar.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/assets/js/jquery.mousewheel.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/assets/js/pace.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/assets/js/custom.js') }}"></script>

<script type="text/javascript">

    $(document).ready(function ($) {
        "use strict";



    });

    var latitude = 34.038405;
    var longitude = -117.946944;
    var markerImage = "frontend/assets/img/map-marker.png";
    var mapTheme = "light";
    var mapElement = "map";
    google.maps.event.addDomListener(window, "load", simpleMap(latitude, longitude, markerImage, mapTheme, mapElement));

</script>

</body>