<?php echo form_open_multipart($post_url); ?>
<ul id="form_list">
    <li>
        <label for="banner_file"><?php echo lang('banner_file'); ?>:</label>
        <input type="file" name="userfile" id="banner_file" />
        <?php echo (isset($errors['image'])) ? generate_error_message(strip_tags($errors['image'])) : ''; ?>
    </li>
    <li>
        <label for="banner_is_active"><?php echo lang('banner_is_active'); ?>:</label>
        <input type="checkbox" <?php echo (isset($data['active_flag']) && $data['active_flag']) ? 'checked="checked"' : ''; ?> name="is_active" id="banner_is_active" class="chkbox" />
    </li>

    <li>
        <input type="submit" name="submit" value="<?php echo $submit_btn; ?>" class="form-submit-btn" />  
        <a href="<?php echo base_url(); ?>admin/job"><?php echo lang('job_cancel'); ?></a>
    </li>
</ul>
<?php echo form_close(); ?>

<table cellpadding="0" cellspacing="0">
    <tr>
        <th style="width: 100px;"><?php echo lang('news_image');?></th>
        <th></th>
        <th></th>
    </tr>
    <?php foreach($activeBanners as $banner){ ?>
    <tr>
        <td>
            <img style="width: 500px;" src="<?php echo static_url() . 'files/banners/' . $banner['file_name'];?>" />
        </td>   
        <td>
                <?php if ($banner['is_active']) { ?>
                    <a href="<?php echo base_url() . 'admin/banner/change_status/' . $banner['id']; ?>"><img title="Active Job" src="<?php echo static_url(); ?>layout/images/active.png" /></a>
                <?php } else { ?>
                    <a href="<?php echo base_url() . 'admin/banner/change_status/' . $banner['id']; ?>"><img title="Inactive Job" src="<?php echo static_url(); ?>layout/images/inactive.png" /></a>
                <?php } ?>
            </td>
        <td>
            <a href="<?php echo site_url('admin/banner/delete_banner/' . $banner['id']);?>"><?php echo lang('banner_delete');?></a>
        </td>        
    </tr>
    <?php } ?>
</table>

