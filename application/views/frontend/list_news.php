<div class="recent-blog-main-title">Recent Blog Posts</div>

<?php foreach ($active_news as $news) { ?>
    <div class="news_blog_box">
        <img src="<?php echo static_url() . 'files/news/' . $news['image']; ?>" style="width: 414px; height: 269px;" />
        <div class="news-title"><?php echo $news['title']; ?></div>
        <div><?php echo substring(nl2br($news['description']), $news['id'], 'news_details', 50); ?></div>
    </div>
<?php } ?>

<?php if ($news_count > 4) { ?>
    <a href="" class="older-posts-link">Older Posts</a>
<?php } ?>

    <div class="small-dashed-separator"></div>
    <div class="news-meet-us"></div>


