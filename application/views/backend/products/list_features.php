<a href="<?php echo base_url();?>admin/product/add_edit_feature" class="new-link"><?php echo lang('feature_add_new_feature');?></a>

<table cellpadding="0" cellspacing="0">
    <tr>
        <th style="width: 100px;"><?php echo lang('feature_image');?></th>    
        <th style="width: 400px;"><?php echo lang('feature_description');?></th>
        <th></th>
        <th></th>
    </tr>
    <?php foreach($activeFeatures as $feature){ ?>
    <tr>
        <td>
            <img style="width: 100px;" src="<?php echo static_url() . 'files/products/' . $feature['image'];?>" />
        </td>                        
        <td>
            <?php echo substr($feature['description'], 0, 200);?>
        </td>        
        <td>
            <a href="<?php echo site_url('admin/product/add_edit_feature/' . $feature['id']);?>"><?php echo lang('feature_edit');?></a>
        </td>
        <td>
            <a href="<?php echo site_url('admin/product/delete_feature/'. $feature['id']);?>"><?php echo lang('feature_delete');?></a>
        </td>
    </tr>
    <?php } ?>
</table>