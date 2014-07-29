<div class="contact-person">
    <img src="<?php echo static_url();?>layout/images/career-advisor.png" />
    <span class="adviosr-title">Dr. rer. nat. Matthias</span>
    <span class="adviosr-job-title">Data Analysis and Visualization</span>
    
    <a href="" class="apply-now"></a>
</div>

<div class="job-main-brief">
    <p>
        Do you want to be a part of a growing dynamic startup and work in a fast-paced environment? Do you work independently, flexibly and efficiently?
    </p>
    <p>
        Get to know Berlin´s hottest Technology Intelligence Startup and
        JOIN OUR TEAM!
    </p>

    <div class="our-open-vacancies">Our open vacancies:</div>
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

