<div class="contact-right-title">mapegy GmbH</div>
<div class="address">
        <br />
        Rotherstr. 16 <br />
        10245 Berlin, Germany<br /><br />

        +49 (0)30 430 2212 0<br />
        office@mapegy.com<br />
        <a href="http://www.mapegy.com">http://www.mapegy.com</a><br /><br />

        HRB 140747, AG Berlin-Charlottenburg<br /><br />

    </div>

<?php echo form_open('mobile/contact'); ?>
    <ul id="contact-form">
        <li>
            <label for="iam"><?php echo lang('contact_iam'); ?> <span class="star">*</span></label>
            <select name="iam" class="select">
                <?php foreach($options as $option) { ?>
                <option value="<?php echo $option['contact_option'];?>"><?php echo $option['contact_option'];?></option>
                <?php }?>
            </select>
        </li>
        <li>
            <label for="title"><?php echo lang('contact_title'); ?> <span class="star">*</span></label>
            <select name="title" class="select" style="width: 100px;">
                <option value="Mr.">Mr.</option>
                <option value="Mrs.">Mrs.</option>
                <option value="Dr.">Dr.</option>
                <option value="Prof.">Prof.</option>
            </select>
        </li>        
        <li>
            <label for="surname"><?php echo lang('contact_surname'); ?> <span class="star">*</span></label>
            <input type="text" name="surname" id="surname" class="txt" >
        </li>
        <li>
            <label for="given_name"><?php echo lang('contact_given_name'); ?> <span class="star">*</span></label>
            <input type="text" name="given_name" id="given_name" class="txt" >
        </li>
        <li>
            <label for="email"><?php echo lang('contact_email'); ?> <span class="star">*</span></label>
            <input type="text" name="email" id="email" class="txt" >
        </li>
        <li>
            <label for="phone"><?php echo lang('contact_phone'); ?></label>
            <input type="text" name="phone" id="phone" class="txt">
        </li>
        <li>
            <label for="company"><?php echo lang('contact_company'); ?></label>
            <input type="text" name="company" id="company" class="txt">
        </li>
        <li>
            <label for="function"><?php echo lang('contact_function'); ?></label>
            <input type="text" name="function" id="function" class="txt" >
        </li>
        <li>
            <label for="message"><?php echo lang('contact_message'); ?> <span class="star">*</span></label>
            <textarea name="message" id="message" cols="50" rows="6" class="textarea"></textarea>            
        </li>
        <li>
            <label for="newsletter" style="width: 180px;font-weight: normal;margin-left: 80px;">
                <input type="checkbox" id="newsletter" name="newsletter" />
                I want to sign up for mapegy's newsletter!
            </label>       
        </li>
        <li>
            <?php echo form_submit('submit', ' ', 'class="submit-btn"'); ?>   
        </li>
    </ul>
    <?php echo form_close(); ?>

<div style="clear: both;height: 50px;"></div>