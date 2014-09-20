<?php echo form_open_multipart($post_url); ?>
<ul id="form_list">
    <li>
        <label for="quote_brief"><?php echo lang('quote_brief');?>:</label>
        <?php
            $val = (isset($data['description'])) ? $data['description'] : '';
            load_editor('description', htmlspecialchars_decode($val));
        ?> 
        <?php echo (isset($errors['description'])) ? generate_error_message($errors['description']) : ''; ?>
    </li>
    <?php if (isset($data)) { ?>
        <li style="margin-left: 154px;">
            <input type="hidden" name="same_image" value="<?php echo $data['logo']; ?>" >
            <img style="width: 100px;" src="<?php echo static_url() . 'files/quotes/' . $data['logo']; ?>" />
        </li>
    <?php } ?>
    <li>
        <label for="quote_logo"><?php echo lang('quote_logo');?>:</label>
        <input type="file" name="userfile" id="quote_logo" />
        <?php echo (isset($errors['image'])) ? generate_error_message(strip_tags($errors['image'])): ''; ?>
    </li>
    <li>
        <label for="quote_author"><?php echo lang('quote_author');?>:</label>
        <input type="text" value="<?php echo (isset($data['author'])) ? $data['author'] : ''; ?>" name="author" id="quote_author" class="txtbox" >
        <?php echo (isset($errors['author'])) ? generate_error_message($errors['author']) : ''; ?>
    </li>
    <li>
        <label for="quote_title"><?php echo lang('quote_title');?>:</label>
        <input type="text" value="<?php echo (isset($data['title'])) ? $data['title'] : ''; ?>" name="title" id="quote_title" class="txtbox" >
        <?php echo (isset($errors['title'])) ? generate_error_message($errors['title']) : ''; ?>
    </li>
    <li>
        <label for="is_active"><?php echo lang('is_active');?>:</label>
        <input type="checkbox" <?php echo (isset($data['is_active'])) ? 'checked="checked"' : ''; ?> name="is_active" id="is_active" class="chkbox" />
    </li>
    <li>
        <input type="submit" name="submit" value="<?php echo $submit_btn;?>" class="form-submit-btn" />  
        <a href="<?php echo base_url();?>admin/home/quotes"><?php echo lang('news_cancel');?></a>
    </li>
</ul>
<?php echo form_close(); ?>
