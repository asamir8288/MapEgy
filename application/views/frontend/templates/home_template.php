<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>mapegy :: Homepage</title>
        <link rel="shortcut icon" type="image/png" href="<?php echo static_url(); ?>layout/images/fav-icon.ico"/>

        <link rel="stylesheet" type="text/css" href="<?php echo static_url(); ?>layout/css/main.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo static_url(); ?>layout/css/banner-slider.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo static_url(); ?>layout/css/home_scroll_plugin.css"/>

        <script type="text/javascript" src="<?php echo static_url(); ?>layout/js/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="<?php echo static_url(); ?>layout/js/jssor.core.js"></script>
        <script type="text/javascript" src="<?php echo static_url(); ?>layout/js/jssor.utils.js"></script>
        <script type="text/javascript" src="<?php echo static_url(); ?>layout/js/jssor.slider.js"></script>
        <script type="text/javascript" src="<?php echo static_url(); ?>layout/js/banner-slider_home.js"></script>
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
            #foo3{
                margin-left: 12px;
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
                if ($(this).scrollTop() > 135 && $(this).scrollTop() < 2000) {
                    $('.home-section-navigation').removeClass('fixed-footer');
                    $('.home-section-navigation').addClass('fixed');
                } else if ($(this).scrollTop() > 2000) {
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
                    scroll: {duration: 500},
                });
                $('#foo3').carouFredSel({
//                    auto: true,
                    prev: '#prev3',
                    next: '#next3',
                    scroll: {duration: 800},
                });
            });
        </script>
    </head>

    <body>
        <div id="header">
            <a href="<?php echo base_url(); ?>" class="logo"></a>       

            <div id="social-links">
                <a class="xing-header" target="_blank" href="https://www.xing.com/companies/mapegy.com"></a>
                <a class="linkedin-header" target="_blank" href="https://www.linkedin.com/company/mapegy"></a>
                <a class="twitter-header" target="_blank" href="https://twitter.com/mapegy"></a>
                <a class="facebook-header" target="_blank" href="https://www.facebook.com/mapegy"></a> 
                <div class="top-small-separator">|</div>
                <?php
                $lang_code = $this->session->userdata('lang_code');
                $lang_class = 'de-lang-header';
                if ($lang_code != 'en-us') {
                    $lang_class = 'en-lang-header';
                }
                ?>
                <a class="<?php echo $lang_class;?>" href="<?php echo base_url('switch-language'); ?>"></a>                  
            </div>

            <ul id="top-menu">
                <li><a class="" href="<?php echo base_url(); ?>product"><?php echo lang('header_product');?></a></li>
                <li class="menu-separator">|</li>
                <li><a href="<?php echo base_url(); ?>service"><?php echo lang('header_services');?></a></li>
                <li class="menu-separator">|</li>
                <li><a href="<?php echo base_url(); ?>about-us"><?php echo lang('header_about');?></a></li>
                <li class="menu-separator">|</li>
                <li><a href="<?php echo base_url(); ?>press"><?php echo lang('header_press');?></a></li>
                <li class="menu-separator">|</li>
                <li><a href="<?php echo base_url(); ?>career"><?php echo lang('header_career');?></a></li>
                <li class="menu-separator">|</li>
                <li><a href="<?php echo base_url(); ?>news"><?php echo lang('header_news');?></a></li>
                <li class="menu-separator">|</li>
                <li><a href="<?php echo base_url(); ?>contact"><?php echo lang('header_contact');?></a></li>
            </ul>
        </div>

        <a href="<?php echo base_url(); ?>contact" id="left-contact-us-link"></a>

        <div style="clear: both;height: 66px;"></div>
        <a id="banner" class="anchor" id="top"></a>
        <div class="banner-line" id="">
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

        <div id="home-benefits-section" style="margin-bottom: 10px;">
            <div class="benefit"><span><?php echo lang('home_Bullet_point_1');?></span></div>
            <div class="benefit"><span><?php echo lang('home_Bullet_point_2');?></span></div>
            <div class="benefit" style="margin-right: 0px;"><span><?php echo lang('home_Bullet_point_3');?></span></div>

            <div class="home-section-navigation">
                <a href="#banner" class="nav-item"></a>
                <a href="#About-Mapegy" class="nav-item"></a>
                <a href="#News" class="nav-item"></a>
            </div>
        </div>

        

        <div id="container">
            <div id="wrapper">
