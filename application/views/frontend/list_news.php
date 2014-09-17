<div id="Blog" style="text-align: left;margin-left: 10px;margin-bottom: 20px;" class="recent-blog-main-title">Recent Blog Posts</div>

<?php
$i = 0;
foreach ($active_news as $news) {
    if ($i !=0 && $i % 3 == 0) {
        ?>
        <div style="clear: left;height: 40px;"></div>
        <?php
    }
    ?>
    <div class="news_blog_box" style="">
        <a href="<?php echo site_url('news/blog/details/' . $news['id']); ?>">
            <img src="<?php echo static_url() . 'files/news/' . $news['image']; ?>" style="width: 271px; height: 176px;" />
        </a>
        <a href="<?php echo site_url('news/blog/details/' . $news['id']); ?>" class="news-title"><?php echo $news['title']; ?></a>
        <div><?php echo substring(nl2br($news['description']), $news['id'], 'news/blog/details', 25); ?></div>
    </div>
    <?php
    $i++;
}
?>

<?php if ($news_count > 6) { ?>
    <a href="<?php echo site_url('news/blogs'); ?>" class="older-posts-link">Older Posts</a>
<?php } else { ?>
    <div style="display: block; height: 40px;"></div>
<?php } ?>

<div class="small-dashed-separator"></div>
<div id="Meet-us" class="news-meet-us">
    <div class="meet-us-title">Meet us</div>
    <?php
    $i = 1;
    foreach ($active_events as $event) {
        $style = '';
        if (count($active_events) == $i) {
            $style = 'style="border: none;"';
        }
        ?>
        <div class="event_box" <?php echo $style; ?>>
            <div class="img-box"><img src="<?php echo static_url() . 'files/events/' . $event['image']; ?>" /></div>
            <div class="event-content">
                <div class="event-date"><?php echo date('d M Y', strtotime($event['date'])); ?></div>
                <div class="event-desc"><?php echo (strlen($event['description']) > 100) ? substr($event['description'], 0, 100) . '...' : $event['description']; ?></div>
            </div>

        </div>
        <?php
        $i++;
    }
    ?>

    <?php if ($events_count > 5) { ?>
        <a href="<?php echo base_url(); ?>events" class="older-posts-link">Older Events</a>
    <?php } ?>

</div>



<div id="Follow-mapegy" class="news-follow-us">
    <div class="follow-us-title">Follow mapegy</div>

    <a class="twitter-timeline" href="https://twitter.com/mapegy" data-widget-id="507883837108391936">Tweets by @mapegy</a>
    <script>!function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
            if (!d.getElementById(id)) {
                js = d.createElement(s);
                js.id = id;
                js.src = p + "://platform.twitter.com/widgets.js";
                fjs.parentNode.insertBefore(js, fjs);
            }
        }(document, "script", "twitter-wjs");</script>
</div>

<div style="clear: left;height: 50px;"></div>


