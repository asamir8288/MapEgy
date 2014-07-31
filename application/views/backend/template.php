<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>MapEgy | <?php echo (isset($page_title)) ? $page_title : ''; ?></title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>layout/css/admin.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>layout/css/form.css"/>
        <?php echo $_styles; ?>

        <script src="<?php echo base_url(); ?>layout/js/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>layout/js/jquery.validate.min.en.js" type="text/javascript"></script>
        <?php echo $_scripts; ?>        
    </head>

    <body>
        <div id="header">
            <div class="header-wrapper">

                <a href="<?php echo site_url('admin/dashboard'); ?>" class="logo"></a>

                <ul class="menu">
                    <li><a href="<?php echo site_url(''); ?>">Product</a></li>
                    <li>|</li>
                    <li><a href="<?php echo site_url(''); ?>">Consulting</a></li>
                    <li>|</li>
                    <li><a href="<?php echo site_url('admin/our_experts'); ?>">About</a></li>
                    <li>|</li>
                    <li><a href="<?php echo site_url(''); ?>">Press</a></li>
                    <li>|</li>
                    <li><a href="<?php echo site_url('admin/job'); ?>">Career</a></li>
                    <li>|</li>
                    <li><a href="<?php echo site_url('admin/manage_news'); ?>">News</a></li>


                    <?php
                    $loggedin = $this->session->userdata('is_login');

                    if ($loggedin) {
                        ?>
                        <li>|</li>
                        <li><a href="<?php echo site_url('admin/login/logout'); ?>"><?php echo lang('logout'); ?></a></li>
                    <?php } ?>
                </ul>
            </div>
        </div>

        <!-- Start Wrapper  -->
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

            <?php
            if (isset($page_title)) {
                echo '<div class="page_title">' . $page_title . '</div>';
            }
            ?>
            <?php echo $content; ?>
        </div>
        <!-- End Wrapper  -->

        <div class="clear" style="height: 40px;"></div>

        <div id="footer">
            <div class="footer-wrapper">

            </div>
        </div>

    </body>
</html>
