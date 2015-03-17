<!--<style>
    #map_canvas {
        width: 100%;
        height: 285px;
    }
</style>-->
<!--<script src="https://maps.googleapis.com/maps/api/js"></script>
<script>
    function initialize() {
        var mapCanvas = document.getElementById('map_canvas');
        var mapOptions = {
            center: new google.maps.LatLng(52.504118, 13.449374),
            zoom: 14,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(mapCanvas, mapOptions)

        var marker = new google.maps.Marker({
            position: myLatlng,
            map: map,
            title: 'Hello World!'
        });
    }
    google.maps.event.addDomListener(window, 'load', initialize);
</script>-->


<style type="text/css">
    #left-contact-us-link{
        display: none;
    }
</style>


<div class="contact-left">
    <?php echo form_open('contact/index'); ?>
    <ul id="contact-form">
        <li>
            <label for="iam"><?php echo lang('contact_iam');?> <span class="star">*</span></label>
            <select name="iam" class="select">
                <?php foreach($options as $option) { ?>
                <option value="<?php echo $option['contact_option'];?>"><?php echo $option['contact_option'];?></option>
                <?php }?>
            </select>
        </li>
        <li>
            <label for="title"><?php echo lang('contact_title');?> <span class="star">*</span></label>
            <select name="title" class="select" style="width: 100px;">
                <option value="Mr."><?php echo lang('contact_mr');?></option>
                <option value="Mrs."><?php echo lang('contact_mrs');?></option>
                <option value="Dr."><?php echo lang('contact_dr');?></option>
                <option value="Prof."><?php echo lang('contact_prof');?></option>
            </select>
        </li>        
        <li>
            <label for="surname"><?php echo lang('contact_surname');?> <span class="star">*</span></label>
            <input type="text" name="surname" id="surname" class="txt" >
        </li>
        <li>
            <label for="given_name"><?php echo lang('contact_given_name');?> <span class="star">*</span></label>
            <input type="text" name="given_name" id="given_name" class="txt" >
        </li>
        <li>
            <label for="email"><?php echo lang('contact_email');?> <span class="star">*</span></label>
            <input type="text" name="email" id="email" class="txt" >
        </li>
        <li>
            <label for="phone"><?php echo lang('contact_phone');?></label>
            <input type="text" name="phone" id="phone" class="txt">
        </li>
        <li>
            <label for="company"><?php echo lang('contact_company');?></label>
            <input type="text" name="company" id="company" class="txt">
        </li>
        <li>
            <label for="function"><?php echo lang('contact_function');?></label>
            <input type="text" name="function" id="function" class="txt" >
        </li>
        <li>
            <label for="message"><?php echo lang('contact_message');?> <span class="star">*</span></label>
            <textarea name="message" id="message" cols="50" rows="6" class="textarea"></textarea>            
        </li>
        <li>
            <label for="newsletter" style="width: 400px;font-weight: normal;margin-left: 73px;">
                <input type="checkbox" id="newsletter" name="newsletter" />
                I want to sign up for mapegy's newsletter!
            </label>       
        </li>
        <li>
            <?php echo form_submit('submit', ' ', 'class="submit-btn"'); ?>   
        </li>
    </ul>
    <?php echo form_close(); ?>
</div>

<div class="contact-right">
    <div class="contact-right-title">mapegy GmbH</div>
    <div>
        <br />
        Rotherstr. 16 <br />
        10245 Berlin, Germany<br /><br />

        +49 (0)30 430 2212 0<br />
        office@mapegy.com<br />
        <a href="http://www.mapegy.com">http://www.mapegy.com</a><br /><br />

        HRB 140747, AG Berlin-Charlottenburg<br /><br />

    </div>
</div>



<div style="clear: left;height: 100px;"></div>