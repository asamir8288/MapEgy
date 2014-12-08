<div class="sub-title">Recent Blog Posts</div>

<?php
foreach ($active_news as $news) {
    ?>
    <div class="news_blog_box" style="">     
        <div class="news-titles"><?php echo $news['title']; ?></div>
        <a href="<?php echo site_url('mobile/news_details/' . $news['alias_url']); ?>">
            <img src="<?php echo static_url() . 'files/news/' . $news['image']; ?>" style="width: 100%; height: 176px;" />
        </a>        
        <span style="display: block;font-size: 14px;margin-bottom: 5px;margin-top: 10px;color: #848484;"><?php echo $news['author']; ?></span>

        <div><?php echo substring(nl2br($news['teaser']), $news['alias_url'], 'news/blog/details', 25); ?></div>
    </div>
    <?php
}
?>

<div class="small-dashed-separator margins"></div>
<div class="news-meet-us">
    <div class="sub-title">Meet us</div>

    <?php
    $i = 1;
    foreach ($active_events as $event) {
        ?>
        <div class="event_box">
            <div class="event-date"><?php echo date('d M Y', strtotime($event['date'])); ?></div>
            <div class="img-box"><a href="<?php echo base_url(); ?>mobile/events"><img src="<?php echo static_url() . 'files/events/' . $event['image']; ?>" style="width: 77px;height: 50px;" /></a></div>
            <div class="event-content">                
                <div class="event-date"><?php echo $event['title']; ?></div>
                <div class="event-desc"><?php echo (strlen($event['summary']) > 120) ? substr($event['summary'], 0, 120) : $event['summary']; ?></div>
            </div>

        </div>
        <?php
        $i++;
    }
    ?>
</div>