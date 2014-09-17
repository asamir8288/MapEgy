<div id="Blog" class="recent-blog-main-title" style="margin-bottom: 10px;">Meet Us</div>
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
        <img style="width: 270px;max-height: 176px;" src="<?php echo static_url() . 'files/events/' . $event['image']; ?>" />        
        <div>
            <div style="color: #000;margin-top: 20px;font-size: 15px;font-weight: bold;"><?php echo date('d M Y', strtotime($event['date'])); ?></div>
            <?php echo $event['description']; ?></div>
    </div>


    <?php $i++;
} ?>

<div style="clear: left;height: 40px;width: 100%;"></div>