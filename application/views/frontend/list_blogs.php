<?php foreach ($active_news as $news) { ?>
    <div class="news_blog_box">
        <img src="<?php echo static_url() . 'files/news/' . $news['image']; ?>" style="width: 271px; height: 176px;" />
        <div class="news-title"><?php echo $news['title']; ?></div>
        <div><?php echo substring($news['description'], $news['id'], 'news_details', 25); ?></div>
    </div>
<?php } ?>
