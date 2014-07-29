<!------ START About Mapegy --------------------------------->

<p class="inside-horizontal-section first">
    As a Big Data and Visual Analytics company, we provide software and consulting to support strategic decisions of high-tech companies.
    <br /><br />
    Our customers need facts on technology push and technology acceptance fast and efficiently. These facts are contained in millions upon millions of globally available documents generated during the technology life-cycle, such as patents, technology news or posts in social networks.
    <br /><br />
    Our customers need facts on technology push and technology acceptance fast and efficiently. These facts are contained in millions upon millions of globally available documents generated during the technology life-cycle, such as patents, technology news or posts in social networks.
</p>                
<!------ END About Mapegy --------------------------------->

<!------ START Our Experts --------------------------------->

<div class="small-dashed-separator"></div>
<div class="inside-main-title" style="width: 40%;">Our Experts</div>
<div class="inside-horizontal-section">

    <?php foreach ($experts as $expert) { ?>
        <div class="expert">
            <img src="<?php echo static_url() . 'files/experts/' . $expert['photo']; ?>" width="288" height="191" />
            <div class="expert-name"><?php echo $expert['name']; ?></div>
            <?php $expert['title']; ?>

            <div class="expert-social-links">
                <?php if ($expert['germany_social']) { ?>
                    <a href="<?php echo $expert['germany_social']; ?>"><img src="<?php echo static_url(); ?>layout/images/social1.png" width="15" height="15" /></a>
                <?php } ?>
                <?php if ($expert['linkedin']) { ?>
                    <a href="<?php echo $expert['linkedin']; ?>"><img src="<?php echo static_url(); ?>layout/images/linkedin.png" width="18" height="17" /></a>
                <?php } ?>
                <?php if ($expert['twitter']) { ?>
                    <a href="<?php echo $expert['twitter']; ?>"><img src="<?php echo static_url(); ?>layout/images/twitter.png" width="18" height="14" /></a>
                <?php } ?>
                <?php if ($expert['facebook']) { ?>
                    <a href="<?php echo $expert['facebook']; ?>"><img src="<?php echo static_url(); ?>layout/images/facebook.png" width="10" height="17" /></a>                  
                <?php } ?>
            </div>
        </div>
    <?php } ?>


</div>

<!------ END Our Experts --------------------------------->

<!------ START Clients --------------------------------->

<div class="small-dashed-separator"></div>
<div class="inside-main-title">Clients</div>
<p class="inside-horizontal-section">
    <img src="<?php echo static_url(); ?>layout/images/home-client-placeholder.png" width="872" height="129" />
</p>

<!------ END Clients --------------------------------->

<!------ START Clients --------------------------------->

<div class="small-dashed-separator"></div>
<div class="inside-main-title">Partners</div>
<p class="inside-horizontal-section">
    <img src="<?php echo static_url(); ?>layout/images/home-client-placeholder.png" width="872" height="129" />
</p>

<!------ END Clients --------------------------------->

<!------ START Quotes --------------------------------->

<div class="small-dashed-separator"></div>
<div class="inside-main-title">Quotes</div>
<div class="inside-horizontal-section">
    <div class="left-arrow"></div>
    <div class="quotes">
        <img src="<?php echo static_url(); ?>layout/images/frankfurter_allgemeine_logo.png" width="250" height="53" />
        <div class="quote-words">
            “The pilot to certainty - it maps the landscape of technology companies like no other.”

            <span class="author">
                Jens Twiehaus
                <br />
                Frankfurter Allgemeine Zeitung    
            </span>
        </div>

    </div>

    <div class="right-arrow"></div>
</div>

<!------ END Quotes --------------------------------->                

<div class="small-dashed-separator"></div>

<div class="contact-us-box">
    Did we <strong>arouse</strong> your <strong>interest</strong>?
    <a href="" class="contact-us-link">Contact us</a>
</div>

<div style="height: 100px;display: block;"></div>