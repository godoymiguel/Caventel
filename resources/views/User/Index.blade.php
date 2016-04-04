@extends('template.mainUser')

@section('title', 'CAVENTEL -')

@section('IndexUser')

<div id="wrapper"  >

    <div class="top_wrapper">
        @include('template.Partials.divTopUser')
        <div class="rev-slider-full">
            <div class="rev-slider-banner-full  rev-slider-full">
                <ul>


                    <li data-transition="fade" data-slotamount="7" data-masterspeed="300" >
                        <img src="{{ asset('images/estacion-barnitas-101.jpg')}}"  alt="rev-full1" data-fullwidthcentering="on">
                    </li>


                    <li  data-transition="slideleft" data-slotamount="14">
                        <img src="{{ asset('images/pico.jpg')}}" alt="Rev Full">
                    </li>

                    <li  data-transition="slideleft" data-slotamount="14">
                        <img src="{{ asset('images/virgen.jpg')}}" alt="Rev Full">
                    </li>

                    <li  data-transition="slideleft" data-slotamount="14">
                        <img src="{{ asset('images/barinitas.jpg')}}" alt="Rev Full">
                    </li>

                </ul>
                <div class="tp-bannertimer tp-bottom"></div>
            </div>
        </div></div><!--.top wrapper end -->

    <div class="loading-container">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>


    <div class="content-wrapper hide-until-loading">
        <!--
        <div class="section-content top-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3">
                        <div class="content-box content-style4 medium animated"
                             data-animtype="fadeIn"
                             data-animrepeat="0"
                             data-animspeed="1s"
                             data-animdelay="0.2s"
                        >
                            <h4 class="h4-body-title">
                                <i class="icon-settings-streamline"></i>
                                Fully Customizable
                            </h4>
                            <div class="content-box-text">
                                Cras sem erat, aliquet in egestas cursus, ullamcorper vitae
                                ligula. Nunc commodo lacinia eros ac condimentum

                                <div>
                                    <a href="#" class=" btn btn-sm">
                                        <span>read more</span>
                                    </a>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="content-box content-style4 medium animated"
                             data-animtype="fadeIn"
                             data-animrepeat="0"
                             data-animspeed="1s"
                             data-animdelay="0.2s"
                        >
                            <h4 class="h4-body-title">
                                <i class="icon-camera-streamline-video"></i>
                                Animation Ready
                            </h4>
                            <div class="content-box-text">
                                Cras sem erat, aliquet in egestas cursus, ullamcorper vitae
                                ligula. Nunc commodo lacinia eros ac condimentum

                                <div>
                                    <a href="#" class=" btn btn-sm">
                                        <span>read more</span>
                                    </a>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="content-box content-style4 medium animated"
                             data-animtype="fadeIn"
                             data-animrepeat="0"
                             data-animspeed="1s"
                             data-animdelay="0.2s"
                        >
                            <h4 class="h4-body-title">
                                <i class="icon-computer-imac"></i>
                                Responsive Design
                            </h4>
                            <div class="content-box-text">
                                Cras sem erat, aliquet in egestas cursus, ullamcorper vitae
                                ligula. Nunc commodo lacinia eros ac condimentum

                                <div>
                                    <a href="#" class=" btn btn-sm">
                                        <span>read more</span>
                                    </a>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="content-box content-style4 medium animated"
                             data-animtype="fadeIn"
                             data-animrepeat="0"
                             data-animspeed="1s"
                             data-animdelay="0.2s"
                        >
                            <h4 class="h4-body-title">
                                <i class="icon-paint-bucket-streamline"></i>
                                Unlimited Skins
                            </h4>
                            <div class="content-box-text">
                                Cras sem erat, aliquet in egestas cursus, ullamcorper vitae
                                ligula. Nunc commodo lacinia eros ac condimentum

                                <div>
                                    <a href="#" class=" btn btn-sm">
                                        <span>read more</span>
                                    </a>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </div>
        -->
        <div class="body-wrapper">
            <?php
            /*
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 animated" data-animtype="flipInY"
                         data-animrepeat="0"
                         data-speed="1s"
                         data-delay="0.5s">
                        <h2 class="h2-section-title">Our Work</h2>

                        <div class="i-section-title">
                            <i class="icon-files">

                            </i>
                        </div>

                        <div class="space-sep20"></div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="portfolio-items">

                            <!-- Portfolio Item -->
                            <div class="thumb-label-item animated web-design"
                                 data-animtype="fadeInUp"
                                 data-animrepeat="0"
                                 data-speed="1s"
                                 data-delay="0.6s">
                                <div class="img-overlay thumb-label-item-img">
                                    <img
                                            src="media/portfolio1.jpg"
                                            alt=""/>

                                    <div class="item-img-overlay">
                                        <a class="portfolio-zoom fa fa-plus"
                                           href="media/portfolio1.jpg"
                                           data-rel="prettyPhoto[portfolio]" title="Title goes here"></a>

                                        <div class="item_img_overlay_content">
                                            <h3 class="thumb-label-item-title">
                                                <a href="#"> Aenean llus mtus </a>
                                            </h3>
                                        </div>

                                    </div>
                                </div>


                            </div>
                            <!-- //Portfolio Item// -->
                            <!-- Portfolio Item -->
                            <div class="thumb-label-item animated seo"
                                 data-animtype="fadeInUp"
                                 data-animrepeat="0"
                                 data-speed="1s"
                                 data-delay="0.8s">
                                <div class="img-overlay thumb-label-item-img">
                                    <img
                                            src="media/portfolio2.jpg"
                                            alt=""/>

                                    <div class="item-img-overlay">
                                        <a class="portfolio-zoom fa fa-plus"
                                           href="http://www.youtube.com/watch?v=mcw6j-QWGMo"
                                           data-rel="prettyPhoto[portfolio]" title="Title goes here"></a>

                                        <div class="item_img_overlay_content">
                                            <h3 class="thumb-label-item-title">
                                                <a href="#"> Donec vitae sapien </a>
                                            </h3>
                                        </div>

                                    </div>
                                </div>


                            </div>
                            <!-- //Portfolio Item// -->
                            <!-- Portfolio Item -->
                            <div class="thumb-label-item animated seo"
                                 data-animtype="fadeInUp"
                                 data-animrepeat="0"
                                 data-speed="1s"
                                 data-delay="1s">
                                <div class="img-overlay thumb-label-item-img">
                                    <img
                                            src="media/portfolio3.jpg"
                                            alt=""/>

                                    <div class="item-img-overlay">
                                        <a class="portfolio-zoom fa fa-plus"
                                           href="http://www.youtube.com/watch?v=mcw6j-QWGMo"
                                           data-rel="prettyPhoto[portfolio]" title="Title goes here"></a>

                                        <div class="item_img_overlay_content">
                                            <h3 class="thumb-label-item-title">
                                                <a href="#"> Maecas nec odio </a>
                                            </h3>
                                        </div>

                                    </div>
                                </div>


                            </div>
                            <!-- //Portfolio Item// -->
                            <!-- Portfolio Item -->
                            <div class="thumb-label-item animated web-design"
                                 data-animtype="fadeInUp"
                                 data-animrepeat="0"
                                 data-speed="1s"
                                 data-delay="1.2s">
                                <div class="img-overlay thumb-label-item-img">
                                    <img
                                            src="media/portfolio4.jpg"
                                            alt=""/>

                                    <div class="item-img-overlay">
                                        <a class="portfolio-zoom fa fa-plus"
                                           href="media/portfolio4.jpg"
                                           data-rel="prettyPhoto[portfolio]" title="Title goes here"></a>

                                        <div class="item_img_overlay_content">
                                            <h3 class="thumb-label-item-title">
                                                <a href="#"> Vestibum friilla </a>
                                            </h3>
                                        </div>

                                    </div>
                                </div>


                            </div>
                            <!-- //Portfolio Item// -->
                            <!-- Portfolio Item -->
                            <div class="thumb-label-item animated seo"
                                 data-animtype="fadeInUp"
                                 data-animrepeat="0"
                                 data-speed="1s"
                                 data-delay="1.4s">
                                <div class="img-overlay thumb-label-item-img">
                                    <img
                                            src="media/portfolio5.jpg"
                                            alt=""/>

                                    <div class="item-img-overlay">
                                        <a class="portfolio-zoom fa fa-plus"
                                           href="media/portfolio5.jpg"
                                           data-rel="prettyPhoto[portfolio]" title="Title goes here"></a>

                                        <div class="item_img_overlay_content">
                                            <h3 class="thumb-label-item-title">
                                                <a href="#"> Curatur lula </a>
                                            </h3>
                                        </div>

                                    </div>
                                </div>


                            </div>
                            <!-- //Portfolio Item// -->
                            <!-- Portfolio Item -->
                            <div class="thumb-label-item animated videos"
                                 data-animtype="fadeInUp"
                                 data-animrepeat="0"
                                 data-speed="1s"
                                 data-delay="1.6s">
                                <div class="img-overlay thumb-label-item-img">
                                    <img
                                            src="media/portfolio6.jpg"
                                            alt=""/>

                                    <div class="item-img-overlay">
                                        <a class="portfolio-zoom fa fa-plus"
                                           href="media/portfolio6.jpg"
                                           data-rel="prettyPhoto[portfolio]" title="Title goes here"></a>

                                        <div class="item_img_overlay_content">
                                            <h3 class="thumb-label-item-title">
                                                <a href="#"> Pellentesque </a>
                                            </h3>
                                        </div>

                                    </div>
                                </div>


                            </div>
                            <!-- //Portfolio Item// -->
                            <!-- Portfolio Item -->
                            <div class="thumb-label-item animated videos"
                                 data-animtype="fadeInUp"
                                 data-animrepeat="0"
                                 data-speed="1s"
                                 data-delay="1.8s">
                                <div class="img-overlay thumb-label-item-img">
                                    <img
                                            src="media/portfolio7.jpg"
                                            alt=""/>

                                    <div class="item-img-overlay">
                                        <a class="portfolio-zoom fa fa-plus"
                                           href="http://www.youtube.com/watch?v=mcw6j-QWGMo"
                                           data-rel="prettyPhoto[portfolio]" title="Title goes here"></a>

                                        <div class="item_img_overlay_content">
                                            <h3 class="thumb-label-item-title">
                                                <a href="#"> In enim justo </a>
                                            </h3>
                                        </div>

                                    </div>
                                </div>


                            </div>
                            <!-- //Portfolio Item// -->
                            <!-- Portfolio Item -->
                            <div class="thumb-label-item animated seo"
                                 data-animtype="fadeInUp"
                                 data-animrepeat="0"
                                 data-speed="1s"
                                 data-delay="2s">
                                <div class="img-overlay thumb-label-item-img">
                                    <img
                                            src="media/portfolio8.jpg"
                                            alt=""/>

                                    <div class="item-img-overlay">
                                        <a class="portfolio-zoom fa fa-plus"
                                           href="media/portfolio8.jpg"
                                           data-rel="prettyPhoto[portfolio]" title="Title goes here"></a>

                                        <div class="item_img_overlay_content">
                                            <h3 class="thumb-label-item-title">
                                                <a href="#"> Lutus puvinar </a>
                                            </h3>
                                        </div>

                                    </div>
                                </div>


                            </div>
                            <!-- //Portfolio Item// -->


                        </div>
                    </div>
                </div>

            </div>
            */?>
            <div class="space-sep40"></div>
            <!--
            <div class="section-content section-tabs section-px stones-bg white-text">
                <div class="tab-container">
                    <div class="section-tab-arrow"></div>
                    <div class="section-etabs-container">
                        <ul class="section-etabs">
                            <li class="tab active">
                                <a href="#tabc1"> Our News</a>
                            </li>
                            <li class="tab">
                                <a href="#tabc2"> Clients</a>
                            </li>
                            <li class="tab">
                                <a href="#tabc3"> NewsLetter</a>
                            </li>
                        </ul>
                    </div>
                    <div class="container">

                        <div class="tab-content">

                            <div id="tabc1">
                                <div class="row">
                                    <div class="col-md-3 col-sm-3">
                                        <div class="feature animated" data-animtype="fadeInUp" data-animrepeat="0" data-animspeed="1s" data-animdelay="0.4s">
                                            <div class="feature-image img-overlay">
                                                <img src="media/blog1.jpg" alt="Blog">

                                                <div class="item-img-overlay">
                                                    <a class="portfolio-zoom fa fa-plus" href="media/blog1.jpg"
                                                       data-rel="prettyPhoto[portfolio]" title="Title goes here"></a>

                                                </div>

                                            </div>

                                            <div class="feature-content">
                                                <h3 class="h3-body-title blog-title">
                                                    <a href="#">Vix sumo ferri an</a>
                                                </h3>
                                                <p>
                                                    Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a [...]
                                                </p>



                                            </div>

                                            <div class="feature-details">
                                                <i class="icon-calendar"></i>
                                                <span>July 10, 2013</span>
                                                <span class="details-seperator"></span>

                                                <a href="#"><i class="icon-comment"></i><span>4</span></a>


                                                <div class="feature-share">
                                                    <a href="#"><i class="icon-heart"></i></a>
                                                    <a href="#"><i class="icon-facebook"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-3">
                                        <div class="feature animated" data-animtype="fadeInUp" data-animrepeat="0" data-animspeed="1s" data-animdelay="0.6s">
                                            <div class="feature-image img-overlay">
                                                <img src="media/blog2.jpg" alt="Blog">

                                                <div class="item-img-overlay">
                                                    <a class="portfolio-zoom fa fa-plus" href="media/blog2.jpg"
                                                       data-rel="prettyPhoto[portfolio]" title="Title goes here"></a>

                                                </div>

                                            </div>

                                            <div class="feature-content">
                                                <h3 class="h3-body-title blog-title">
                                                    <a href="#">Donec vitae sapien</a>
                                                </h3>
                                                <p>
                                                    Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a [...]
                                                </p>



                                            </div>

                                            <div class="feature-details">
                                                <i class="icon-calendar"></i>
                                                <span>July 10, 2013</span>
                                                <span class="details-seperator"></span>

                                                <a href="#"><i class="icon-comment"></i><span>4</span></a>


                                                <div class="feature-share">
                                                    <a href="#"><i class="icon-heart"></i></a>
                                                    <a href="#"><i class="icon-facebook"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-3">
                                        <div class="feature animated" data-animtype="fadeInUp" data-animrepeat="0" data-animspeed="1s" data-animdelay="0.8s">
                                            <div class="feature-image img-overlay">
                                                <img src="media/blog3.jpg" alt="Blog">

                                                <div class="item-img-overlay">
                                                    <a class="portfolio-zoom fa fa-plus" href="media/blog3.jpg"
                                                       data-rel="prettyPhoto[portfolio]" title="Title goes here"></a>

                                                </div>

                                            </div>

                                            <div class="feature-content">
                                                <h3 class="h3-body-title blog-title">
                                                    <a href="#">Aenean tellus metus</a>
                                                </h3>
                                                <p>
                                                    Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a [...]
                                                </p>



                                            </div>

                                            <div class="feature-details">
                                                <i class="icon-calendar"></i>
                                                <span>July 10, 2013</span>
                                                <span class="details-seperator"></span>

                                                <a href="#"><i class="icon-comment"></i><span>4</span></a>


                                                <div class="feature-share">
                                                    <a href="#"><i class="icon-heart"></i></a>
                                                    <a href="#"><i class="icon-facebook"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-3">
                                        <div class="feature animated" data-animtype="fadeInUp" data-animrepeat="0" data-animspeed="1s" data-animdelay="1s">
                                            <div class="feature-image img-overlay">
                                                <img src="media/blog4.jpg" alt="Blog">

                                                <div class="item-img-overlay">
                                                    <a class="portfolio-zoom fa fa-plus" href="media/blog4.jpg"
                                                       data-rel="prettyPhoto[portfolio]" title="Title goes here"></a>

                                                </div>

                                            </div>

                                            <div class="feature-content">
                                                <h3 class="h3-body-title blog-title">
                                                    <a href="#">Aenean tellus metus</a>
                                                </h3>
                                                <p>
                                                    Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a [...]
                                                </p>



                                            </div>

                                            <div class="feature-details">
                                                <i class="icon-calendar"></i>
                                                <span>July 10, 2013</span>
                                                <span class="details-seperator"></span>

                                                <a href="#"><i class="icon-comment"></i><span>4</span></a>


                                                <div class="feature-share">
                                                    <a href="#"><i class="icon-heart"></i></a>
                                                    <a href="#"><i class="icon-facebook"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>            </div>
                            <div id="tabc2">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <h2 class="h2-section-title animated" data-animtype="flipInX" data-animrepeat="0" data-animspeed="1s" data-animdelay="0s">Our Clients </h2>
                                        <h3 class="h3-section-info animated" data-animtype="flipInX" data-animrepeat="0" data-animspeed="1s" data-animdelay="0.2s">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo,
                                            rhoncus ut, imperdiet</h3>
                                        <ul class="section-clients">
                                            <li class="animated" data-animtype="bounceIn" data-animrepeat="0" data-animdelay="0.2s"><img src="media/clients/white_logo1.png" alt="Logo" class="img-responsive client-image" /></li>
                                            <li class="animated" data-animtype="bounceIn" data-animrepeat="0" data-animdelay="0.3s"><img src="media/clients/white_logo2.png" alt="Logo" class="img-responsive client-image" /></li>
                                            <li class="animated" data-animtype="bounceIn" data-animrepeat="0" data-animdelay="0.4s"><img src="media/clients/white_logo3.png" alt="Logo" class="img-responsive client-image" /></li>
                                            <li class="animated" data-animtype="bounceIn" data-animrepeat="0" data-animdelay="0.5s"><img src="media/clients/white_logo4.png" alt="Logo" class="img-responsive client-image" /></li>
                                            <li class="animated" data-animtype="bounceIn" data-animrepeat="0" data-animdelay="0.6s"><img src="media/clients/white_logo5.png" alt="Logo" class="img-responsive client-image" /></li>
                                        </ul>
                                    </div>
                                </div>            </div>
                            <div id="tabc3">
                                <h2 class="h2-section-title animated" data-animtype="flipInY"
                                    data-animrepeat="0"
                                    data-speed="1s"
                                    data-delay="0.2s">
                                    Subscribe To Our NewsLetter
                                </h2>
                                <div class="section-subscribe animated" data-animtype="flipInX"
                                     data-animrepeat="0"
                                     data-speed="1s"
                                     data-delay="0.5s">
                                    <form action="#" method="post">
                                        <input type="text" name="q" class="subscribe-input text-input" placeholder="Email.."/>
                                        <button class="subscribe-button icon-email-plane">

                                        </button>
                                    </form>

                                    <div class="social-icons circle">

                                        <a href="#" target="_blank" class="social-media-icon facebook-icon bounceIn" data-original-title="facebook">facebook</a>

                                        <a href="#" target="_blank" class="social-media-icon twitter-icon bounceIn" data-original-title="twitter">Twitter</a>

                                        <a href="#" target="_blank" class="social-media-icon skype-icon bounceIn" data-original-title="skype">skype</a>

                                        <a href="#" target="_blank" class="social-media-icon evernote-icon bounceIn" data-original-title="evernote">evernote</a>

                                        <a href="#" target="_blank" class="social-media-icon flickr-icon bounceIn" data-original-title="flickr">flickr</a>

                                        <a href="#" target="_blank" class="social-media-icon instagram-icon bounceIn" data-original-title="instagram">instagram</a>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>    </div>
            -->
            <!--
            <div class="section-content no-padding">


                <div class="container">

                    <div class="row">
                        <div class="col-md-12 col-sm-12 animated" data-animtype="fadeInUp"
                             data-animrepeat="0"
                             data-speed="1s"
                             data-delay="0.4s">
                            <h2 class="h2-section-title">Take A Closer Look</h2>

                            <div class="i-section-title">
                                <i class="icon-zoom-in">

                                </i>
                            </div>

                            <h3 class="h3-section-info">
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
                                quasi architecto beatae vitae dicta sunt explicabo.
                            </h3>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12 no-bottom-margin animated" data-animtype="fadeInUp"
                             data-animrepeat="0"
                             data-animspeed="1s"
                             data-animdelay="0.7s">
                            <img src="media/responsive-mockup2.png" alt="MockUp" class="img-responsive" />
                        </div>
                    </div>
                </div>
            </div>
            -->

            <div class="space-sep40"></div>
