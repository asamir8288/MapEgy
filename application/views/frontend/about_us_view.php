<style type="text/css">
    #foo3{
        margin-left: 12px;
    }
</style>

<!------ START About Mapegy --------------------------------->

<p class="inside-horizontal-section first">
    <?php echo lang('about_intro_1'); ?>
    <br /><br />
    <?php echo lang('about_intro_2'); ?>

</p>                
<!------ END About Mapegy --------------------------------->

<!------ START Our Experts --------------------------------->

<div class="small-dashed-separator"></div>
<a id="Our-Experts" class="anchor" id="top"></a>
<div class="home-title small-width consulting-title-decoration" style="width: 25%!important;"><?php echo lang('about_our_experts'); ?></div>
<div class="inside-horizontal-section">

    <?php foreach ($experts as $expert) { ?>
        <div class="expert">
            <div style="position: relative;">
                <img src="<?php echo static_url() . 'files/experts/' . $expert['photo']; ?>" width="288" height="300" />
                <div class="inner-desc"><?php echo $expert['biographies'] ?></div>
            </div>

            <div class="expert-name"><?php echo $expert['name']; ?></div>
            <?php echo $expert['title']; ?>

            <div class="expert-social-links">
                <?php if ($expert['germany_social']) { ?>
                    <a target="_blank" href="<?php echo $expert['germany_social']; ?>"><img src="<?php echo static_url(); ?>layout/images/social1.png" width="15" height="15" /></a>
                <?php } ?>
                <?php if ($expert['linkedin']) { ?>
                    <a target="_blank" href="<?php echo $expert['linkedin']; ?>"><img src="<?php echo static_url(); ?>layout/images/linkedin.png" width="18" height="17" /></a>
                <?php } ?>
                <?php if ($expert['twitter']) { ?>
                    <a target="_blank" href="<?php echo $expert['twitter']; ?>"><img src="<?php echo static_url(); ?>layout/images/twitter.png" width="18" height="14" /></a>
                <?php } ?>
                <?php if ($expert['facebook']) { ?>
                    <a target="_blank" href="mailto:<?php echo $expert['facebook']; ?>"><img src="<?php echo static_url(); ?>layout/images/email.png" width="16" height="12" /></a>                  
                <?php } ?>
            </div>

            <div style="clear: both;margin-top: 30px;padding: 10px;display: block;">


            </div>
        </div>
    <?php } ?>
</div>

<!------ END Our Experts --------------------------------->

<p class="inside-horizontal-section" style="margin-bottom: 60px;">
    <?php echo lang('about_our_clients_partners'); ?>
</p>

<!------ START Clients --------------------------------->
<a id="Clients" class="anchor" id="top"></a>

<div class="small-dashed-separator"></div>
<div id="" class="home-title small-width"><?php echo lang('about_clients'); ?></div>
<div class="list_carousel" >
    <ul id="foo1" >
        <?php foreach ($activeClients as $client) { ?>
            <li><img src="<?php echo static_url(); ?>files/banners/<?php echo $client['file_name']; ?>" style="width:173px" /></li>
        <?php } ?>  
    </ul>
    <div class="clearfix"></div>
    <a id="prev1" class="prev" href="#"></a>
    <a id="next1" class="next" href="#"></a>
</div>

<!------ END Clients --------------------------------->

<!------ START Clients --------------------------------->

<div class="small-dashed-separator" style="margin-top: 30px;"></div>
<a id="Partners" class="anchor" id="top"></a>
<div class="home-title small-width"><?php echo lang('about_partners'); ?></div>
<div class="list_carousel">
    <ul id="foo2">
        <?php foreach ($activePartners as $partners) { ?>
            <li><img src="<?php echo static_url(); ?>files/banners/<?php echo $partners['file_name']; ?>" style="width:173px" /></li>
        <?php } ?>  
    </ul>
    <div class="clearfix"></div>
    <a id="prev2" class="prev" href="#"></a>
    <a id="next2" class="next" href="#"></a>
</div>

<!------ END Clients --------------------------------->

<!------ START Quotes --------------------------------->

<div class="small-dashed-separator" style="margin-top: 30px;"></div>
<div class="home-title small-width"><?php echo lang('about_quotes'); ?></div
<div class="inside-horizontal-section">
    <div class="list_carousel1" style="margin-top: 40px;">
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

<div style="clear: both; height: 34px;"></div>

<div class="small-dashed-separator" style="width: 50%;"></div>
<?php
$style_width = 'width: 440px;';
if ($lang_id != 1) {
    $style_width = 'width: 540px;';
}
?>
<div class="contact-us-box" style="<?php echo $style_width;?>">
    <?php echo lang('about_cta'); ?>
    <a href="<?php echo site_url('contact'); ?>" class="contact-us-link"><?php echo lang('about_cta_btn'); ?></a>
</div>

<div style="height: 100px;display: block;"></div>