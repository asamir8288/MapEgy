<?php echo form_open_multipart($post_url); ?>
<ul id="form_list">
    <li>
        <label for="job_title"><?php echo lang('job_title'); ?>:</label>
        <input type="text" value="<?php echo (isset($data['title'])) ? $data['title'] : ''; ?>" name="title" id="job_title" class="txtbox" >
        <?php echo (isset($errors['title'])) ? generate_error_message($errors['title']) : ''; ?>
    </li>
    <li>
        <label for="job_description"><?php echo lang('job_brief'); ?>:</label>
        <textarea id="job_description" name="description"><?php echo (isset($data['description'])) ? $data['description'] : ''; ?></textarea>        
        <?php echo (isset($errors['description'])) ? generate_error_message($errors['description']) : ''; ?>
    </li>
    <li>
        <label for="job_pdf"><?php echo lang('job_pdf'); ?>:</label>
        <input type="file" name="userfile" id="job_pdf" />
        <?php echo (isset($errors['pdf'])) ? generate_error_message(strip_tags($errors['pdf'])) : ''; ?>
    </li>
    <li>
        <label for="active_flag"><?php echo lang('job_activate');?>:</label>
        <input type="checkbox" <?php echo (isset($data['active_flag']) && $data['active_flag']) ? 'checked="checked"' : ''; ?> name="active_flag" id="active_flag" class="chkbox" />
    </li>

    <li>
        <input type="submit" name="submit" value="<?php echo $submit_btn; ?>" class="form-submit-btn" />  
        <a href="<?php echo base_url();?>admin/job"><?php echo lang('job_cancel');?></a>
    </li>
</ul>
<?php echo form_close(); ?>