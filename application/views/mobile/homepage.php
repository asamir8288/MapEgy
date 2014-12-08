<script type="text/javascript" language="javascript">


    $(function () {
        $('#foo2').carouFredSel({
//                    auto: true,
            prev: '#prev2',
            next: '#next2',
            scroll: {duration: 500},
        });

        $('#foo3').carouFredSel({
            auto: true,
            prev: '#prev3',
            next: '#next3',
            scroll: {duration: 800},
        });
    });
</script>

<div class="small-dashed-separator" style="width: 90%;"></div>
<div id="" class="section-title" style="width: 55%;"><?php echo lang('home_headline_about_us');?></div>
<p style="text-align: justify;">
    <?php echo lang('home_about_mapegy');?>
</p>

<div class="small-dashed-separator margins" style="width: 90%;"></div>

<div id="home-benefits-section">
    <div class="benefit"><span><?php echo lang('home_Bullet_point_1');?></span></div>
    <div class="benefit"><span><?php echo lang('home_Bullet_point_2');?></span></div>
    <div class="benefit" style="margin-right: 0px;"><span><?php echo lang('home_Bullet_point_3');?></span></div>
</div>

<div class="small-dashed-separator"></div>
<div id="Clients" class="section-title" style="width: 30%;"><?php echo lang('home_clients');?></div>
<div class="list_carousel">
    <ul id="foo2">
        <?php foreach ($activeClients as $client) { ?>
            <li style="margin-left: 0px;"><img src="<?php echo static_url(); ?>files/banners/<?php echo $client['file_name']; ?>" style="width:80px" /></li>
        <?php } ?>                        
    </ul>
    <div class="clearfix"></div>
    <a id="prev2" class="prev" href="#"></a>
    <a id="next2" class="next" href="#"></a>
</div>

<div class="small-dashed-separator" style="margin-top: 40px;"></div>
<div class="section-title" style="width: 30%;"><?php echo lang('home_quotes');?></div>
<div class="list_carousel1" style="margin-top: 40px;">
    <ul id="foo3">
        <?php foreach ($activeQuotes as $quote) { ?>
            <li>
                <div class="quotes">            
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

<div class="small-dashed-separator" style="margin-top: 40px;"></div>
<div class="section-title" style="width: 30%;">News</div>
<div class="sub-title">Recent blog posts</div>
<?php
foreach ($activeNews as $news) {
    ?>
    <div class="news_blog_box" style="">     
        <a href="<?php echo site_url('mobile/news_details/' . $news['alias_url']); ?>"class="news-titles"><?php echo $news['title']; ?></a>

        <div><?php echo nl2br($news['teaser']); ?></div>
    </div>
    <?php
}
?>

<div class="news-meet-us">
    <div class="sub-title">Meet us</div>

    <?php
    $i = 1;
    foreach ($active_events as $event) {
        ?>
        <div class="event_box" style="border: none;">
            <a style="text-decoration: none;" href="<?php echo base_url(); ?>mobile/events">
                <div class="event-date"><?php echo date('d M Y', strtotime($event['date'])); ?></div>            
                <div class="event-content">
                    <div class="event-desc"><?php echo (strlen($event['summary']) > 120) ? substr($event['summary'], 0, 120) : $event['summary']; ?></div>
                </div>
            </a>
        </div>
        <?php
        $i++;
    }
    ?>
</div>

<div class="small-dashed-separator margins"></div>
<div class="social-networks">
    <span style="margin-bottom: 15px;display: block;font-size: 18px;">Join us</span>
    <div>
        <a target="_blank" href="https://www.xing.com/companies/mapegy.com"><img style="margin-right: 5px;" src="<?php echo base_url(); ?>layout/images/mobile/social-icon.png" /></a>
        <a target="_blank" href="https://www.linkedin.com/company/mapegy"><img style="margin-right: 5px;" src="<?php echo base_url(); ?>layout/images/mobile/linkedin-icon.png" /></a>
        <a target="_blank" href="https://twitter.com/mapegy"><img style="margin-right: 5px;" src="<?php echo base_url(); ?>layout/images/mobile/twitter-icon.png" /></a>
        <a target="_blank" href="https://www.facebook.com/mapegy"><img style="margin-right: 5px;" src="<?php echo base_url(); ?>layout/images/mobile/fb-icon.png" /></a> 
    </div>
</div>
<div class="small-dashed-separator margins"></div>
<a href="<?php echo site_url('mobile/contact'); ?>" class="contact-us-link">Contact us</a>
<div class="small-dashed-separator margins"></div>