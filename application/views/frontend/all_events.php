<div id="Blog" class="recent-blog-main-title">Meet Us</div>
<?php
$i = 0;
foreach ($active_events as $event) {
    if ($i % 3 == 0) {
        ?>
<div style="clear: left;height: 20px;width: 100%;"></div>
<?php
    }
    ?>
    <div class="news_blog_box" style="min-height: 150px;margin-bottom: 20px;">
        <img src="<?php echo static_url() . 'files/events/' . $event['image']; ?>" />        
        <div>
            <?php echo date('d M Y', strtotime($event['date'])); ?> <br />
            <?php echo $event['description']; ?></div>
    </div>


    <?php $i++;
} ?>