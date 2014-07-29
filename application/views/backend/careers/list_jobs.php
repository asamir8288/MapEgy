<table cellpadding="0" cellspacing="0">
    <tr>
        <th style="width: 100px;"><?php echo lang('job_title'); ?></th>
        <th style="width: 20px;"></th>        
        <th style="width: 500px;"><?php echo lang('job_brief'); ?></th>        
        <th style="width: 100px;"><?php echo lang('job_pdf'); ?></th>
        <th></th>
        <th></th>
    </tr>
    <?php foreach ($jobs as $job) { ?>
        <tr>
            <td>
                <?php echo $job['title']; ?>
            </td>                       
            <td>
                <?php if ($job['active_flag']) { ?>
                    <a href="<?php echo base_url() . 'admin/job/change_job_status/' . $job['id']; ?>"><img title="Active Job" src="<?php echo static_url(); ?>layout/images/active.png" /></a>
                <?php } else { ?>
                    <a href="<?php echo base_url() . 'admin/job/change_job_status/' . $job['id']; ?>"><img title="Inactive Job" src="<?php echo static_url(); ?>layout/images/inactive.png" /></a>
                <?php } ?>
            </td>                       
            <td>
                <?php echo substr($job['description'], 0, 200); ?>
            </td>           
            <td style="padding-left: 40px;">
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
    <?php } ?>
</table>