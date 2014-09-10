<script type="text/javascript" language="javascript">
    $(document).ready(function() {
        $('a[href*=#]:not([href=#])').click(function() {
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
    <img src="<?php echo static_url(); ?>layout/images/career-advisor.png" />
    <span class="adviosr-title">Dr. rer. nat. Matthias</span>
    <span class="adviosr-job-title">Data Analysis and Visualization</span>

    <a href="mailto:start@mapegy.com" class="apply-now">Apply Now</a>
</div>

<div class="job-main-brief">
    <p>
        Do you want to be a part of a growing dynamic startup and work in a fast-paced environment? Do you work independently, flexibly and efficiently?
    </p>
    <p>
        Get to know Berlin's hottest Technology Intelligence Startup and
        JOIN OUR TEAM!
    </p>

    <div id="Open-Vacancies" class="our-open-vacancies">Our open vacancies:</div>
    <ul class="job-list">
        <?php foreach ($jobs as $job) { ?>
            <li><a href="#<?php echo $job['id']; ?>">- <?php echo $job['title']; ?></a></li>
        <?php } ?>
    </ul>
</div>

<?php foreach ($jobs as $job) { ?>
    <div class="small-dashed-separator job-separator-aligment"></div>
    <div id="<?php echo $job['id']; ?>" class="job-title"><?php echo $job['title']; ?></div>
    <div class="job-description"><?php echo nl2br($job['description']); ?></div>

    <?php if ($job['pdf']) {
        ?>
        <div class="download-job-offer">Read the full offer here: <a href="<?php echo site_url('job/download_file/' . $job['id']); ?>">Download this job offer</a></div>
    <?php } ?>
<?php } ?>

<script>
    $(document).ready(function() {

        // hide #back-top first
        $("#back-top").hide();

        // fade in #back-top
        $(function() {
            $(window).scroll(function() {
                if ($(this).scrollTop() > 100) {
                    $('#back-top').fadeIn();
                } else {
                    $('#back-top').fadeOut();
                }
            });

            // scroll body to 0px on click
            $('#back-top a').click(function() {
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

