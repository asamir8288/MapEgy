<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>mapegy :: <?php echo (isset($page_title)) ? $page_title : ''; ?></title>

        <link rel="shortcut icon" type="image/png" href="<?php echo static_url(); ?>layout/images/fav-icon.ico"/>

        <link rel="stylesheet" type="text/css" href="<?php echo static_url(); ?>layout/css/main.css"/>
        <?php echo $_styles; ?>        

        <script type="text/javascript" src="<?php echo static_url(); ?>layout/js/jquery-1.9.1.min.js"></script>
        <?php echo $_scripts; ?>

        <?php if (isset($inside_banner)) { ?>
            <style type="text/css">
                #inside-banner img {
                    display: block;
                    height: auto!important;
                    width: 100%;
                    background-repeat: no-repeat;
                    background-position: center;
                    margin: 0 auto;
                }
            </style>
        <?php } ?>

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
                <li><a <?php echo (isset($menu) && $menu[0]) ? 'class="active"' : ''; ?> href="<?php echo base_url(); ?>product"><?php echo lang('header_product'); ?></a></li>
                <li class="menu-separator">|</li>
                <li><a <?php echo (isset($menu) && $menu[1]) ? 'class="active"' : ''; ?> href="<?php echo base_url(); ?>service"><?php echo lang('header_services'); ?></a></li>
                <li class="menu-separator">|</li>
                <li><a <?php echo (isset($menu) && $menu[2]) ? 'class="active"' : ''; ?> href="<?php echo base_url(); ?>about-us"><?php echo lang('header_about'); ?></a></li>
                <li class="menu-separator">|</li>
                <li><a <?php echo (isset($menu) && $menu[3]) ? 'class="active"' : ''; ?> href="<?php echo base_url(); ?>press"><?php echo lang('header_press'); ?></a></li>
                <li class="menu-separator">|</li>
                <li><a <?php echo (isset($menu) && $menu[4]) ? 'class="active"' : ''; ?> href="<?php echo base_url(); ?>career"><?php echo lang('header_career'); ?></a></li>
                <li class="menu-separator">|</li>
                <li><a <?php echo (isset($menu) && $menu[5]) ? 'class="active"' : ''; ?> href="<?php echo base_url(); ?>news"><?php echo lang('header_news'); ?></a></li>
                <li class="menu-separator">|</li>
                <li><a <?php echo (isset($menu) && $menu[6]) ? 'class="active"' : ''; ?> href="<?php echo base_url(); ?>contact"><?php echo lang('header_contact'); ?></a></li>
            </ul>
        </div>

        <a href="<?php echo base_url(); ?>contact" id="left-contact-us-link"></a>

        <div style="clear: both;height: 66px;"></div>

        <?php if (isset($inside_banner)) { ?>
            <div id="inside-banner">
                <img src="<?php echo $inside_banner; ?>" style="width: 100%; height: 285px" />
            </div>
        <?php } elseif (isset($map_banner)) { ?>
            <!--<div id="map_canvas"></div>-->

            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2428.619994812634!2d13.449374!3d52.504118!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47a84e508c927b8f%3A0x706f72ab069c5642!2sRotherstra%C3%9Fe+16%2C+10245+Berlin!5e0!3m2!1sde!2sde!4v1410822929009" width="100%" height="285" frameborder="0" style="border:0"></iframe>        <?php } ?>

        <div id="container">
            <div id="wrapper">
                <?php
                if ($this->session->flashdata('message')) {
                    $message = $this->session->flashdata('message');
                    ?>
                    <div class="<?php echo $message['type'] ?>">
                        <?php echo $message['body']; ?>
                    </div>
                    <?php
                }
                ?>
                <?php echo $content; ?>	
            </div>
        </div>



        <div id="footer">
            <div class="wrapper">
                <ul class="menu">
                    <li><a href="<?php echo base_url(); ?>"><?php echo lang('footer_home'); ?></a></li>
                    <li class="footer-menu-separator">|</li>
                    <li><a href="<?php echo base_url(); ?>product"><?php echo lang('footer_product'); ?></a></li>
                    <li class="footer-menu-separator">|</li>
                    <li><a href="<?php echo base_url(); ?>service"><?php echo lang('footer_product_services'); ?></a></li>
                    <li class="footer-menu-separator">|</li>
                    <li><a href="<?php echo base_url(); ?>about-us"><?php echo lang('footer_product_about'); ?></a></li>
                    <li class="footer-menu-separator">|</li>
                    <li><a href="<?php echo base_url(); ?>press"><?php echo lang('footer_product_press'); ?></a></li>
                    <li class="footer-menu-separator">|</li>
                    <li><a href="<?php echo base_url(); ?>career"><?php echo lang('footer_product_career'); ?></a></li>
                    <li class="footer-menu-separator">|</li>
                    <li><a href="<?php echo base_url(); ?>news"><?php echo lang('footer_product_news'); ?></a></li>
                    <li class="footer-menu-separator">|</li>
                    <li><a href="<?php echo base_url(); ?>contact"><?php echo lang('footer_product_contact'); ?></a></li>
                    <li class="footer-menu-separator">|</li>
                    <li><a href="<?php echo base_url(); ?>Imprint"><?php echo lang('footer_product_imprint'); ?></a></li>                    
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
                    <li><a href="<?php echo base_url(); ?>product#Target-Group"><?php echo lang('footer_product_target_groups'); ?></a></li>
                    <li><a href="<?php echo base_url(); ?>product#Features"><?php echo lang('footer_product_features'); ?></a></li>
                    <li><a href="<?php echo base_url(); ?>product#Benefits"><?php echo lang('footer_product_benefits'); ?></a></li>
                </ul>
                <ul class="sub-menu-box">
                    <li><a href="<?php echo base_url(); ?>service#Case-Studies"><?php echo lang('footer_product_services_case_studies'); ?></a></li>                    
                </ul>
                <ul class="sub-menu-box" style="margin-left: 44px;">
                    <li><a href="<?php echo base_url(); ?>about-us#Our-Experts"><?php echo lang('footer_product_about_experts'); ?></a></li>
                    <li><a href="<?php echo base_url(); ?>about-us#Clients"><?php echo lang('footer_product_about_clients'); ?></a></li>
                    <li><a href="<?php echo base_url(); ?>about-us#Partners"><?php echo lang('footer_product_about_partners'); ?></a></li>
                </ul>
                <ul class="sub-menu-box" style="margin-left: 18px;">
                    <li><a href="<?php echo base_url(); ?>press#Company-Profile"><?php echo lang('footer_product_press_comp_profile'); ?></a></li>
                    <li><a href="<?php echo base_url(); ?>press#Management-Biographies"><?php echo lang('footer_product_press_biographies'); ?></a></li>
                    <li><a href="<?php echo base_url(); ?>press#Press-Clipping"><?php echo lang('footer_product_press_clipping'); ?></a></li>
                </ul>
                <ul class="sub-menu-box" style="width: 100px;">
                    <li><a href="<?php echo base_url(); ?>career#Open-Vacancies"><?php echo lang('footer_product_vacancies'); ?></a></li>
                </ul>
                <ul class="sub-menu-box"  style="width: 100px;margin-left: 15px;">
                    <li><a href="<?php echo base_url(); ?>news#Blog"><?php echo lang('footer_product_news_blog'); ?></a></li>
                    <li><a href="<?php echo base_url(); ?>news#Meet-us"><?php echo lang('footer_product_news_meet_us'); ?></a></li>
                    <li><a href="<?php echo base_url(); ?>news#Follow-mapegy"><?php echo lang('footer_product_news_follow_mapegy'); ?></a></li>
                </ul>

                <div style="clear: left;height: 20px;"></div>

                <!--<a href="" class="footer-legal-policy-link">Legal Policy</a>-->
            </div>

        </div>
        <div id="copyright"><span>Copyright &copy; mapegy <?php echo date('Y') . ' / ' . (date('Y') + 1) ?>. All Rights Reserved</span></div>
    </body>
</html>
