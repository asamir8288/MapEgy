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
                <li><a class="active" href="<?php echo base_url(); ?>product">Product</a></li>
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

            </div>
        </div>       

        <div id="container">
            <div id="wrapper">

                <!------ START About Mapegy --------------------------------->
                <a id="Target-Group" class="anchor" id="top"></a>
                <div class="who-use_mapegy">Who uses mapegy?</div>
                <div class="who-uses-box">
                    <div class="technology-inovation-icon"></div>
                    <span>
                        Technology, Innovation & Portfolio Managers
                    </span>
                </div>
                <div class="who-uses-box">
                    <div class="researchers-icon"></div>
                    <span>
                        Researchers, Developers & Analysts
                    </span>
                </div>
                <div class="who-uses-box" style="margin-right: 0px;">
                    <div class="product_investors-icon"></div>
                    <span>
                        Investors, M&A Experts
                    </span>
                </div>
                <div class="who-uses-box">
                    <div class="ip-icon"></div>
                    <span>
                        IP Professionals
                    </span>
                </div>
                <div class="who-uses-box">
                    <div class="government-icon"></div>
                    <span>
                        Government & Authorities
                    </span>
                </div>
                <div class="who-uses-box" style="margin-right: 0px;">
                    <div class="hr-managers-icon"></div>
                    <span>
                        HR Managers
                    </span>
                </div>

                <div style="clear: left;height: 1px;"></div>

                <!------ END About Mapegy --------------------------------->

                <!------ START Features --------------------------------->

                <a id="Features" class="anchor" id="top"></a>
                <div class="small-dashed-separator"></div>
                <div class="home-title small-width">Features</div>

                <?php echo $content; ?>

                <div style="clear: left;height: 1px;"></div>

                <!------ END Features --------------------------------->



                <div class="small-dashed-separator"></div>
                
                <div class="product-brief">
                    With mapegy you have access to crucial facts and figures from millions of documents containing global technology information. Mapegy has therefore developed a unique procedure for data exploration that analyzes patents, scientific publications, press, social media and search engines. Deduct and substantiate your strategic decisions with this 360° digital information radar, by evaluating and visualizing the dynamics of technology push and market pull.
                </div>
                <div class="small-dashed-separator"></div>

                <a id="Benefits" class="anchor" id="top"></a>
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
                    <a href="<?php echo site_url('contact');?>" class="contact-us-link">Contact us</a>
                </div>

                <div style="height: 70px;display: block;"></div>
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
                    <li><a href="<?php echo base_url();?>product#Target-Group">Target Groups</a></li>
                    <li><a href="<?php echo base_url();?>product#Features">Features</a></li>
                    <li><a href="<?php echo base_url();?>product#Benefits">Benefits</a></li>
                </ul>
                <ul class="sub-menu-box">
                    <li><a href="">Download Case Studies</a></li>                    
                </ul>
                <ul class="sub-menu-box" style="margin-left: 44px;">
                    <li><a href="<?php echo base_url();?>about-us#Our-Experts">Our Experts</a></li>
                    <li><a href="<?php echo base_url();?>about-us#Clients">Clients</a></li>
                    <li><a href="<?php echo base_url();?>about-us#Partners">Partners</a></li>
                </ul>
                <ul class="sub-menu-box" style="margin-left: 18px;">
                    <li><a href="<?php echo base_url();?>press#Company-Profile">Company Profile</a></li>
                    <li><a href="<?php echo base_url();?>press#Management-Biographies">Management Biographies</a></li>
                    <li><a href="<?php echo base_url();?>press#Press-Clipping">Press Clipping</a></li>
                </ul>
                <ul class="sub-menu-box" style="width: 100px;">
                    <li><a href="<?php echo base_url();?>career#Open-Vacancies">Open Vacancies</a></li>
                </ul>
                <ul class="sub-menu-box"  style="width: 100px;margin-left: 15px;">
                    <li><a href="<?php echo base_url();?>news#Blog">Blog</a></li>
                    <li><a href="<?php echo base_url();?>news#Meet-us">Meet us</a></li>
                    <li><a href="<?php echo base_url();?>news#Follow-mapegy">Follow mapegy</a></li>
                </ul>

                <div style="clear: left;height: 20px;"></div>

                <!--<a href="" class="footer-legal-policy-link">Legal Policy</a>-->
            </div>

        </div>
        <div id="copyright"><span>Copyright &copy; mapegy <?php echo date('Y') . ' / ' . (date('Y') + 1) ?>. All Rights Reserved</span></div>
    </body>
</html>
