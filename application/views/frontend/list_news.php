<div class="recent-blog-main-title">Recent Blog Posts</div>

<?php foreach ($active_news as $news) { ?>
    <div class="news_blog_box">
        <img src="<?php echo static_url() . 'files/news/' . $news['image']; ?>" style="width: 271px; height: 176px;" />
        <div class="news-title"><?php echo $news['title']; ?></div>
        <div><?php echo substring(nl2br($news['description']), $news['id'], 'news/blog/details', 25); ?></div>
    </div>
<?php } ?>

<?php if ($news_count > 6) { ?>
    <a href="<?php echo site_url('news/blogs');?>" class="older-posts-link">Older Posts</a>
<?php }else{ ?>
    <div style="display: block; height: 40px;"></div>
<?php }?>

<div class="small-dashed-separator"></div>
<div class="news-meet-us">
    <div class="meet-us-title">Meet us</div>
    <?php
    $i = 1;
    foreach ($active_events as $event) {
        $style = '';
        if (count($active_events) == $i) {
            $style = 'style="border: none;"';
        }
        ?>
        <div class="event_box" <?php echo $style;?>>
            <div class="img-box"><img src="<?php echo static_url() . 'files/events/' . $event['image']; ?>" /></div>
            <div class="event-content">
                <div class="event-date"><?php echo date('d M Y', strtotime($event['date'])); ?></div>
                <div class="event-desc"><?php echo (strlen($event['description']) > 100) ? substr($event['description'], 0, 100) . '...' : $event['description']; ?></div>
            </div>

        </div>
        <?php $i++;
    }
    ?>

    <?php if ($events_count > 5) { ?>
        <a href="" class="older-posts-link">Older Events</a>
<?php } ?>

</div>



<div class="news-follow-us">
    <div class="follow-us-title">Follow mapegy</div>
</div>

<div style="clear: left;height: 50px;"></div>


