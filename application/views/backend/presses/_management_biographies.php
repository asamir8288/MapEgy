<?php echo form_open($post_url); ?>
<ul id="form_list">
    <li>
        <label for="management_biographies_title"><?php echo lang('management_biographies_title');?>:</label>
        <input type="text" value="<?php echo (isset($data['title'])) ? $data['title'] : ''; ?>" name="title" id="management_biographies_title" class="txtbox" >
        <?php echo (isset($errors['title'])) ? generate_error_message($errors['title']) : ''; ?>
    </li>
    <li>
        <label for="management_biographies_description"><?php echo lang('management_biographies_description');?>:</label>
        <textarea id="management_biographies_description" name="description"><?php echo (isset($data['description'])) ? $data['description'] : ''; ?></textarea>        
        <?php echo (isset($errors['description'])) ? generate_error_message($errors['description']) : ''; ?>
    </li>
    <li>
        <input type="submit" name="submit" value="<?php echo $submit_btn;?>" class="form-submit-btn" />  
        <a href="<?php echo base_url();?>admin/press"><?php echo lang('press_cancel');?></a>
    </li>
</ul>
<?php echo form_close(); ?>