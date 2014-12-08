<div id="product-features">
    <div class="small-dashed-separator margins"></div>
    <p class="inside-horizontal-section first" style="text-align: justify;">
        <?php echo lang('front_product_info');?>
    </p> 

    <div class="small-dashed-separator"></div>
    <div class="section-title" style="width: 30%;">Features</div>
    <?php
    $i = 1;
    foreach ($activeFeatures as $feature) {
        ?>

        <img style="width: 100%; min-height: 210px" src="<?php echo static_url() . 'files/products/' . $feature['image']; ?>" />
        <div style="margin-bottom: 30px;margin-top: 5px;">
            <?php echo $feature['description']; ?>
        </div>
        <?php
        $i++;
    }
    ?>
    <div class="small-dashed-separator margins"></div>
    <div style="text-align: justify;">
        <?php echo lang('front_product_description');?>
    </div>
    <div class="small-dashed-separator margins"></div>
    <div id="" class="who-uses-mapegy"><?php echo lang('front_product_who_uses_mapegy');?></div>

    <div style="width: 230px;margin: 0 auto;">
        <div class="who-uses-box">
            <div class="technology-inovation-icon"></div>
            <span>
                <?php echo lang('front_product_who_uses_mapegy_item1');?>
            </span>
        </div>
        <div class="who-uses-box" style="margin-right: 0px;">
            <div class="researchers-icon"></div>
            <span>
                <?php echo lang('front_product_who_uses_mapegy_item2');?>
            </span>
        </div>
    </div>

    <div style="width: 230px;margin: 0 auto;">
        <div class="who-uses-box" style="height: 150px;">
            <div class="product_investors-icon"></div>
            <span>
                <?php echo lang('front_product_who_uses_mapegy_item3');?>
            </span>
        </div>
        <div class="who-uses-box" style="margin-right: 0px;height: 130px;">
            <div class="ip-icon"></div>
            <span>
                <?php echo lang('front_product_who_uses_mapegy_item4');?>
            </span>
        </div>
    </div>

    <div style="width: 230px;margin: 0 auto;">
        <div class="who-uses-box" style="height: 150px;">
            <div class="government-icon"></div>
            <span>
                <?php echo lang('front_product_who_uses_mapegy_item5');?>
            </span>
        </div>
        <div class="who-uses-box" style="margin-right: 0px; height: 150px;">
            <div class="hr-managers-icon"></div>
            <span>
                <?php echo lang('front_product_who_uses_mapegy_item6');?>
            </span>
        </div>
    </div>

    <div style="clear: left;height: 1px;"></div>

    <div class="small-dashed-separator"></div>

    <div class="section-title" style="width: 230px;"><?php echo lang('front_product_this_makes_us_unique');?></div>

    <div style="max-width: 300px;margin: 0 auto;">
        <div>
            <div class="offer-item">
                <?php echo lang('front_product_this_makes_us_unique_1_1');?></div> <span class="offer-icon"></span><div class="offer-item"><?php echo lang('front_product_this_makes_us_unique_1_2');?>
            </div>
        </div>
        <div>
            <div class="offer-item">
                <?php echo lang('front_product_this_makes_us_unique_2_1');?></div> <span class="offer-icon"></span><div class="offer-item"><?php echo lang('front_product_this_makes_us_unique_2_2');?>
            </div>
        </div>
        <div>
            <div class="offer-item">
                <?php echo lang('front_product_this_makes_us_unique_3_1');?></div> <span class="offer-icon"></span><div class="offer-item"><?php echo lang('front_product_this_makes_us_unique_3_2');?>
            </div>
        </div>   
    </div>

    <div class="small-dashed-separator margins"></div>
    <a href="<?php echo site_url('mobile/contact'); ?>" class="contact-us-link"><?php echo lang('contact_btn');?></a>
    <div class="small-dashed-separator margins"></div>
</div>