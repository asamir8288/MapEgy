<style type="text/css">
    #li_ui_li_gen_1410982266208_1-container.IN-right{
        top: -6px!important;
    }
</style>
<div class="blog-details-left">    
    <img src="<?php echo static_url() . 'files/news/' . $blog_details['image']; ?>" style="width: 569px;height: 370px;" />
    
    <div class="blog-details-title"><?php echo $blog_details['title']; ?></div>
    <div id="social-sharing-plugins">
        <div id="fb-root"></div>
        <script>(function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id))
                    return;
                js = d.createElement(s);
                js.id = id;
                js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=1458587444431028&version=v2.0";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>
        <div class="fb-share-button" data-href="<?php echo base_url(); ?>news/blog/details/<?php echo $blog_details['id']; ?>" data-layout="button_count"></div>

        <div class="linkedin" style="position: relative;display: inline-block;top: 5px;left: 3px;">
            <script src="//platform.linkedin.com/in.js" type="text/javascript">
            lang: en_US
            </script>
            <script type="IN/Share" data-url="<?php echo base_url(); ?>news/blog/details/<?php echo $blog_details['id']; ?>" data-counter="right"></script>
        </div>

        <div class="twitter" style="position: relative;display: inline-block;left: 3px;">
            <a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php echo base_url(); ?>news/blog/details/<?php echo $blog_details['id']; ?>" data-text="the data you want to tweet using it" data-via="mapegy">Tweet</a>
            <script>!function (d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
                    if (!d.getElementById(id)) {
                        js = d.createElement(s);
                        js.id = id;
                        js.src = p + '://platform.twitter.com/widgets.js';
                        fjs.parentNode.insertBefore(js, fjs);
                    }
                }(document, 'script', 'twitter-wjs');</script>
        </div>

        <div class="google" style="position: relative;left: -28px;display: inline-block;top: 4px;">
            <!-- Place this tag in your head or just before your close body tag. -->
            <script src="https://apis.google.com/js/platform.js" async defer></script>

            <!-- Place this tag where you want the +1 button to render. -->
            <div  class="g-plusone" data-size="tall" data-annotation="inline" data-width="150" data-href="<?php echo base_url(); ?>news/blog/details/<?php echo $blog_details['id']; ?>"></div>
        </div>

        <div style="position: relative;left: -126px;display: inline-block;">
            <div data-type="XING/Share" data-counter="right" data-button-shape="square" data-url="www.mazengar.com/mapegy/"></div>
            <script>
                ;
                (function (d, s) {
                    var x = d.createElement(s),
                            s = d.getElementsByTagName(s)[0];
                    x.src = "https://www.xing-share.com/js/external/share.js";
                    s.parentNode.insertBefore(x, s);
                })(document, "script");
            </script>
        </div>
    </div>
    <div style="float: right;top: -40px;position: relative;" class="news_date"><?php echo date('d M Y', strtotime($blog_details['news_date'])); ?></div>
    <div class="blog-details-desc"><?php echo $blog_details['description']; ?></div>


    <div id="fb-root" style="margin-top: 50px;"></div>
    <script>(function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id))
                return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=1458587444431028&version=v2.0";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

    <div class="fb-comments" data-width="570" data-href="<?php echo base_url(); ?>news/blog/details/<?php echo $blog_details['id']; ?>" data-numposts="5" data-colorscheme="light"></div>
</div>

<div class="blog-details-right">
    <?php foreach ($active_news as $news) { ?>
    <div class="news_blog_box" style="margin: -5px 10px;">
            <a href="<?php echo base_url() . 'news/blog/details/' . $news['id'];?>" style="text-decoration: none;">
                <div class="news_date"><?php echo date('d M Y', strtotime($news['news_date'])); ?></div>
                <img src="<?php echo static_url() . 'files/news/' . $news['image']; ?>" style="width: 271px; height: 176px;" />
                <div class="news-title"><?php echo $news['title']; ?></div>
            </a>
        </div>
    <?php } ?>
</div>

<div style="clear: left;height: 100px;"></div>

