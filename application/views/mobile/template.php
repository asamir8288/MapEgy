<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <title>
            <?php echo (isset($page_title)) ? $page_title : ''; ?>
        </title>
        <link rel="stylesheet" type="text/css" href="<?php echo static_url(); ?>layout/css/mobile.css"/>
        <?php echo $_styles; ?>

        <script type="text/javascript" src="<?php echo static_url(); ?>layout/js/jquery-1.9.1.min.js"></script>
        <?php echo $_scripts; ?>
        <script type="text/javascript">
            $(document).ready(function () {
                $(".top-menu").click(function () {
                    toggleMenu();
                });

                function toggleMenu() {
                    var menuItems = $("#menu");
                    if (menuItems.css("display") == "none") {
                        menuItems.css("display","block");
                    } else {
                        menuItems.css("display","none");
                    }
                }
            });



        </script>
    </head>

    <body>
        <div id="header">
            <?php if (isset($page_title)) { ?>
                <a href="<?php echo base_url(); ?>mobile" class="logo"></a>
            <?php } else { ?>
                <a href="<?php echo base_url(); ?>mobile" style="margin-left: 100px;" class="logo"></a>
            <?php } ?>
            <span class="arrow"></span>
            <span class="page_title"><?php echo (isset($page_title)) ? $page_title : ''; ?></span>

            <span class="top-menu">

                <ul id="menu" style="display: none;" class="noJS">
                    <li><a href="<?php echo site_url('mobile'); ?>"><?php echo lang('home');?></a></li>
                    <li><a href="<?php echo site_url('mobile/products'); ?>"><?php echo lang('product');?></a></li>
                    <li><a href="<?php echo site_url('mobile/services'); ?>"><?php echo lang('services');?></a></li>
                    <li><a href="<?php echo site_url('mobile/about'); ?>"><?php echo lang('about');?></a></li>
                    <li><a href="<?php echo site_url('mobile/press'); ?>"><?php echo lang('press');?></a></li>
                    <li><a href="<?php echo site_url('mobile/career'); ?>"><?php echo lang('career');?></a></li>
                    <li><a href="<?php echo site_url('mobile/news'); ?>"><?php echo lang('news');?></a></li>
                    <li><a href="<?php echo site_url('mobile/privacy_policy'); ?>">Privacy Policy</a></li>
                    <li><a href="<?php echo site_url('mobile/contact'); ?>"><?php echo lang('contact');?></a></li>

                    <li class="lang">
                        Language: <a href="<?php echo base_url() . 'mobile/switch_lang?lang=en-us'?>" class="en">En</a><a href="<?php echo base_url() . 'mobile/switch_lang?lang=de-ch'?>" class="de">De</a>
                    </li>
                </ul>
            </span>
        </div>

        <div id="content">
            <?php echo $content; ?>
        </div>

        <div id="footer">
            <a href="<?php echo site_url('mobile'); ?>"><?php echo lang('home');?></a>
            <span>|</span>
            <a href="<?php echo site_url('mobile/products'); ?>"><?php echo lang('product');?></a>
            <span>|</span>
            <a href="<?php echo site_url('mobile/services'); ?>"><?php echo lang('services');?></a>
            <span>|</span>
            <a href="<?php echo site_url('mobile/about'); ?>"><?php echo lang('about');?></a>
            <span>|</span>
            <a href="<?php echo site_url('mobile/press'); ?>"><?php echo lang('press');?></a>
            <br />
            <a href="<?php echo site_url('mobile/career'); ?>"><?php echo lang('career');?></a>
            <span>|</span>
            <a href="<?php echo site_url('mobile/news'); ?>"><?php echo lang('news');?></a>
            <span>|</span>
            <a href="<?php echo site_url('mobile/privacy_policy'); ?>">Privacy Policy</a>
            <span>|</span>
            <a href="<?php echo site_url('mobile/contact'); ?>"><?php echo lang('contact');?></a>
        </div>
    </body>
</html>