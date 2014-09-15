<a href="<?php echo base_url(); ?>admin/press/add_edit_clipping" class="new-link"><?php echo lang('clipping_add_new_one'); ?></a>

<table cellpadding="0" cellspacing="0">
    <tr>
        <th style="width: 200px;"><?php echo lang('clipping_logo'); ?></th> 
        <th style="width: 20px;"></th> 
        <th style="width: 200px;"><?php echo lang('clipping_date'); ?></th> 
        <th style="width: 100px;"><?php echo lang('clipping_title'); ?></th>                              
        <th style="width: 400px;"><?php echo lang('clipping_description'); ?></th>
        <th></th>
        <th></th>
    </tr>
    <?php foreach ($activeClipping as $clipping) { ?>
        <tr>
            <td>
                <img style="max-width: 100px;" src="<?php echo static_url() . 'files/press_clipping_logos/' . $clipping['logo']; ?>" />
            </td> 
            <td>
                <?php if ($clipping['is_active']) { ?>
                    <a href="<?php echo base_url() . 'admin/press/change_clipping_status/' . $clipping['id']; ?>"><img title="Active Job" src="<?php echo static_url(); ?>layout/images/active.png" /></a>
                <?php } else { ?>
                    <a href="<?php echo base_url() . 'admin/press/change_clipping_status/' . $clipping['id']; ?>"><img title="Inactive Job" src="<?php echo static_url(); ?>layout/images/inactive.png" /></a>
                <?php } ?>
            </td>
            <td>
                <?php echo date('d M, Y', strtotime($clipping['date'])); ?>
            </td>
            <td>
                <?php echo $clipping['title']; ?>
            </td>
            <td>
                <?php echo substr($clipping['description'], 0, 200); ?>
            </td>        
            <td>
                <a href="<?php echo site_url('admin/press/add_edit_clipping/' . $clipping['id']); ?>"><?php echo lang('_edit'); ?></a>
            </td>
            <td>
                <a href="<?php echo site_url('admin/press/delete_press_clipping/' . $clipping['id']); ?>"><?php echo lang('_delete'); ?></a>
            </td>
        </tr>
    <?php } ?>
</table>