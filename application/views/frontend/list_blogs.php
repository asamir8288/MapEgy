<div id="Blog" class="recent-blog-main-title" style="margin-bottom: 20px;">All Blogs</div>

<?php foreach ($active_news as $news) { ?>
    <div class="news_blog_box" style="height: 360px;">
        <div class="news_date"><?php echo date('d M Y', strtotime($news['news_date'])); ?></div>
        <a href="<?php echo site_url((($lang_id == 1) ? get_routed_url(URL_PREFIX_EN_NEWS) :get_routed_url1(URL_PREFIX_EN_NEWS)) . '/' . $news['alias_url']); ?>" class="news-title">
            <img src="<?php echo static_url() . 'files/news/' . $news['image']; ?>" style="width: 271px; height: 176px;" />
        </a>
        <a href="<?php echo site_url((($lang_id == 1) ? get_routed_url(URL_PREFIX_EN_NEWS) :get_routed_url1(URL_PREFIX_EN_NEWS)). '/' . $news['alias_url']); ?>" class="news-title"><?php echo $news['title']; ?></a>
        <span style="display: block;font-size: 14px;margin-bottom: 5px;"><?php echo $news['author'];?></span>
        
        <div><?php echo substring($news['teaser'], $news['alias_url'], 'news/blog/details', 25); ?></div>
    </div>
<?php } ?>

<div style="clear: both;height: 20px;"></div>
