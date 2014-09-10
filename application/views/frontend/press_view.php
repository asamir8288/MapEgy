<div style="float: left;width: 635px; ">
    <div class="press_top_left">
        <div class="section-title"><?php echo $press['media_contact']['title']; ?></div>
        <div class="section-desc"><?php echo $press['media_contact']['description']; ?></div>
    </div>
    <div id="Company-Profile" class="press_top_left">
        <div class="section-title"><?php echo $press['company_profile']['title']; ?></div>
        <div class="section-desc"><?php echo $press['company_profile']['description']; ?></div>
    </div>
    <div id="Management-Biographies" class="press_top_left">
        <div class="section-title"><?php echo $press['management_biographies']['title']; ?></div>
        <div class="section-desc"><?php echo $press['management_biographies']['description']; ?></div>
    </div>
</div>
<div class="press_top_right">
    <div class="contact-person">
        <img src="<?php echo static_url(); ?>layout/images/career-advisor.png" />
        <span class="adviosr-title">Dr. rer. nat. Matthias</span>
        <span class="adviosr-job-title">Data Analysis and Visualization</span>

        <a href="mailto:start@mapegy.com" class="contact-link">Contact Me</a>
    </div>
</div>

<div id="Press-Clipping" style="height: 10px;clear: left;"></div>

<?php $this->load->view('frontend/_press_clipping', $press_clippings); ?>


<div class="small-dashed-separator"></div>

<div class="contact-us-box">
    Did we <strong>arouse</strong> your <strong>interest</strong>?
    <a href="mailto:wagner@mapegy.com" class="contact-us-link">Contact us</a>
</div>

<div style="height: 70px;display: block;"></div>