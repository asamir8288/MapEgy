<script type="text/javascript" language="javascript">
    $(document).ready(function () {
        $('a[href*=#]:not([href=#])').click(function () {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
</script>
<div class="contact-person">
    <img src="<?php echo static_url(); ?>layout/images/career-advisor.jpg" />
    <span class="adviosr-title">James Gardner</span>
    <span class="adviosr-job-title">Executive Assistant</span>

    <a href="mailto:start@mapegy.com" class="apply-now" style="padding: 4px 2px 7px 2px;text-align: center;"><?php echo lang('career_apply_now_btn');?></a>
</div>

<div class="job-main-brief">
    <?php echo lang('career_intro');?>

    <a id="Open-Vacancies" class="anchor" id="top"></a>
    <div id="" class="our-open-vacancies"><?php echo lang('career_headline_vacancies');?>:</div>

    <ul class="job-list">
        <?php foreach ($jobs as $job) { ?>
            <li style="list-style: disc;"><a href="#<?php echo $job['anchor_url']; ?>"><?php echo $job['title']; ?></a></li>
        <?php } ?>
    </ul>
</div>

<?php foreach ($jobs as $job) { ?>
    <div class="small-dashed-separator job-separator-aligment"></div>
    <a style="top: -70px;" id="<?php echo $job['anchor_url']; ?>" class="anchor" id="top"></a>
    <div id="" class="job-title"><?php echo $job['title']; ?></div>
    <div class="job-description"><?php echo $job['description']; ?></div>

    <?php if ($job['pdf']) {
        ?>
        <div class="download-job-offer"><?php echo $job['pdf_title']; ?>: <a href="<?php echo site_url('job/download_file/' . $job['id']); ?>"><img style="position: relative;top: 9px;" src="<?php echo static_url() ?>layout/images/pdf-icon.png" /></a></div>
    <?php } ?>
<?php } ?>

<script>
    $(document).ready(function () {

        // hide #back-top first
        $("#back-top").hide();

        // fade in #back-top
        $(function () {
            $(window).scroll(function () {
                if ($(this).scrollTop() > 100) {
                    $('#back-top').fadeIn();
                } else {
                    $('#back-top').fadeOut();
                }
            });

            // scroll body to 0px on click
            $('#back-top a').click(function () {
                $('body,html').animate({
                    scrollTop: 0
                }, 800);
                return false;
            });
        });

    });
</script>

<style type="text/css">


</style>


<p id="back-top">
    <a href="#top"><span></span>Back to Top</a>
</p>

<div style="clear: left;height: 50px;"></div>