<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Homepage</title>
        <link rel="stylesheet" type="text/css" href="<?php echo static_url(); ?>layout/css/main.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo static_url(); ?>layout/css/banner-slider.css"/>

        <script type="text/javascript" src="<?php echo static_url(); ?>layout/js/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="<?php echo static_url(); ?>layout/js/jssor.core.js"></script>
        <script type="text/javascript" src="<?php echo static_url(); ?>layout/js/jssor.utils.js"></script>
        <script type="text/javascript" src="<?php echo static_url(); ?>layout/js/jssor.slider.js"></script>
        <script type="text/javascript" src="<?php echo static_url(); ?>layout/js/banner-slider.js"></script>
    </head>

    <body>
        <div id="header">
            <a href="" class="lang-link">Deutch</a>

            <a href="<?php echo base_url();?>" class="logo"></a>       

            <div id="already-customer">
                Already a customer?
                <a href="" class="blue-link">Login</a>
            </div>

            <div class="top-small-separator">|</div>

            <div id="social-links">
                <a href=""><img src="<?php echo static_url(); ?>layout/images/social1.png" width="15" height="15" /></a>
                <a href=""><img src="<?php echo static_url(); ?>layout/images/linkedin.png" width="18" height="17" /></a>
                <a href=""><img src="<?php echo static_url(); ?>layout/images/twitter.png" width="18" height="14" /></a>
                <a href=""><img src="<?php echo static_url(); ?>layout/images/facebook.png" width="10" height="17" /></a>                
            </div>

            <ul id="top-menu">
                <li><a href="<?php echo base_url();?>product">Product</a></li>
                <li class="menu-separator">|</li>
                <li><a href="">Consulting</a></li>
                <li class="menu-separator">|</li>
                <li><a href="<?php echo base_url();?>about-us">About</a></li>
                <li class="menu-separator">|</li>
                <li><a href="">Press</a></li>
                <li class="menu-separator">|</li>
                <li><a href="<?php echo base_url();?>career">Career</a></li>
                <li class="menu-separator">|</li>
                <li><a href="<?php echo base_url();?>news">News</a></li>
            </ul>
        </div>

        <a href="" id="left-contact-us-link"></a>


        <div id="banner">
            <div id="slider1_container" style="position: relative; margin: 0 auto;
             top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden;">
            <!-- Loading Screen -->
            <div u="loading" style="position: absolute; top: 0px; left: 0px;">
                <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block;
                     top: 0px; left: 0px; width: 100%; height: 100%;">
                </div>
                <div style="position: absolute; display: block; background: url(<?php echo static_url(); ?>layout/images/loading.gif) no-repeat center center;
                     top: 0px; left: 0px; width: 100%; height: 100%;">
                </div>
            </div>
            <!-- Slides Container -->
            <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1300px;
                 height: 500px; overflow: hidden;">
                <div>
                    <img u="image" src="<?php echo static_url(); ?>layout/images/banner.png" />
                    <img u="thumb" src="<?php echo static_url(); ?>layout/images/s2t.jpg" />
                </div>
                <div>
                    <img u="image" src="<?php echo static_url(); ?>layout/images/purple.jpg" />
                    <img u="thumb" src="<?php echo static_url(); ?>layout/images/s3t.jpg" />
                </div>
                <div>
                    <img u="image" src="<?php echo static_url(); ?>layout/images/blue.jpg" />
                    <img u="thumb" src="<?php echo static_url(); ?>layout/images/s4t.jpg" />
                </div>           
            </div>

            <!-- bullet navigator container -->
            <div u="navigator" class="jssorb21" style="position: absolute; bottom: 26px; left: 6px;">
                <!-- bullet navigator item prototype -->
                <div u="prototype" style="POSITION: absolute; WIDTH: 19px; HEIGHT: 19px; text-align:center; line-height:19px; color:White; font-size:12px;"></div>
            </div>

            <!-- Arrow Left -->
            <span u="arrowleft" class="jssora21l" style="width: 55px; height: 55px; top: 123px; left: 8px;"></span>
            <!-- Arrow Right -->
            <span u="arrowright" class="jssora21r" style="width: 55px; height: 55px; top: 123px; right: 8px"></span>
            <!-- ThumbnailNavigator Skin Begin -->
            <div u="thumbnavigator" class="jssort04" style="position: absolute; width: 600px;
                 height: 60px; right: 0px; bottom: 0px;">
                <div u="slides" style="bottom: 25px; right: 30px;">
                    <div u="prototype" class="p" style="position: absolute; width: 62px; height: 32px; top: 0; left: 0;">
                        <div class="w">
                            <thumbnailtemplate style="width: 100%; height: 100%; border: none; position: absolute; top: 0; left: 0;"></thumbnailtemplate>
                        </div>
                        <div class="c" style="position: absolute; background-color: #000; top: 0; left: 0">
                        </div>
                    </div>
                </div>
            </div>

        </div>
        </div>

        <div id="home-benefits-section">
            <div class="benefit"><span>Intuitive</span></div>
            <div class="benefit"><span>Smart</span></div>
            <div class="benefit"><span>Transparent</span></div>
            <div class="benefit" style="margin-right:0px;"><span>Efficient</span></div>

            <div class="home-section-navigation">
                <a href="" class="nav-item"></a>
                <a href="" class="nav-item"></a>
                <a href="" class="nav-item"></a>
            </div>
        </div>

        <div class="wide-dashed-separator"></div>

        <div id="container">
            <div id="wrapper">

                <!------ START About Mapegy --------------------------------->
                <div class="home-title">About Mapegy</div>
                <p class="home-section">
                    Challenged by the current information overload and dynamic global markets, you need crucial facts and figures on technology push and market pull fast and efficiently.
                </p>

                <!------ END About Mapegy --------------------------------->

                <!------ START Clients --------------------------------->

                <div class="small-dashed-separator"></div>
                <div class="home-title small-width">Clients</div>
                <p class="home-section">
                    <img src="<?php echo static_url(); ?>layout/images/home-client-placeholder.png" width="872" height="129" />
                </p>

                <!------ END Clients --------------------------------->

                <!------ START Quotes --------------------------------->

                <div class="small-dashed-separator"></div>
                <div class="home-title small-width">Quotes</div>
                <div class="home-section">
                    <div class="left-arrow"></div>
                    <div class="quotes">
                        <img src="<?php echo static_url(); ?>layout/images/frankfurter_allgemeine_logo.png" width="250" height="53" />
                        <div class="quote-words">
                            “The pilot to certainty - it maps the landscape of technology companies like no other.”

                            <span class="author">
                                Jens Twiehaus
                                <br />
                                Frankfurter Allgemeine Zeitung    
                            </span>
                        </div>

                    </div>

                    <div class="right-arrow"></div>
                </div>

                <!------ END Quotes --------------------------------->

                <!------ START News --------------------------------->

                <div class="small-dashed-separator"></div>
                <div class="home-title small-width">News</div>

                <div class="news-section">
                    <div class="recent-blog-posts">
                        <div class="box">
                            <img src="<?php echo static_url(); ?>layout/images/recent-blog-post-img.png" width="110" height="103" />

                            <p class="blog-short-brief">	
                                <a href="" class="blog-article-title">The pilot to certainty - it maps the landscape...</a>                    
                                pilot to certainty - it maps the landscape of technology companies like no other pilot to certainty - it maps the landscape of technology companies like no other.
                            </p>
                        </div>

                        <div class="separator-between-boxes"></div>

                        <div class="box">
                            <img src="<?php echo static_url(); ?>layout/images/recent-blog-post-img.png" width="110" height="103" />

                            <p class="blog-short-brief">	
                                <a href="" class="blog-article-title">The pilot to certainty - it maps the landscape...</a>                    
                                pilot to certainty - it maps the landscape of technology companies like no other pilot to certainty - it maps the landscape of technology companies like no other.
                            </p>
                        </div>

                        <div class="separator-between-boxes"></div>

                        <div class="box">
                            <img src="<?php echo static_url(); ?>layout/images/recent-blog-post-img.png" width="110" height="103" />

                            <p class="blog-short-brief">	
                                <a href="" class="blog-article-title">The pilot to certainty - it maps the landscape...</a>                    
                                pilot to certainty - it maps the landscape of technology companies like no other pilot to certainty - it maps the landscape of technology companies like no other.
                            </p>
                        </div>

                        <div class="separator-between-boxes"></div>

                        <div class="box">
                            <img src="<?php echo static_url(); ?>layout/images/recent-blog-post-img.png" width="110" height="103" />

                            <p class="blog-short-brief">	
                                <a href="" class="blog-article-title">The pilot to certainty - it maps the landscape...</a>                    
                                pilot to certainty - it maps the landscape of technology companies like no other pilot to certainty - it maps the landscape of technology companies like no other.
                            </p>
                        </div>


                    </div>
                    <div class="meet-us">
                        <div class="meet-us-box">
                            <img src="<?php echo static_url(); ?>layout/images/logo1.png" width="77" height="65" />

                            <p class="meet-us-short-brief">	
                                <a href="" class="meet-us-title">5 July, 2014</a>                    
                                pilot to certainty - it maps the landscape of technology companies like no other...
                            </p>
                        </div>

                        <div class="separator-between-boxes"></div>

                        <div class="meet-us-box">
                            <img src="<?php echo static_url(); ?>layout/images/berlin-logo.png" width="82" height="62" />

                            <p class="meet-us-short-brief">	
                                <a href="" class="meet-us-title">5 July, 2014</a>                    
                                pilot to certainty - it maps the landscape of technology companies like no other...
                            </p>
                        </div>

                        <div class="separator-between-boxes"></div>

                        <div class="meet-us-box">
                            <img src="<?php echo static_url(); ?>layout/images/volix.png" width="63" height="62" />

                            <p class="meet-us-short-brief">	
                                <a href="" class="meet-us-title">5 July, 2014</a>                    
                                pilot to certainty - it maps the landscape of technology companies like no other...
                            </p>
                        </div>

                    </div>

                    <div style=" clear: both; height: 10px;"></div>
                </div>

                <!------ END News --------------------------------->

                <div class="small-dashed-separator"></div>

                <div class="contact-us-box">
                    Did we <strong>arouse</strong> your <strong>interest</strong>?
                    <a href="" class="contact-us-link">Contact us</a>
                </div>

                <div style="height: 100px;display: block;"></div>

            </div>	
        </div>



        <div id="footer">
            <div class="wrapper">
                <ul class="menu">
                    <li><a href="">Product</a></li>
                    <li class="footer-menu-separator">|</li>
                    <li><a href="">Consulting</a></li>
                    <li class="footer-menu-separator">|</li>
                    <li><a href="">About</a></li>
                    <li class="footer-menu-separator">|</li>
                    <li><a href="">Press</a></li>
                    <li class="footer-menu-separator">|</li>
                    <li><a href="">Career</a></li>
                    <li class="footer-menu-separator">|</li>
                    <li><a href="">News</a></li>
                </ul>

                <div style="clear: left;height: 20px;"></div>

                <div class="footer-dashed-link dashed-link-1"></div>
                <div class="footer-dashed-link dashed-link-2"></div>
                <div class="footer-dashed-link dashed-link-3"></div>
                <div class="footer-dashed-link dashed-link-4"></div>
                <div class="footer-dashed-link dashed-link-5"></div>
                <div class="footer-dashed-link dashed-link-6"></div>

                <div style="clear: left;height: 15px;"></div>

                <ul class="sub-menu-box" style="margin-left: 48px;">
                    <li><a href="">Packshot / Visuals</a></li>
                    <li><a href="">Oneliner</a></li>
                    <li><a href="">3 Benefits</a></li>
                    <li><a href="">Clients</a></li>
                    <li><a href="">Quotes</a></li>
                    <li><a href="">CTA - Contact</a></li>
                </ul>
                <ul class="sub-menu-box">
                    <li><a href="">Target Groups</a></li>
                    <li><a href="">Products</a></li>
                    <li><a href="">Features & Benefits</a></li>
                    <li><a href="">Use-Cases</a></li>
                    <li><a href="">CTA - Contact</a></li>
                </ul>
                <ul class="sub-menu-box" style="margin-left: 44px;">
                    <li><a href="">Consulting</a></li>
                    <li><a href="">CTA - Contact</a></li>
                </ul>
                <ul class="sub-menu-box" style="margin-left: 18px;">
                    <li><a href="">Company Pic</a></li>
                    <li><a href="">Approach</a></li>
                    <li><a href="">Our Experts</a></li>
                    <li><a href="">Biographies</a></li>
                </ul>
                <ul class="sub-menu-box" style="width: 100px;">
                    <li><a href="">Offerings</a></li>
                </ul>
                <ul class="sub-menu-box"  style="width: 100px;">
                    <li><a href="">Blog</a></li>
                </ul>

                <div style="clear: left;height: 20px;"></div>

                <a href="" class="footer-legal-policy-link">Legal Policy</a>
            </div>

        </div>
        <div id="copyright"><span>Copyright &copy; mapegy <?php echo date('Y') . ' / ' . (date('Y') + 1)?>. All Rights Reserved</span></div>
    </body>
</html>
