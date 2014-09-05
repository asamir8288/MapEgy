<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>MapEgy :: <?php echo (isset($page_title)) ? $page_title : ''; ?></title>
        <link rel="stylesheet" type="text/css" href="<?php echo static_url(); ?>layout/css/main.css"/>
        <?php echo $_styles;?>        

        <script type="text/javascript" src="<?php echo static_url(); ?>layout/js/jquery-1.9.1.min.js"></script>
        <?php echo $_scripts;?>

        <?php if (isset($inside_banner)) { ?>
            <style type="text/css">
                #inside-banner {
                    background-image: URL(<?php echo $inside_banner; ?>);
                    display: block;
                    height: 285px;
                }
            </style>
        <?php } ?>
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

        <?php if (isset($inside_banner)) { ?>
            <div id="inside-banner">

            </div>


            <div class="wide-dashed-separator"></div>
        <?php } ?>
            
        <div id="container">
            <div id="wrapper">
                <?php echo $content; ?>	
            </div>
        </div>



        <div id="footer">
            <div class="wrapper">
                <ul class="menu">
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
