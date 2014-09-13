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
<div class="home-title small-width consulting-title-decoration">Our Experts</div>
<div class="inside-horizontal-section">

    <?php foreach ($experts as $expert) { ?>
        <div class="expert">
            <img src="<?php echo static_url() . 'files/experts/' . $expert['photo']; ?>" width="288" height="191" />
            <div class="expert-name"><?php echo $expert['name']; ?></div>
            <?php $expert['title']; ?>

            <div class="expert-social-links">
                <?php if ($expert['germany_social']) { ?>
                    <a target="_blank" href="<?php echo $expert['germany_social']; ?>"><img src="<?php echo static_url(); ?>layout/images/social1.png" width="15" height="15" /></a>
                <?php } ?>
                <?php if ($expert['linkedin']) { ?>
                    <a target="_blank" href="<?php echo $expert['linkedin']; ?>"><img src="<?php echo static_url(); ?>layout/images/linkedin.png" width="18" height="17" /></a>
                <?php } ?>
                <?php if ($expert['twitter']) { ?>
                    <a target="_blank" href="<?php echo $expert['twitter']; ?>"><img src="<?php echo static_url(); ?>layout/images/twitter.png" width="18" height="14" /></a>
                <?php } ?>
                <?php if ($expert['facebook']) { ?>
                    <a target="_blank" href="<?php echo $expert['facebook']; ?>"><img src="<?php echo static_url(); ?>layout/images/facebook.png" width="10" height="17" /></a>                  
                <?php } ?>
            </div>
        </div>
    <?php } ?>


</div>

<!------ END Our Experts --------------------------------->

<!------ START Clients --------------------------------->

<div class="small-dashed-separator"></div>
<div class="home-title small-width">Clients</div>
<div class="list_carousel">
    <ul id="foo1">
        <?php foreach ($activeClients as $client) { ?>
            <li><img src="<?php echo static_url(); ?>files/banners/<?php echo $client['file_name']; ?>" style="width:173px" /></li>
        <?php } ?>  
    </ul>
    <div class="clearfix"></div>
    <a id="prev1" class="prev" href="#"></a>
    <a id="next1" class="next" href="#"></a>
</div>

<!------ END Clients --------------------------------->

<!------ START Clients --------------------------------->

<div class="small-dashed-separator"></div>
<div class="home-title small-width">Partners</div>
<div class="list_carousel">
    <ul id="foo2">
        <?php foreach ($activePartners as $partners) { ?>
            <li><img src="<?php echo static_url(); ?>files/banners/<?php echo $partners['file_name']; ?>" style="width:173px" /></li>
        <?php } ?>  
    </ul>
    <div class="clearfix"></div>
    <a id="prev2" class="prev" href="#"></a>
    <a id="next2" class="next" href="#"></a>
</div>

<!------ END Clients --------------------------------->

<!------ START Quotes --------------------------------->

<div class="small-dashed-separator"></div>
<div class="home-title small-width">Quotes</div
<div class="inside-horizontal-section">
    <div class="list_carousel1">
        <ul id="foo3">
            <li>
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
            </li>
            <li>
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
            </li>

        </ul>
        <div class="clearfix"></div>
        <a id="prev3" class="prev1" href="#"></a>
        <a id="next3" class="next1" href="#"></a>
    </div>
</div>

<!------ END Quotes --------------------------------->                

<div class="small-dashed-separator"></div>

<div class="contact-us-box">
    Did we <strong>arouse</strong> your <strong>interest</strong>?
    <a href="<?php echo site_url('contact'); ?>" class="contact-us-link">Contact us</a>
</div>

<div style="height: 100px;display: block;"></div>