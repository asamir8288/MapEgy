<div class="blog-details-left">
    <img src="<?php echo static_url() . 'files/news/' . $blog_details['image']; ?>" style="width: 569px;height: 370px;" />

    <div class="blog-details-title"><?php echo $blog_details['title']; ?></div>
    <div class="blog-details-desc"><?php echo $blog_details['description']; ?></div>
</div>

<div class="blog-details-right">
    <?php foreach ($active_news as $news) { ?>
    <div class="news_blog_box">
            <img src="<?php echo static_url() . 'files/news/' . $news['image']; ?>" style="width: 271px; height: 176px;" />
            <div class="news-title"><?php echo $news['title']; ?></div>
        </div>
    <?php } ?>
</div>

<div style="clear: left;height: 100px;"></div>