<div class="consulting">
    <div class="consulting-desc">
        <?php echo lang('fontend_service_intro'); ?>

        <div class="our_consulting_experts"><?php echo lang('fontend_service_bullet_title'); ?></div>
        <ul>
            <li style="list-style: disc;"><span><?php echo lang('fontend_service_bullet_title_1'); ?></span></li>
            <li style="list-style: disc;"><span><?php echo lang('fontend_service_bullet_title_2'); ?></span></li>
            <li style="list-style: disc;"><span><?php echo lang('fontend_service_bullet_title_3'); ?></span></li>
            <li style="list-style: disc;"><span><?php echo lang('fontend_service_bullet_title_4'); ?></span></li>
        </ul>

    </div>

    <div class="contact-person">
        <img src="<?php echo static_url() . 'files/consulting/' . $consulting['photo']; ?>" style="width: 217px;height: 145px;float: left;margin-bottom: 3px;" />
        <span class="adviosr-title"><?php echo $consulting['name']; ?></span>
        <span class="adviosr-job-title"><?php echo $consulting['job_title']; ?></span>
        <div class="contact-tel"><?php echo $consulting['tel']; ?></div>

        <a href="mailto:sperr@mapegy.com" class="contact-link">Contact me</a>
    </div>


    <div style="clear: left;margin-bottom: 120px;"></div>

    <div class="small-dashed-separator"></div>
    <a id="Case-Studies" class="anchor" id="top"></a>
    <div class="home-title small-width consulting-title-decoration">Case Studies</div>    

    <div>
        <div class="case-study-box">
            <div class="img img1">
                <img src="<?php echo static_url() . 'layout/images/innovation-management.png'; ?>" />
            </div>
            <div class="title"><?php echo lang('fontend_service_innovation'); ?></div>
            <div class="slogan"><?php echo lang('fontend_service_making_more_innovative'); ?></div>
            <?php
            $style_top = 'top: 58px;';
            if ($lang_id != 1) {
                $style_top = 'top:79px;';
            }
            ?>
            <a href="mailto:info@mapegy.com" style="<?php echo $style_top; ?>left: 10px;" class="case-study-link">Download Study</a>
        </div>
        <div class="case-study-box">
            <div class="img img2">
                <img src="<?php echo static_url() . 'layout/images/human-resources.png'; ?>" />
            </div>
            <div class="title"><?php echo lang('fontend_service_hr'); ?></div>
            <div class="slogan" style="width: 250px;"><?php echo lang('fontend_service_finding_experts'); ?></div>
            <?php
            $style_top_1 = 'top: 76px;';
            if ($lang_id != 1) {
                $style_top_1 = 'top:79px;';
            }
            ?>
            <a href="mailto:info@mapegy.com" style="<?php echo $style_top_1;?>left: 10px;" class="case-study-link">Download Study</a>
        </div>
        <div class="case-study-box" style="margin-right: 0px;">
            <div class="img img3">
                <img src="<?php echo static_url() . 'layout/images/product_investors1.png'; ?>" />
            </div>
            <div class="title" style="width: 280px;"><?php echo lang('fontend_service_future'); ?></div>
            <div class="slogan" style="width: 280px;"><?php echo lang('fontend_service_information'); ?></div>

            <a href="mailto:info@mapegy.com" style="top: 30px;left: 25px;" class="case-study-link">Download Study</a>
        </div>
    </div>

    <div style="clear: left;height: 100px;"></div>

    <div class="small-dashed-separator"></div>

    <div class="contact-us-box" style="width: 735px;">
        <?php echo lang('fontend_service_cta');?>    
        <a href="mailto:sperr@mapegy.com" class="consulting-contact-link"><?php echo lang('fontend_service_cta_btn');?></a>
    </div>
</div>