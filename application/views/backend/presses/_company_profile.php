<?php echo form_open($post_url); ?>
<ul id="form_list">
    <li>
        <label for="company_profile_title"><?php echo lang('company_profile_title');?>:</label>
        <input type="text" value="<?php echo (isset($data['title'])) ? $data['title'] : ''; ?>" name="title" id="company_profile_title" class="txtbox" >
        <?php echo (isset($errors['title'])) ? generate_error_message($errors['title']) : ''; ?>
    </li>
    <li>
        <label for="company_profile_description"><?php echo lang('company_profile_description');?>:</label>
        <textarea id="company_profile_description" name="description"><?php echo (isset($data['description'])) ? $data['description'] : ''; ?></textarea>        
        <?php echo (isset($errors['description'])) ? generate_error_message($errors['description']) : ''; ?>
    </li>
    <li>
        <input type="submit" name="submit" value="<?php echo $submit_btn;?>" class="form-submit-btn" />  
        <a href="<?php echo base_url();?>admin/press"><?php echo lang('press_cancel');?></a>
    </li>
</ul>
<?php echo form_close(); ?>