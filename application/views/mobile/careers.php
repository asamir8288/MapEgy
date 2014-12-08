<div style="text-align: justify;">
    <?php echo lang('career_intro');?>
</div>

<div class="our-open-vacancies"><b><?php echo lang('career_headline_vacancies');?>:</b></div>
<?php foreach ($jobs as $job) { ?>
    <div id="" class="job-title"><b><?php echo $job['title']; ?></b></div>
    <div class="job-description"><?php echo $job['description']; ?></div>

    <?php if ($job['pdf']) {
        ?>
        <div class="download-job-offer"><?php echo $job['pdf_title']; ?>: <a href="<?php echo site_url('job/download_file/' . $job['id']); ?>"><img style="position: relative;top: 9px;" src="<?php echo static_url() ?>layout/images/pdf-icon.png" /></a></div>
    <?php } ?>
    <div class="small-dashed-separator" style="margin-top: 30px;margin-bottom: 30px;"></div>
<?php } ?>
