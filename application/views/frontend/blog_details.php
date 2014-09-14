<div class="blog-details-left">
    <img src="<?php echo static_url() . 'files/news/' . $blog_details['image']; ?>" style="width: 569px;height: 370px;" />

    <div class="blog-details-title"><?php echo $blog_details['title']; ?></div>
    <div class="blog-details-desc"><?php echo $blog_details['description']; ?></div>
    
    
    <div id="fb-root" style="margin-top: 50px;"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=1458587444431028&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="fb-comments" data-href="<?php echo base_url();?>news/blog/details/<?php echo $blog_details['id'];?>" data-numposts="5" data-colorscheme="light"></div>
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

