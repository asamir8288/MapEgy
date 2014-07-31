<?php echo form_open_multipart($post_url); ?>
<ul id="form_list">
    <li>
        <label for="news_title"><?php echo lang('news_title');?>:</label>
        <input type="text" value="<?php echo (isset($data['title'])) ? $data['title'] : ''; ?>" name="title" id="news_title" class="txtbox" >
        <?php echo (isset($errors['title'])) ? generate_error_message($errors['title']) : ''; ?>
    </li>
    <li>
        <label for="news_description"><?php echo lang('news_description');?>:</label>
        <textarea id="news_description" name="description"><?php echo (isset($data['description'])) ? $data['description'] : ''; ?></textarea>        
        <?php echo (isset($errors['description'])) ? generate_error_message($errors['description']) : ''; ?>
    </li>
    <li>
        <label for="news_image"><?php echo lang('news_image');?>:</label>
        <input type="file" name="userfile" id="news_image" />
        <?php echo (isset($errors['image'])) ? generate_error_message(strip_tags($errors['image'])): ''; ?>
    </li>
    <li>
        <label for="set_in_homepage"><?php echo lang('news_set_in_homepage');?>:</label>
        <input type="checkbox" <?php echo (isset($data['set_in_homepage'])) ? 'checked="checked"' : ''; ?> name="set_in_homepage" id="set_in_homepage" class="chkbox" />
    </li>
    <li>
        <input type="submit" name="submit" value="<?php echo $submit_btn;?>" class="form-submit-btn" />  
        <a href="<?php echo base_url();?>admin/manage_news"><?php echo lang('news_cancel');?></a>
    </li>
</ul>
<?php echo form_close(); ?>
