<?php echo form_open_multipart($post_url); ?>
<ul id="form_list">
    <li>
        <label for="service_name"><?php echo lang('service_name'); ?>:</label>
        <input type="text" value="<?php echo (isset($data['name'])) ? $data['name'] : ''; ?>" name="name" id="service_name" class="txtbox" >
        <?php echo (isset($errors['name'])) ? generate_error_message($errors['name']) : ''; ?>
    </li>
    <li>
        <label for="service_job_title"><?php echo lang('service_job_title'); ?>:</label>
        <input type="text" value="<?php echo (isset($data['job_title'])) ? $data['job_title'] : ''; ?>" name="job_title" id="service_job_title" class="txtbox" >
        <?php echo (isset($errors['job_title'])) ? generate_error_message($errors['job_title']) : ''; ?>
    </li>
    <li>
        <label for="service_tel"><?php echo lang('service_tel'); ?>:</label>
        <input type="text" value="<?php echo (isset($data['tel'])) ? $data['tel'] : ''; ?>" name="tel" id="service_tel" class="txtbox" >
        <?php echo (isset($errors['tel'])) ? generate_error_message($errors['tel']) : ''; ?>
    </li>

    <?php if (isset($data['photo'])) { ?>
        <li style="margin-left: 154px;">
            <input type="hidden" name="same_photo" value="<?php echo $data['photo']; ?>" > 
            <img style="width: 100px;" src="<?php echo static_url() . 'files/consulting/' . $data['photo']; ?>" /> 
        </li>
        <?php
    }
    ?>

    <li>        
        <label for="service_photo"><?php echo lang('service_photo'); ?>:</label>
        <input type="file" name="userfile" id="service_photo" /> Dim: 217px * 145px
        <?php echo (isset($errors['photo'])) ? generate_error_message(strip_tags($errors['photo'])) : ''; ?>
    </li>
    <li>
        <input type="submit" name="submit" value="<?php echo lang('service_update'); ?>" class="form-submit-btn" />  
        <a href="<?php echo base_url(); ?>admin/consulting"><?php echo lang('_cancel'); ?></a>
    </li>
</ul>
<?php echo form_close(); ?>
