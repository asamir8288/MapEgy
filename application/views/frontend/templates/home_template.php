<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Homepage</title>
        <link rel="stylesheet" type="text/css" href="<?php echo static_url(); ?>layout/css/main.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo static_url(); ?>layout/css/banner-slider.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo static_url(); ?>layout/css/home_scroll_plugin.css"/>

        <script type="text/javascript" src="<?php echo static_url(); ?>layout/js/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="<?php echo static_url(); ?>layout/js/jssor.core.js"></script>
        <script type="text/javascript" src="<?php echo static_url(); ?>layout/js/jssor.utils.js"></script>
        <script type="text/javascript" src="<?php echo static_url(); ?>layout/js/jssor.slider.js"></script>
        <script type="text/javascript" src="<?php echo static_url(); ?>layout/js/banner-slider.js"></script>
        <script type="text/javascript" src="<?php echo static_url(); ?>layout/js/jquery.carouFredSel-6.2.1.js"></script>

        <style type="text/css">
            .fixed{
                position: fixed;
                top: 400px;
            }
            .fixed-footer{
                position: fixed;
                top: 200px;
            }
        </style>
        <script type="text/javascript" language="javascript">
            $(document).ready(function () {
//                if (window.location.hash) {                    
//                    var target = $(this.hash);                    
//                    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
//                    
//                    if (target.length) {
//                        $('html,body').animate({
//                            scrollTop: (target.offset().top) - 30
//                        }, 1000);
//                        return false;
//                    }
//                }
                $('a[href*=#]:not([href=#])').click(function () {
                    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                        var target = $(this.hash);
                        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                        if (target.length) {
                            $('html,body').animate({
                                scrollTop: target.offset().top
                            }, 1000);
                            return false;
                        }
                    }
                });
            });

            $(window).scroll(function () {
                if ($(this).scrollTop() > 135 && $(this).scrollTop() < 2100) {
                    $('.home-section-navigation').removeClass('fixed-footer');
                    $('.home-section-navigation').addClass('fixed');
                } else if ($(this).scrollTop() > 2100) {
                    $('.home-section-navigation').removeClass('fixed');
                    $('.home-section-navigation').addClass('fixed-footer');

                } else {
                    $('.home-section-navigation').removeClass('fixed-footer');
                    $('.home-section-navigation').removeClass('fixed');
                }
            });

            $(function () {
                $('#foo2').carouFredSel({
//                    auto: true,
                    prev: '#prev2',
                    next: '#next2',
                    scroll: 4,
                });
                $('#foo3').carouFredSel({
//                    auto: true,
                    prev: '#prev3',
                    next: '#next3',
                    scroll: 1,
                });
            });
        </script>
    </head>

    <body>
        <div id="header">
            <a href="" class="lang-link">Deutsch</a>

            <a href="<?php echo base_url(); ?>" class="logo"></a>       

            <div id="already-customer">
                Already a customer?
                <a href="http://tsb.mapegy.org" target="_blank" class="blue-link">Login</a>
            </div>

            <div class="top-small-separator">|</div>

            <div id="social-links">
                <a target="_blank" href="https://www.xing.com/companies/mapegy.com"><img src="<?php echo static_url(); ?>layout/images/social1.png" width="15" height="15" /></a>
                <a target="_blank" href="https://www.linkedin.com/company/mapegy"><img src="<?php echo static_url(); ?>layout/images/linkedin.png" width="18" height="17" /></a>
                <a target="_blank" href="https://twitter.com/mapegy"><img src="<?php echo static_url(); ?>layout/images/twitter.png" width="18" height="14" /></a>
                <a target="_blank" href="https://www.facebook.com/mapegy"><img src="<?php echo static_url(); ?>layout/images/facebook.png" width="10" height="17" /></a>                
            </div>

            <ul id="top-menu">
                <li><a href="<?php echo base_url(); ?>product">Product</a></li>
                <li class="menu-separator">|</li>
                <li><a href="<?php echo base_url(); ?>consulting">Consulting</a></li>
                <li class="menu-separator">|</li>
                <li><a href="<?php echo base_url(); ?>about-us">About</a></li>
                <li class="menu-separator">|</li>
                <li><a href="<?php echo base_url(); ?>press">Press</a></li>
                <li class="menu-separator">|</li>
                <li><a href="<?php echo base_url(); ?>career">Career</a></li>
                <li class="menu-separator">|</li>
                <li><a href="<?php echo base_url(); ?>news">News</a></li>
            </ul>
        </div>

        <a href="<?php echo base_url(); ?>contact" id="left-contact-us-link"></a>

        <div style="clear: both;height: 66px;"></div>
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

                    <?php foreach ($activeBanners as $banner) { ?>
                        <div>
                            <img u="image" src="<?php echo static_url(); ?>files/banners/<?php echo $banner['file_name']; ?>" />
                        </div>
                    <?php } ?>

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
                <!--                <div u="thumbnavigator" class="jssort04" style="position: absolute; width: 600px;
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
                                </div>-->

            </div>
        </div>

        <div id="home-benefits-section">
            <div class="benefit"><span>Intuitive</span></div>
            <div class="benefit"><span>Smart</span></div>
            <div class="benefit"><span>Transparent</span></div>
            <div class="benefit" style="margin-right:0px;"><span>Efficient</span></div>

            <div class="home-section-navigation">
                <a href="#banner" class="nav-item"></a>
                <a href="#About-Mapegy" class="nav-item"></a>
                <a href="#News" class="nav-item"></a>
            </div>
        </div>

        <div class="wide-dashed-separator"></div>

        <div id="container">
            <div id="wrapper">

                <!------ START About Mapegy --------------------------------->
                <div id="About-Mapegy" class="home-title">About mapegy</div>
                <p class="home-section">
                    Challenged by the current information overload and dynamic global markets, you need crucial facts and figures on technology push and market pull fast and efficiently.
                </p>

                <!------ END About Mapegy --------------------------------->

                <!------ START Clients --------------------------------->

                <div class="small-dashed-separator"></div>
                <div id="Clients" class="home-title small-width">Clients</div>
                <div class="list_carousel">
                    <ul id="foo2">
                        <?php foreach ($activeClients as $client) { ?>
                            <li><img src="<?php echo static_url(); ?>files/banners/<?php echo $client['file_name']; ?>" style="width:173px" /></li>
                        <?php } ?>                        
                    </ul>
                    <div class="clearfix"></div>
                    <a id="prev2" class="prev" href="#"></a>
                    <a id="next2" class="next" href="#"></a>
                </div>

                <!------ END Clients --------------------------------->

                <!------ START Quotes --------------------------------->

                <div class="small-dashed-separator"></div>
                <div class="home-title small-width">Quotes</div>
                <div class="home-section">
                    <div class="list_carousel1">
                        <ul id="foo3">
                            <?php foreach ($activeQuotes as $quote) { ?>
                                <li>
                                    <div class="quotes">
                                        <img src="<?php echo static_url(); ?>files/quotes/<?php echo $quote['logo']; ?>" width="250" height="53" />
                                        <div class="quote-words">
                                            “<?php echo $quote['description']; ?>”

                                            <span class="author">
                                                <?php echo $quote['author']; ?>
                                                <br />
                                                <?php echo $quote['title']; ?>
                                            </span>
                                        </div>

                                    </div>
                                </li>
                            <?php } ?>
                        </ul>
                        <div class="clearfix"></div>
                        <a id="prev3" class="prev1" href="#"></a>
                        <a id="next3" class="next1" href="#"></a>
                    </div>

                </div>

                <!------ END Quotes --------------------------------->

                <!------ START News --------------------------------->

                <div class="small-dashed-separator"></div>
                <div id="News" class="home-title small-width">News</div>

                <div class="news-section">                    
                    <div class="recent-blog-posts">
                        <div class="news-titles">Recent Blog Posts</div>
                        <?php
                        $i = 1;
                        foreach ($activeNews as $news) {
                            ?>
                            <div class="box">
                                <img src="<?php echo static_url(); ?>files/news/<?php echo $news['image']; ?>" width="110" />

                                <p class="blog-short-brief">	
                                    <a href="<?php echo base_url() . 'news/blog/details/' . $news['id']; ?>" class="blog-article-title"><?php echo substring(nl2br($news['title']), '', '', 7); ?></a>                    
                                    <?php echo substring(nl2br($news['description']), $news['id'], 'news/blog/details', 25); ?>
                                </p>
                            </div>

                            <?php if (count($activeNews) != $i) { ?>
                                <div class="separator-between-boxes"></div>

                                <?php
                            }
                            $i++;
                        }
                        ?>
                    </div>

                    <div class="meet-us">
                        <div class="news-titles">Meet us</div>
                        <?php
                        $i = 1;
                        foreach ($active_events as $event) {
                            ?>
                            <div class="meet-us-box">
                                <img src="<?php echo static_url(); ?>files/events/<?php echo $event['image']; ?>" width="77" />

                                <p class="meet-us-short-brief">	
                                    <a href="" class="meet-us-title"><?php echo date('d M, Y', strtotime($event['date'])); ?></a>                    
                                    <?php echo (strlen($event['description']) > 80) ? substr($event['description'], 0, 40) . '...' : $event['description']; ?>
                                </p>
                            </div>
                            <?php if (count($active_events) != $i) { ?>
                                <div class="separator-between-boxes"></div>
                                <?php
                            }
                            $i++;
                        }
                        ?>

                        <div class="home-follow-mapegy">Follow mapegy</div>

                        <a class="twitter-timeline" href="https://twitter.com/mapegy" data-widget-id="509814902874054656">Tweets by @mapegy</a>
                        <script>!function (d, s, id) {
                                var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
                                if (!d.getElementById(id)) {
                                    js = d.createElement(s);
                                    js.id = id;
                                    js.src = p + "://platform.twitter.com/widgets.js";
                                    fjs.parentNode.insertBefore(js, fjs);
                                }
                            }(document, "script", "twitter-wjs");</script>

                    </div>

                    <div style=" clear: both; height: 10px;"></div>
                </div>

                <!------ END News --------------------------------->


                <div style="clear: both; height: 34px;"></div>

                <div class="contact-us-box">
                    Did we <strong>arouse</strong> your <strong>interest</strong>?
                    <a href="<?php echo site_url('contact'); ?>" class="contact-us-link">Contact us</a>
                </div>

                <div style="height: 100px;display: block;"></div>

            </div>	
        </div>



        <div id="footer">
            <div class="wrapper">
                <ul class="menu">
                    <li><a href="<?php echo base_url(); ?>">Home</a></li>
                    <li class="footer-menu-separator">|</li>
                    <li><a href="<?php echo base_url(); ?>product">Product</a></li>
                    <li class="footer-menu-separator">|</li>
                    <li><a href="<?php echo base_url(); ?>consulting">Consulting</a></li>
                    <li class="footer-menu-separator">|</li>
                    <li><a href="<?php echo base_url(); ?>about-us">About</a></li>
                    <li class="footer-menu-separator">|</li>
                    <li><a href="<?php echo base_url(); ?>press">Press</a></li>
                    <li class="footer-menu-separator">|</li>
                    <li><a href="<?php echo base_url(); ?>career">Career</a></li>
                    <li class="footer-menu-separator">|</li>
                    <li><a href="<?php echo base_url(); ?>news">News</a></li>
                    <li class="footer-menu-separator">|</li>
                    <li><a href="<?php echo base_url(); ?>contact">Contact</a></li>
                    <li class="footer-menu-separator">|</li>
                    <li><a href="<?php echo base_url(); ?>legal-policy">Legal Policy</a></li>                    
                </ul>

                <div style="clear: left;height: 20px;"></div>

                <div class="footer-dashed-link dashed-link-1"></div>
                <div class="footer-dashed-link dashed-link-2"></div>
                <div class="footer-dashed-link dashed-link-3"></div>
                <div class="footer-dashed-link dashed-link-4"></div>
                <div class="footer-dashed-link dashed-link-5"></div>
                <div class="footer-dashed-link dashed-link-6"></div>

                <div style="clear: left;height: 15px;"></div>

                <ul class="sub-menu-box" style="margin-left: 20px;">
                    <li><a href="<?php echo base_url(); ?>product#Target-Group">Target Groups</a></li>
                    <li><a href="<?php echo base_url(); ?>product#Features">Features</a></li>
                    <li><a href="<?php echo base_url(); ?>product#Benefits">Benefits</a></li>
                </ul>
                <ul class="sub-menu-box">
                    <li><a href="">Download Case Studies</a></li>                    
                </ul>
                <ul class="sub-menu-box" style="margin-left: 44px;">
                    <li><a href="<?php echo base_url(); ?>about-us#Our-Experts">Our Experts</a></li>
                    <li><a href="<?php echo base_url(); ?>about-us#Clients">Clients</a></li>
                    <li><a href="<?php echo base_url(); ?>about-us#Partners">Partners</a></li>
                </ul>
                <ul class="sub-menu-box" style="margin-left: 18px;">
                    <li><a href="<?php echo base_url(); ?>press#Company-Profile">Company Profile</a></li>
                    <li><a href="<?php echo base_url(); ?>press#Management-Biographies">Management Biographies</a></li>
                    <li><a href="<?php echo base_url(); ?>press#Press-Clipping">Press Clipping</a></li>
                </ul>
                <ul class="sub-menu-box" style="width: 100px;">
                    <li><a href="<?php echo base_url(); ?>career#Open-Vacancies">Open Vacancies</a></li>
                </ul>
                <ul class="sub-menu-box"  style="width: 100px;margin-left: 15px;">
                    <li><a href="<?php echo base_url(); ?>news#Blog">Blog</a></li>
                    <li><a href="<?php echo base_url(); ?>news#Meet-us">Meet us</a></li>
                    <li><a href="<?php echo base_url(); ?>news#Follow-mapegy">Follow mapegy</a></li>
                </ul>

                <div style="clear: left;height: 20px;"></div>

                <!--<a href="" class="footer-legal-policy-link">Legal Policy</a>-->
            </div>

        </div>
        <div id="copyright"><span>Copyright &copy; mapegy <?php echo date('Y') . ' / ' . (date('Y') + 1) ?>. All Rights Reserved</span></div>
    </body>
</html>
