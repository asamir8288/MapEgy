<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>mapegy ::  Product</title>

        <link rel="shortcut icon" type="image/png" href="<?php echo static_url(); ?>layout/images/fav-icon.ico"/>
        <link rel="stylesheet" type="text/css" href="<?php echo static_url(); ?>layout/css/main.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo static_url(); ?>layout/css/banner-slider.css"/>

        <script type="text/javascript" src="<?php echo static_url(); ?>layout/js/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="<?php echo static_url(); ?>layout/js/jssor.core.js"></script>
        <script type="text/javascript" src="<?php echo static_url(); ?>layout/js/jssor.utils.js"></script>
        <script type="text/javascript" src="<?php echo static_url(); ?>layout/js/jssor.slider.js"></script>
        <script type="text/javascript" src="<?php echo static_url(); ?>layout/js/banner-slider.js"></script>
        <script type="text/javascript" language="javascript">
            $(document).ready(function () {
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
        </script>
        
        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-35158292-1', 'auto');
            ga('send', 'pageview');

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
                <li><a class="active" href="<?php echo base_url(); ?>product"><?php echo lang('header_product');?></a></li>
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

        <div class="banner-line" id="banner">
            <div id="slider1_container" style="position: relative; margin: 0 auto;
                 top: 0px; left: 0px; width: 1300px; height: 300px; overflow: hidden;">
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
                     height: 300px; overflow: hidden;">
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

            </div>
        </div>       

        <div id="container">
            <div id="wrapper">
                <p class="inside-horizontal-section first">
                    <?php echo lang('front_product_info'); ?>
                </p> 

                <!------ START Features --------------------------------->

                <a id="Features" class="anchor" id="top"></a>
                <div class="small-dashed-separator"></div>
                <div class="home-title small-width">Features</div>

                <?php echo $content; ?>

                <div style="clear: left;height: 1px;"></div>

                <!------ END Features --------------------------------->

                <div class="small-dashed-separator"></div>

                <div class="product-brief">
                    <?php echo lang('front_product_description'); ?>
                </div>
                <div class="small-dashed-separator"></div>

                <!------ START About Mapegy --------------------------------->
                <a id="Target-Group" class="anchor" id="top"></a>
                <div class="home-title" style="width: 240px;"><?php echo lang('front_product_who_uses_mapegy'); ?></div>
                <div class="who-uses-box">
                    <div class="technology-inovation-icon"></div>
                    <span>
                        <?php echo lang('front_product_who_uses_mapegy_item1'); ?>
                    </span>
                </div>
                <div class="who-uses-box">
                    <div class="researchers-icon"></div>
                    <span>
                        <?php echo lang('front_product_who_uses_mapegy_item2'); ?>
                    </span>
                </div>
                <div class="who-uses-box" style="margin-right: 0px;">
                    <div class="product_investors-icon"></div>
                    <span>
                        <?php echo lang('front_product_who_uses_mapegy_item3'); ?>
                    </span>
                </div>
                <div class="who-uses-box">
                    <div class="ip-icon"></div>
                    <span>
                        <?php echo lang('front_product_who_uses_mapegy_item4'); ?>
                    </span>
                </div>
                <div class="who-uses-box">
                    <div class="government-icon"></div>
                    <span>
                        <?php echo lang('front_product_who_uses_mapegy_item5'); ?>
                    </span>
                </div>
                <div class="who-uses-box" style="margin-right: 0px;">
                    <div class="hr-managers-icon"></div>
                    <span>
                        <?php echo lang('front_product_who_uses_mapegy_item6'); ?>
                    </span>
                </div>

                <div style="clear: left;height: 1px;"></div>

                <!------ END About Mapegy --------------------------------->

                <div class="small-dashed-separator"></div>

                <a id="Benefits" class="anchor" id="top"></a>
                <div class="home-title" style="width: 270px;"><?php echo lang('front_product_this_makes_us_unique'); ?></div>

                <div style="width: 635px;margin: 0 auto;">
                    <div>
                        <div class="offer-item" style="width: 250px;">
                            <?php echo lang('front_product_this_makes_us_unique_1_1'); ?></div> <span class="offer-icon"></span><div class="offer-item"><?php echo lang('front_product_this_makes_us_unique_1_2'); ?>
                        </div>
                    </div>
                    <div>
                        <div class="offer-item" style="width: 250px;">
                            <?php echo lang('front_product_this_makes_us_unique_2_1'); ?></div> <span class="offer-icon"></span><div class="offer-item"><?php echo lang('front_product_this_makes_us_unique_2_2'); ?>
                        </div>
                    </div>
                    <div>
                        <div class="offer-item" style="width: 250px;">
                            <?php echo lang('front_product_this_makes_us_unique_3_1'); ?></div> <span class="offer-icon"></span><div class="offer-item"><?php echo lang('front_product_this_makes_us_unique_3_2'); ?>
                        </div>
                    </div>   
                </div>

                <div class="small-dashed-separator"></div>
                <?php
                $style_width = 'width: 583px;';
                if ($lang_id != 1) {
                    $style_width = 'width: 750px;';
                }
                ?>
                <div class="contact-us-box" style="<?php echo $style_width; ?>">
                    <?php echo lang('front_product_cta'); ?>
                    <a href="<?php echo site_url('contact'); ?>" class="contact-us-link"><?php echo lang('front_product_cta_btn'); ?></a>
                </div>

                <div style="height: 70px;display: block;"></div>
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