<div class="small-dashed-separator"></div>
                <!------ START About Mapegy --------------------------------->
                <a id="About-Mapegy" class="anchor" id="top"></a>
                <div id="" class="home-title"><?php echo lang('home_headline_about_us');?></div>
                <p class="home-section">
                   <?php echo lang('home_about_mapegy');?>
                </p>

                <!------ END About Mapegy --------------------------------->

                <!------ START Clients --------------------------------->

                <div class="small-dashed-separator"></div>
                <div id="Clients" class="home-title small-width"><?php echo lang('home_clients');?></div>
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

                <div class="small-dashed-separator" style="margin-top: 40px;"></div>
                <div class="home-title small-width"><?php echo lang('home_quotes');?></div>
                <div class="home-section">
                    <div class="list_carousel1" style="margin-left: 5px;">
                        <ul id="foo3">
                            <?php foreach ($activeQuotes as $quote) { ?>
                                <li>
                                    <div class="quotes">
                                        <img src="<?php echo static_url(); ?>files/quotes/<?php echo $quote['logo']; ?>" width="250" height="53" />
                                        <div class="quote-words">
                                            <?php echo $quote['description']; ?>

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
                <a id="News" class="anchor" id="top"></a>
                <a href="<?php echo base_url(); ?>news" id="" class="home-title small-width">News</a>

                <div class="news-section">                    
                    <div class="recent-blog-posts">
                        <a href="<?php echo base_url(); ?>news/blogs" class="news-titles">Recent Blog Posts</a>
                        <?php
                        $i = 1;
                        foreach ($activeNews as $news) {
                            ?>
                            <div class="box">
                                <a href="<?php echo base_url() . 'news/blog/details/' . $news['alias_url']; ?>"><img src="<?php echo static_url(); ?>files/news/<?php echo $news['image']; ?>" width="110" /></a>

                                <d class="blog-short-brief">	
                                    <a href="<?php echo base_url() . 'news/blog/details/' . $news['alias_url']; ?>" class="blog-article-title"><?php echo substring(nl2br($news['title']), '', '', 7); ?></a>                    
                                    <?php echo substring(nl2br($news['teaser']), $news['alias_url'], 'news/blog/details', 25); ?>
                                </d>
                            </div>

                            <?php if (count($activeNews) != $i) { ?>
                                <div class="separator-between-boxes"></div>

                                <?php
                            }
                            $i++;
                        }
                        ?>
                        <?php if ($newsCount > 5) { ?>
                            <div style="clear: left;height: 1px;"></div>
                            <a class="older-posts-link" href="<?php echo site_url('news/blogs'); ?>">Show More</a>
                        <?php } ?>
                    </div>

                    <div class="meet-us">
                        <a href="<?php echo base_url(); ?>events" class="news-titles">Meet us</a>
                        <?php
                        $i = 1;
                        foreach ($active_events as $event) {
                            ?>
                            <div class="meet-us-box">
                                <a href="<?php echo base_url(); ?>events"><img src="<?php echo static_url(); ?>files/events/<?php echo $event['image']; ?>" style="width: 77px;height: 50px;" /></a>

                                <p class="meet-us-short-brief">	
                                    <a href="<?php echo base_url(); ?>events" class="meet-us-title"><?php echo date('d M, Y', strtotime($event['date'])); ?></a>                    
                                    <span style="font-weight: bold;"><?php echo (strlen($event['title']) > 60) ? substr($event['title'], 0, 60) . '...' : $event['title']; ?></span>
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

                <div class="small-dashed-separator"></div>


                <div class="contact-us-box">
                    <?php echo lang('about_cta');?>
                    <a href="<?php echo site_url('contact'); ?>" class="contact-us-link"><?php echo lang('about_cta_btn');?></a>
                </div>

                <div style="height: 100px;display: block;"></div>

            </div>	
        </div>



        <div id="footer">
            <div class="wrapper">
                <ul class="menu">
                    <li><a href="<?php echo base_url(); ?>"><?php echo lang('footer_home');?></a></li>
                    <li class="footer-menu-separator">|</li>
                    <li><a href="<?php echo base_url(); ?>product"><?php echo lang('footer_product');?></a></li>
                    <li class="footer-menu-separator">|</li>
                    <li><a href="<?php echo base_url(); ?>service"><?php echo lang('footer_product_services');?></a></li>
                    <li class="footer-menu-separator">|</li>
                    <li><a href="<?php echo base_url(); ?>about-us"><?php echo lang('footer_product_about');?></a></li>
                    <li class="footer-menu-separator">|</li>
                    <li><a href="<?php echo base_url(); ?>press"><?php echo lang('footer_product_press');?></a></li>
                    <li class="footer-menu-separator">|</li>
                    <li><a href="<?php echo base_url(); ?>career"><?php echo lang('footer_product_career');?></a></li>
                    <li class="footer-menu-separator">|</li>
                    <li><a href="<?php echo base_url(); ?>news"><?php echo lang('footer_product_news');?></a></li>
                    <li class="footer-menu-separator">|</li>
                    <li><a href="<?php echo base_url(); ?>contact"><?php echo lang('footer_product_contact');?></a></li>
                    <li class="footer-menu-separator">|</li>
                    <li><a href="<?php echo base_url(); ?>Imprint"><?php echo lang('footer_product_imprint');?></a></li>                    
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
                    <li><a href="<?php echo base_url(); ?>product#Target-Group"><?php echo lang('footer_product_target_groups');?></a></li>
                    <li><a href="<?php echo base_url(); ?>product#Features"><?php echo lang('footer_product_features');?></a></li>
                    <li><a href="<?php echo base_url(); ?>product#Benefits"><?php echo lang('footer_product_benefits');?></a></li>
                </ul>
                <ul class="sub-menu-box">
                    <li><a href="<?php echo base_url(); ?>service#Case-Studies"><?php echo lang('footer_product_services_case_studies');?></a></li>                    
                </ul>
                <ul class="sub-menu-box" style="margin-left: 44px;">
                    <li><a href="<?php echo base_url(); ?>about-us#Our-Experts"><?php echo lang('footer_product_about_experts');?></a></li>
                    <li><a href="<?php echo base_url(); ?>about-us#Clients"><?php echo lang('footer_product_about_clients');?></a></li>
                    <li><a href="<?php echo base_url(); ?>about-us#Partners"><?php echo lang('footer_product_about_partners');?></a></li>
                </ul>
                <ul class="sub-menu-box" style="margin-left: 18px;">
                    <li><a href="<?php echo base_url(); ?>press#Company-Profile"><?php echo lang('footer_product_press_comp_profile');?></a></li>
                    <li><a href="<?php echo base_url(); ?>press#Management-Biographies"><?php echo lang('footer_product_press_biographies');?></a></li>
                    <li><a href="<?php echo base_url(); ?>press#Press-Clipping"><?php echo lang('footer_product_press_clipping');?></a></li>
                </ul>
                <ul class="sub-menu-box" style="width: 100px;">
                    <li><a href="<?php echo base_url(); ?>career#Open-Vacancies"><?php echo lang('footer_product_vacancies');?></a></li>
                </ul>
                <ul class="sub-menu-box"  style="width: 100px;margin-left: 15px;">
                    <li><a href="<?php echo base_url(); ?>news#Blog"><?php echo lang('footer_product_news_blog');?></a></li>
                    <li><a href="<?php echo base_url(); ?>news#Meet-us"><?php echo lang('footer_product_news_meet_us');?></a></li>
                    <li><a href="<?php echo base_url(); ?>news#Follow-mapegy"><?php echo lang('footer_product_news_follow_mapegy');?></a></li>
                </ul>

                <div style="clear: left;height: 20px;"></div>

                <!--<a href="" class="footer-legal-policy-link">Legal Policy</a>-->
            </div>

        </div>
        <div id="copyright"><span>Copyright &copy; mapegy <?php echo date('Y') . ' / ' . (date('Y') + 1) ?>. All Rights Reserved</span></div>
    </body>
</html>
