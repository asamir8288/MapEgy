<?php echo form_open_multipart($post_url); ?>
<ul id="form_list">
    <li>
        <label for="client_logo"><?php echo lang('client_logo'); ?></label>
        <input type="file" name="userfile" id="client_logo" />
    </li>
    <li>
        <label for="logo_is_active"><?php echo lang('logo_is_active'); ?>:</label>
        <input type="checkbox" <?php echo (isset($data['active_flag']) && $data['active_flag']) ? 'checked="checked"' : ''; ?> name="is_active" id="logo_is_active" class="chkbox" />
    </li>

    <li>
        <input type="submit" name="submit" value="<?php echo lang('client_add'); ?>" class="form-submit-btn" />  
        <a href="<?php echo base_url(); ?>admin/job"><?php echo lang('job_cancel'); ?></a>
    </li>
</ul>
<?php echo form_close(); ?>

<style type="text/css">
    #clients{
        margin-top: 60px;
    }
</style>
<div id="clients">
    <?php echo form_open($submit_url); ?>
    <ol class="simple_with_animation vertical">
        <?php foreach ($clients as $client) { ?>
            <li class="logos-box">
                <a href="<?php echo base_url(); ?>admin/home/delete_logo/<?php echo $client['id']; ?>" class="delete_logo">Delete</a>
                <img src="<?php echo base_url(); ?>files/banners/<?php echo $client['file_name']; ?>" style="max-width: 210px;" />
            </li>
        <?php } ?>
    </ol>
</div>