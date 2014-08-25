<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Product</title>
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
            <a href="" class="lang-link">Deutsch</a>

            <a href="<?php echo base_url(); ?>" class="logo"></a>       

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
                <li><a href="<?php echo base_url(); ?>consulting">Consulting</a></li>
                <li class="menu-separator">|</li>
                <li><a href="<?php echo base_url(); ?>about-us">About</a></li>
                <li class="menu-separator">|</li>
                <li><a href="<?php echo base_url();?>press">Press</a></li>
                <li class="menu-separator">|</li>
                <li><a href="<?php echo base_url(); ?>career">Career</a></li>
                <li class="menu-separator">|</li>
                <li><a href="<?php echo base_url(); ?>news">News</a></li>
            </ul>
        </div>

        <a href="<?php echo base_url(); ?>contact" id="left-contact-us-link"></a>


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
                            <img u="image" src="<?php echo static_url(); ?>files/banners/<?php echo $banner['file_name'];?>" />
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

                <!------ START About Mapegy --------------------------------->
                <div class="who-use_mapegy">Who uses mapegy?</div>
                <div class="who-uses-box">
                    <div class="folder-icon"></div>
                    <span>
                        Technology, Innovation & Portfolio Managers
                    </span>
                </div>
                <div class="who-uses-box">
                    <div class="folder-icon"></div>
                    <span>
                        Researchers, Developers & Analysts
                    </span>
                </div>
                <div class="who-uses-box" style="margin-right: 0px;">
                    <div class="folder-icon"></div>
                    <span>
                        Investors, M&A Experts
                    </span>
                </div>
                <div class="who-uses-box">
                    <div class="folder-icon"></div>
                    <span>
                        IP Professionals
                    </span>
                </div>
                <div class="who-uses-box">
                    <div class="folder-icon"></div>
                    <span>
                        Government & Authorities
                    </span>
                </div>
                <div class="who-uses-box" style="margin-right: 0px;">
                    <div class="folder-icon"></div>
                    <span>
                        HR Managers
                    </span>
                </div>

                <div style="clear: left;height: 1px;"></div>

                <!------ END About Mapegy --------------------------------->

                <!------ START Features --------------------------------->

                <div class="small-dashed-separator"></div>
                <div class="home-title small-width">Features</div>

                <?php echo $content;?>

                <div style="clear: left;height: 1px;"></div>

                <!------ END Features --------------------------------->



                <div class="small-dashed-separator"></div>

                <div class="product-brief">
                    With mapegy you have access to crucial facts and figures from millions of documents containing global technology information. Mapegy has therefore developed a unique procedure for data exploration that analyzes patents, scientific publications, press, social media and search engines. Deduct and substantiate your strategic decisions with this 360° digital information radar, by evaluating and visualizing the dynamics of technology push and market pull.
                </div>
                <div class="small-dashed-separator"></div>

                <div class="mapegy-offers">mapegy offers you:</div>
                
                <div class="offer-item">
                    360° data perspective: Integration of  various text data (patents, standards, science, press and social media data)
                </div>
                <div class="offer-item">
                    hochentwickelten Algorithmen und Indikatoren zur besseren Bewertung von Technologieführerschaft, Marktabdeckung, Technologierelevanz u.a.
                </div>
                <div class="offer-item">
                    Simplizität und Benutzerfreundlichkeit durch intuitive Informations-visualisierung
                </div>
                
                <div class="small-dashed-separator"></div>

                <div class="contact-us-box">
                    Do you want to <strong>know more</strong>?
                    <a href="" class="contact-us-link">Contact us</a>
                </div>

                <div style="height: 70px;display: block;"></div>
            </div>	
        </div>



        <div id="footer">
            <div class="wrapper">
                <ul class="menu">
                    <li><a href="<?php echo base_url();?>product">Product</a></li>
                    <li class="footer-menu-separator">|</li>
                    <li><a href="">Consulting</a></li>
                    <li class="footer-menu-separator">|</li>
                    <li><a href="<?php echo base_url();?>about-us">About</a></li>
                    <li class="footer-menu-separator">|</li>
                    <li><a href="<?php echo base_url();?>press">Press</a></li>
                    <li class="footer-menu-separator">|</li>
                    <li><a href="<?php echo base_url();?>career">Career</a></li>
                    <li class="footer-menu-separator">|</li>
                    <li><a href="<?php echo base_url();?>news">News</a></li>
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
        <div id="copyright"><span>Copyright &copy; mapegy <?php echo date('Y') . ' / ' . (date('Y') + 1) ?>. All Rights Reserved</span></div>
    </body>
</html>
