<?php echo form_open_multipart($post_url); ?>
<ul id="form_list">
    <li>
        <label for="expert_name"><?php echo lang('expert_name'); ?>:</label>
        <input type="text" value="<?php echo (isset($data['name'])) ? $data['name'] : ''; ?>" name="name" id="expert_name" class="txtbox" >
        <?php echo (isset($errors['name'])) ? generate_error_message($errors['name']) : ''; ?>
    </li>
    <li>
        <label for="expert_title"><?php echo lang('expert_title'); ?>:</label>
        <input type="text" value="<?php echo (isset($data['title'])) ? $data['title'] : ''; ?>" name="title" id="expert_title" class="txtbox" >
        <?php echo (isset($errors['title'])) ? generate_error_message($errors['title']) : ''; ?>
    </li>
    <?php if (!isset($errors['photo']) && isset($data)) { ?>
        <li style="margin-left: 154px;">
            <input type="hidden" name="same_image" value="<?php echo $data['photo']; ?>" >
            <img style="width: 100px;" src="<?php echo static_url() . 'files/experts/' . $data['photo']; ?>" />
        </li>
    <?php } ?>
    <li>
        <label for="expert_photo"><?php echo lang('expert_photo'); ?>:</label>
        <input type="file" name="userfile" id="expert_photo" />
        <?php echo (isset($errors['photo'])) ? generate_error_message(strip_tags($errors['photo'])) : ''; ?>
    </li>
    <li>
        <label for="expert_germany_social"><?php echo lang('expert_germany_social'); ?>:</label>
        <input type="text" value="<?php echo (isset($data['germany_social'])) ? $data['germany_social'] : ''; ?>" name="germany_social" id="expert_germany_social" class="txtbox" >
        <?php echo (isset($errors['germany_social'])) ? generate_error_message($errors['germany_social']) : ''; ?>
    </li>
    <li>
        <label for="expert_linkedin"><?php echo lang('expert_linkedin'); ?>:</label>
        <input type="text" value="<?php echo (isset($data['linkedin'])) ? $data['linkedin'] : ''; ?>" name="linkedin" id="expert_linkedin" class="txtbox" >
        <?php echo (isset($errors['linkedin'])) ? generate_error_message($errors['linkedin']) : ''; ?>
    </li>
    <li>
        <label for="expert_facebook"><?php echo lang('expert_facebook'); ?>:</label>
        <input type="text" value="<?php echo (isset($data['facebook'])) ? $data['facebook'] : ''; ?>" name="facebook" id="expert_facebook" class="txtbox" >
        <?php echo (isset($errors['facebook'])) ? generate_error_message($errors['facebook']) : ''; ?>
    </li>
    <li>
        <label for="expert_twitter"><?php echo lang('expert_twitter'); ?>:</label>
        <input type="text" value="<?php echo (isset($data['twitter'])) ? $data['twitter'] : ''; ?>" name="twitter" id="expert_twitter" class="txtbox" >
        <?php echo (isset($errors['twitter'])) ? generate_error_message($errors['twitter']) : ''; ?>
    </li>
    <li>
        <label for="hide_expert"><?php echo lang('expert_hide'); ?>:</label>
        <input type="checkbox" <?php echo (isset($data['hide']) && $data['hide']) ? 'checked="checked"' : ''; ?> name="hide" id="hide_expert" class="chkbox" />
    </li>
    <li>
        <input type="submit" name="submit" value="<?php echo $submit_btn; ?>" class="form-submit-btn" />  
        <a href="<?php echo base_url(); ?>admin/our_experts"><?php echo lang('experts_cancel'); ?></a>
    </li>
</ul>
<?php echo form_close(); ?>