<div>
    <a href="<?php echo base_url() . 'admin/urls_seo?guide=contact'?>" class="new-link">URL and SEO</a>
</div>

<div id="dashboard-menu" style="text-align: center;">
    <a href="<?php echo site_url('admin/contact/export_contacts'); ?>" class="contacts"></a>
    <a href="<?php echo site_url('admin/contact/contacts_with_newsletter'); ?>" class="contacts"></a>
</div>

<?php echo form_open($post_url); ?>
<ul id="form_list">
    <li>
        <label for="option_title"><?php echo lang('option'); ?>:</label>
        <input type="text" value="<?php echo (isset($data['contact_option'])) ? $data['contact_option'] : ''; ?>" name="contact_option" id="option_title" class="txtbox" >
        <?php echo (isset($errors['contact_option'])) ? generate_error_message($errors['contact_option']) : ''; ?>
    </li>
    <li>
        <input type="submit" name="submit" value="<?php echo $submit_btn; ?>" class="form-submit-btn" />  
        <a href="<?php echo base_url(); ?>admin/job"><?php echo lang('job_cancel'); ?></a>
    </li>
</ul>
<?php echo form_close(); ?>

<table cellpadding="0" cellspacing="0">
    <tr>
        <th style="width: 600px;"><?php echo lang('option'); ?></th>
        <th></th>
        <th></th>
    </tr>
</table>
<?php echo form_open($sort_url); ?>
<ol class="simple_with_animation vertical">
    <?php foreach ($options as $o) { ?>
        <li>
            <table cellpadding="0" cellspacing="0">
                <tr>
                    <td style="width: 600px;">
                        <input type="hidden" name="order_flag[]" value="<?php echo $o['id']; ?>" />
                        <?php echo $o['contact_option']; ?>
                    </td>                     
                    <td>
                        <a href="<?php echo site_url('admin/contact/index/' . $o['id']); ?>"><?php echo lang('option_edit'); ?></a>
                    </td>
                    <td>
                        <a href="<?php echo site_url('admin/contact/delete_option/' . $o['id']); ?>"><?php echo lang('option_delete'); ?></a>
                    </td>
                </tr>
            </table>
        </li>
    <?php } ?>
</ol>

<input type="submit" name="submit" value="<?php echo lang('items_order'); ?>" class="items-order-btn" />
<?php echo form_close(); ?>