<!--
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 animated" data-animtype="fadeInUp"
                         data-animrepeat="0"
                         data-speed="1s"
                         data-delay="0.4s">
                        <h2 class="h2-section-title">What We Offer</h2>

                        <div class="i-section-title">
                            <i class="icon-drive">
                            </i>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6 right-text">
                        <ul class="icon-content-list-container">

                            <li class="icon-content-single">

                                <div class="content-box  style5  animated "
                                     data-animtype="fadeIn"
                                     data-animrepeat="0"
                                     data-animspeed="1s"
                                     data-animdelay="0.2s"
                                >
                                    <h4 class="h4-body-title">
                                        <strong>Responsive </strong> Design

                                        <i class="icon-ipad"></i>
                                    </h4>
                                    <div class="content-box-text">
                                        <p>
                                            Cras sem erat, aliquet in egestas cursus, ullamcorper vitae
                                            ligula. Nunc commodo lacinia eros ac condimentum
                                        </p>
                                    </div>
                                </div>
                            </li>

                            <li class="icon-content-single">

                                <div class="content-box  style5  animated "
                                     data-animtype="fadeIn"
                                     data-animrepeat="0"
                                     data-animspeed="1s"
                                     data-animdelay="0.2s"
                                >
                                    <h4 class="h4-body-title">
                                        <strong>Very </strong> Flexible

                                        <i class="icon-settings"></i>
                                    </h4>
                                    <div class="content-box-text">
                                        <p>
                                            Cras sem erat, aliquet in egestas cursus, ullamcorper vitae
                                            ligula. Nunc commodo lacinia eros ac condimentum
                                        </p>
                                    </div>
                                </div>
                            </li>

                            <li class="icon-content-single">

                                <div class="content-box  style5  animated "
                                     data-animtype="fadeIn"
                                     data-animrepeat="0"
                                     data-animspeed="1s"
                                     data-animdelay="0.2s"
                                >
                                    <h4 class="h4-body-title">
                                        <strong>Unlimited </strong> Skins

                                        <i class="icon-painting-roll-streamline"></i>
                                    </h4>
                                    <div class="content-box-text">
                                        <p>
                                            Cras sem erat, aliquet in egestas cursus, ullamcorper vitae
                                            ligula. Nunc commodo lacinia eros ac condimentum
                                        </p>
                                    </div>
                                </div>
                            </li>

                            <li class="icon-content-single">

                                <div class="content-box  style5  animated "
                                     data-animtype="fadeIn"
                                     data-animrepeat="0"
                                     data-animspeed="1s"
                                     data-animdelay="0.2s"
                                >
                                    <h4 class="h4-body-title">
                                        <strong>Well </strong> Documented

                                        <i class="icon-file-settings"></i>
                                    </h4>
                                    <div class="content-box-text">
                                        <p>
                                            Cras sem erat, aliquet in egestas cursus, ullamcorper vitae
                                            ligula. Nunc commodo lacinia eros ac condimentum
                                        </p>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <ul class="icon-content-list-container">

                            <li class="icon-content-single">

                                <div class="content-box  style5  animated "
                                     data-animtype="fadeIn"
                                     data-animrepeat="0"
                                     data-animspeed="1s"
                                     data-animdelay="0.2s"
                                >
                                    <h4 class="h4-body-title">
                                        <strong>Retina </strong> Ready

                                        <i class="icon-eye"></i>
                                    </h4>
                                    <div class="content-box-text">
                                        <p>
                                            Cras sem erat, aliquet in egestas cursus, ullamcorper vitae
                                            ligula. Nunc commodo lacinia eros ac condimentum
                                        </p>
                                    </div>
                                </div>
                            </li>

                            <li class="icon-content-single">

                                <div class="content-box  style5  animated "
                                     data-animtype="fadeIn"
                                     data-animrepeat="0"
                                     data-animspeed="1s"
                                     data-animdelay="0.2s"
                                >
                                    <h4 class="h4-body-title">
                                        <strong>Multi </strong> Purpose

                                        <i class="icon-world"></i>
                                    </h4>
                                    <div class="content-box-text">
                                        <p>
                                            Cras sem erat, aliquet in egestas cursus, ullamcorper vitae
                                            ligula. Nunc commodo lacinia eros ac condimentum
                                        </p>
                                    </div>
                                </div>
                            </li>

                            <li class="icon-content-single">

                                <div class="content-box  style5  animated "
                                     data-animtype="fadeIn"
                                     data-animrepeat="0"
                                     data-animspeed="1s"
                                     data-animdelay="0.2s"
                                >
                                    <h4 class="h4-body-title">
                                        <strong>Animation </strong> Ready

                                        <i class="fa fa-film"></i>
                                    </h4>
                                    <div class="content-box-text">
                                        <p>
                                            Cras sem erat, aliquet in egestas cursus, ullamcorper vitae
                                            ligula. Nunc commodo lacinia eros ac condimentum
                                        </p>
                                    </div>
                                </div>
                            </li>

                            <li class="icon-content-single">

                                <div class="content-box  style5  animated "
                                     data-animtype="fadeIn"
                                     data-animrepeat="0"
                                     data-animspeed="1s"
                                     data-animdelay="0.2s"
                                >
                                    <h4 class="h4-body-title">
                                        <strong>Latest </strong> Technology

                                        <i class="icon-lab"></i>
                                    </h4>
                                    <div class="content-box-text">
                                        <p>
                                            Cras sem erat, aliquet in egestas cursus, ullamcorper vitae
                                            ligula. Nunc commodo lacinia eros ac condimentum
                                        </p>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>

                </div>
            </div>
-->
        </div>



    </div><!--.content-wrapper end -->
    @include('template.Partials.divFooterUser')
</div><!-- wrapper end -->

@endsection