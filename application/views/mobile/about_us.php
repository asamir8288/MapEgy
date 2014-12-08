<div style="text-align: justify">
    <?php echo lang('about_intro_1');?>
    <br /><br />
    <?php echo lang('about_intro_2');?>
</div>

<div class="small-dashed-separator"></div>
<div class="section-title"><?php echo lang('about_our_experts');?></div>

<?php foreach ($experts as $expert) { ?>
    <div class="expert">

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

<div class="small-dashed-separator margins"></div>
<div style="text-align: justify">    
    <?php echo lang('about_our_clients_partners');?>
</div>

<div class="small-dashed-separator"></div>
<div id="Clients" class="section-title"><?php echo lang('about_clients');?></div>
<div class="list_carousel">
    <ul id="foo1">
        <?php foreach ($activeClients as $client) { ?>
            <li style="margin-left: 0px;"><img src="<?php echo static_url(); ?>files/banners/<?php echo $client['file_name']; ?>" style="width:90px" /></li>
        <?php } ?>                        
    </ul>
    <div class="clearfix"></div>
    <a id="prev1" class="prev" href="#"></a>
    <a id="next1" class="next" href="#"></a>
</div>

<div class="small-dashed-separator" style="margin-top: 30px;"></div>
<div class="section-title"><?php echo lang('about_partners');?></div>
<div class="list_carousel">
    <ul id="foo2">
        <?php foreach ($activePartners as $partners) { ?>
            <li style="margin-left: 0px;"><img src="<?php echo static_url(); ?>files/banners/<?php echo $partners['file_name']; ?>" style="width:90px" /></li>
        <?php } ?>  
    </ul>
    <div class="clearfix"></div>
    <a id="prev2" class="prev" href="#"></a>
    <a id="next2" class="next" href="#"></a>
</div>

<div class="small-dashed-separator" style="margin-top: 30px;"></div>
<div class="section-title"><?php echo lang('about_quotes');?></div>
<div class="inside-horizontal-section"></div>
    <div class="list_carousel1" style="margin-top: 40px;">
        <ul id="foo3">
            <?php foreach ($activeQuotes as $quote) { ?>
                <li>
                    <div class="quotes" >                       
                        <div class="quote-words" style="max-width: 230px!important;">
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

    <div class="small-dashed-separator margins"></div>
    <a href="<?php echo site_url('mobile/contact'); ?>" class="contact-us-link"><?php echo lang('contact_btn');?></a>
    <div class="small-dashed-separator margins"></div>

