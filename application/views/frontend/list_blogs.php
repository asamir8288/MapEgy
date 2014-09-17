<div id="Blog" class="recent-blog-main-title" style="margin-bottom: 20px;">All Blogs</div>

<?php foreach ($active_news as $news) { ?>
    <div class="news_blog_box" style="height: 360px;">
        <div class="news_date"><?php echo date('d M Y', strtotime($news['news_date'])); ?></div>
        <img src="<?php echo static_url() . 'files/news/' . $news['image']; ?>" style="width: 271px; height: 176px;" />
        <div class="news-title"><?php echo $news['title']; ?></div>
        <div><?php echo substring($news['description'], $news['id'], 'news/blog/details', 25); ?></div>
    </div>
<?php } ?>
