<a href="<?php echo base_url(); ?>admin/product/add_edit_feature" class="new-link"><?php echo lang('feature_add_new_feature'); ?></a>
<a href="<?php echo base_url() . 'admin/urls_seo?guide=product'?>" class="new-link">URL and SEO</a>

<?php echo form_open($submit_url); ?>
<table cellpadding="0" cellspacing="0">
    <tr>
        <th style="width: 120px;"><?php echo lang('feature_image'); ?></th>    
        <th style="width: 500px;"><?php echo lang('feature_description'); ?></th>
        <th></th>
        <th></th>
    </tr>
</table>

<ol class="simple_with_animation vertical">
    <?php foreach ($activeFeatures as $feature) { ?>
        <li>
            <table cellpadding="0" cellspacing="0">

                <tr>
                    <td style="width: 120px;">
                        <input type="hidden" name="order_flag[]" value="<?php echo $feature['id']; ?>" />
                        <img style="width: 100px;" src="<?php echo static_url() . 'files/products/' . $feature['image']; ?>" />
                    </td>                        
                    <td style="width: 500px;">
                        <?php echo substr($feature['description'], 0, 200); ?>
                    </td>        
                    <td>
                        <a href="<?php echo site_url('admin/product/add_edit_feature/' . $feature['id']); ?>"><?php echo lang('feature_edit'); ?></a>
                    </td>
                    <td>
                        <a href="<?php echo site_url('admin/product/delete_feature/' . $feature['id']); ?>"><?php echo lang('feature_delete'); ?></a>
                    </td>
                </tr>

            </table>
        </li>
    <?php } ?>
</ol>

<input type="submit" name="submit" value="<?php echo lang('banner_order'); ?>" class="items-order-btn" />  
<?php echo form_close(); ?>