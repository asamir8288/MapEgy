<?php echo form_open('admin/urls_seo/index'); ?>
<ul id="form_list"> 
    <input type="hidden" name="guide_id" value="<?php echo $guide;?>" />
    <input type="hidden" name="url_original" value="<?php echo (isset($data['u_url_original'])) ? $data['u_url_original'] : ''; ?>" />
    <?php print_url_info($data) ?>

    <li>
        <input type="submit" name="submit" value="Update" class="form-submit-btn" />  
        <a href="<?php echo base_url(); ?>">Cancel</a>
    </li>
</ul>
<?php echo form_close(); ?>