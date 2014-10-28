<?php echo form_open_multipart($post_url); ?>
<ul id="form_list">
    <li>
        <label for="banner_file"><?php echo lang('banner_file'); ?>:</label> 
        <input type="file" name="userfile" id="banner_file" /> Dim.: 1300px * 620px
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

<table id="test" cellpadding="0" cellspacing="0">
    <tr>
        <th style="width: 100px;"><?php echo lang('banner_file'); ?></th>
        <th></th>
        <th></th>
    </tr>
</table>
<?php echo form_open($submit_url);?>
<ol class="simple_with_animation vertical">
    <?php foreach ($activeBanners as $banner) { ?>
        <li>
            <table>
                <tr>
                    <td>
                        <input type="hidden" name="order_flag[]" value="<?php echo $banner['id'];?>" />
                        <img style="width: 300px;" src="<?php echo static_url() . 'files/banners/' . $banner['file_name']; ?>" />
                    </td>   
                    <td>
                        <?php if ($banner['is_active']) { ?>
                            <a href="<?php echo base_url() . 'admin/banner/change_status/' . $banner['id'] . '/' . $banner_page; ?>"><img title="Active Job" src="<?php echo static_url(); ?>layout/images/active.png" /></a>
                        <?php } else { ?>
                            <a href="<?php echo base_url() . 'admin/banner/change_status/' . $banner['id'] . '/' . $banner_page;; ?>"><img title="Inactive Job" src="<?php echo static_url(); ?>layout/images/inactive.png" /></a>
                        <?php } ?>
                    </td>
                    <td>
                        <a href="<?php echo site_url('admin/banner/delete_banner/' . $banner['id'] . '/' . $banner_page); ?>"><?php echo lang('banner_delete'); ?></a>
                    </td>        
                </tr>
            </table>
        </li>
    <?php } ?>
</ol>
        <input type="submit" name="submit" value="<?php echo lang('banner_order');?>" class="items-order-btn" />  
  <?php echo form_close();?>

