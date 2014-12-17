<a href="<?php echo base_url(); ?>admin/job/add_edit_job" class="new-link"><?php echo lang('job_add_new_job'); ?></a>
<a href="<?php echo base_url() . 'admin/urls_seo?guide=career'?>" class="new-link">URL and SEO</a>

<table cellpadding="0" cellspacing="0">
    <tr>
        <th style="width: 100px;"><?php echo lang('job_title'); ?></th>
        <th style="width: 20px;"></th>        
        <th style="width: 500px;"><?php echo lang('job_brief'); ?></th>        
        <th style="width: 100px;"><?php echo lang('job_pdf'); ?></th>
        <th></th>
        <th></th>
    </tr>
</table>
<?php echo form_open($submit_url); ?>
<ol class="simple_with_animation vertical">
    <?php foreach ($jobs as $job) { ?>
        <li>
            <table cellpadding="0" cellspacing="0">
                <tr>
                    <td style="width: 100px;">
                        <input type="hidden" name="order_flag[]" value="<?php echo $job['id'];?>" />
                        <?php echo $job['title']; ?>
                    </td>                       
                    <td style="width: 20px;">
                        <?php if ($job['active_flag']) { ?>
                            <a href="<?php echo base_url() . 'admin/job/change_job_status/' . $job['id']; ?>"><img title="Active Job" src="<?php echo static_url(); ?>layout/images/active.png" /></a>
                        <?php } else { ?>
                            <a href="<?php echo base_url() . 'admin/job/change_job_status/' . $job['id']; ?>"><img title="Inactive Job" src="<?php echo static_url(); ?>layout/images/inactive.png" /></a>
                        <?php } ?>
                    </td>                       
                    <td style="width: 500px;">
                        <?php echo substr($job['description'], 0, 200); ?>
                    </td>           
                    <td style="padding-left: 40px;width: 100px;">
                        <?php if (!is_null($job['pdf']) && !empty($job['pdf'])) { ?>
                            <img title="Has PDF file" src="<?php echo static_url(); ?>layout/images/pdf-icon.png" style="width: 30px;height: 30px;" />
                            <?php
                        } else {
                            echo 'No File';
                        }
                        ?>
                    </td>           
                    <td>
                        <a href="<?php echo site_url('admin/job/add_edit_job/' . $job['id']); ?>"><?php echo lang('job_edit'); ?></a>
                    </td>
                    <td>
                        <a href="<?php echo site_url('admin/job/delete_job/' . $job['id']); ?>"><?php echo lang('job_delete'); ?></a>
                    </td>
                </tr>
            </table>
        </li>
    <?php } ?>
</ol>

<input type="submit" name="submit" value="<?php echo lang('items_order'); ?>" class="items-order-btn" />
<?php echo form_close(); ?>