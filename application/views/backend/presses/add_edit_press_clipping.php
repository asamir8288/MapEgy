<script type="text/javascript">
    $(document).ready(function() {
        $("#datepicker").datepicker({
            dateFormat: "yy-mm-dd"
        });
    });
</script>

<?php echo form_open_multipart($post_url); ?>
<ul id="form_list">    
    <li>
        <label for="clipping_title"><?php echo lang('clipping_title'); ?>:</label>
        <input type="text" value="<?php echo (isset($data['title'])) ? $data['title'] : ''; ?>" name="title" id="clipping_title" class="txtbox" >
        <?php echo (isset($errors['title'])) ? generate_error_message($errors['title']) : ''; ?>
    </li>
    <li>
        <label for="datepicker"><?php echo lang('clipping_date'); ?>:</label>
        <input type="text" value="<?php echo (isset($data['date'])) ? substr($data['date'],0,10) : ''; ?>" name="date" id="datepicker" class="txtbox" >
        <?php echo (isset($errors['date'])) ? generate_error_message($errors['date']) : ''; ?>
    </li>
    <li>
        <label for="clipping_description"><?php echo lang('clipping_description'); ?>:</label>
        <?php
            $val = (isset($data['description'])) ? $data['description'] : '';
            load_editor('description', htmlspecialchars_decode($val));
        ?> 
        <?php echo (isset($errors['description'])) ? generate_error_message($errors['description']) : ''; ?>
    </li>
    <?php if (isset($data)) { ?>
        <li style="margin-left: 154px;">
            <input type="hidden" name="same_image" value="<?php echo $data['logo']; ?>" >
            <img style="width: 100px;" src="<?php echo static_url() . 'files/press_clipping_logos/' . $data['logo']; ?>" />
        </li>
    <?php } ?>
    <li>
        <label for="clipping_logo"><?php echo lang('clipping_logo'); ?>:</label>
        <input type="file" name="userfile" id="clipping_logo" /> Image Dim: 280px * 182px
        <?php echo (isset($errors['logo'])) ? generate_error_message(strip_tags($errors['logo'])) : ''; ?>
    </li>
    <li>
        <label for="clipping_article_url"><?php echo lang('clipping_article_url'); ?>:</label>
        <input type="text" value="<?php echo (isset($data['link_url'])) ? $data['link_url'] : ''; ?>" name="link_url" id="clipping_article_url" class="txtbox" >
        <?php echo (isset($errors['link_url'])) ? generate_error_message($errors['link_url']) : ''; ?>
    </li>
    <li>
        <label for="clipping_is_active"><?php echo lang('clipping_is_active'); ?>:</label>
        <input type="checkbox" <?php echo (isset($data['is_active'])) ? 'checked="checked"' : ''; ?> name="is_active" id="clipping_is_active" class="chkbox" />
    </li>
    <li>
        <input type="submit" name="submit" value="<?php echo $submit_btn; ?>" class="form-submit-btn" />  
        <a href="<?php echo base_url(); ?>admin/press/list_clipping"><?php echo lang('_cancel'); ?></a>
    </li>
</ul>
<?php echo form_close(); ?>
