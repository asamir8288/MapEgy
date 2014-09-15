<?php echo form_open_multipart($post_url); ?>
<ul id="form_list">    
    <?php if (isset($data)) { ?>
        <li style="margin-left: 154px;">
            <input type="hidden" name="same_image" value="<?php echo $data['image']; ?>" >
            <img style="width: 100px;" src="<?php echo static_url() . 'files/products/' . $data['image']; ?>" />
        </li>
    <?php } ?>
    <li>
        <label for="feature_image"><?php echo lang('feature_image'); ?>:</label>
        <input type="file" name="userfile" id="feature_image" />
        <?php echo (isset($errors['image'])) ? generate_error_message(strip_tags($errors['image'])) : ''; ?>
    </li>
    <li>
        <label for="feature_description"><?php echo lang('feature_description'); ?>:</label>
        <textarea id="feature_description" name="description"><?php echo (isset($data['description'])) ? $data['description'] : ''; ?></textarea>        
        <?php echo (isset($errors['description'])) ? generate_error_message($errors['description']) : ''; ?>
    </li>
    <li>
        <input type="submit" name="submit" value="<?php echo $submit_btn; ?>" class="form-submit-btn" />  
        <a href="<?php echo base_url(); ?>admin/product"><?php echo lang('feature_cancel'); ?></a>
    </li>
</ul>
<?php echo form_close(); ?>
