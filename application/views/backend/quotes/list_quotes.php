<a href="<?php echo base_url(); ?>admin/home/add_edit_quote" class="new-link"><?php echo lang('_add_new_quote'); ?></a>

<table cellpadding="0" cellspacing="0">
    <tr>
        <th style="width: 100px;"><?php echo lang('quote_logo'); ?></th>               
        <th style="width: 400px;"><?php echo lang('quote_description'); ?></th>
        <th style="width: 200px;"><?php echo lang('quote_author'); ?></th> 
        <th></th>
        <th></th>
        <th></th>
        <th></th>
    </tr>
</table>
<?php echo form_open($submit_url); ?>
<ol class="simple_with_animation vertical">
    <?php foreach ($activeQuotes as $quote) { ?>
        <li>
            <table cellpadding="0" cellspacing="0">
                <tr>
                    <td>
                        <input type="hidden" name="order_flag[]" value="<?php echo $quote['id']; ?>" />
                        <img style="width: 100px;" src="<?php echo static_url() . 'files/quotes/' . $quote['logo']; ?>" />
                    </td>                              
                    <td>
                        <?php echo substr($quote['description'], 0, 200); ?>
                    </td>  
                    <td>
                        <?php echo $quote['author']; ?>
                    </td> 
                    <td>
                        <?php if ($quote['is_active']) { ?>
                            <a class="active-inactive-link" href="<?php echo base_url() . 'admin/home/change_quote_status/' . $quote['id'];?>"><img title="Active Quote" src="<?php echo static_url(); ?>layout/images/active.png" /></a>
                        <?php } else { ?>
                            <a class="active-inactive-link" href="<?php echo base_url() . 'admin/home/change_quote_status/' . $quote['id'];?>"><img title="Inactive Quote" src="<?php echo static_url(); ?>layout/images/inactive.png" /></a>
                        <?php } ?>
                    </td>
                    <td>
                        <?php if ($quote['set_at_homepage']) { ?>
                            <a class="active-inactive-link" href="<?php echo base_url() . 'admin/home/convert_quote_status/' . $quote['id'];?>"><img title="Unset Quote at homepage" src="<?php echo static_url(); ?>layout/images/active.png" /></a>
                        <?php } else { ?>
                            <a class="active-inactive-link" href="<?php echo base_url() . 'admin/home/convert_quote_status/' . $quote['id'];?>"><img title="Set Quote at homepage" src="<?php echo static_url(); ?>layout/images/inactive.png" /></a>
                        <?php } ?>
                    </td>
                    <td>
                        <a href="<?php echo site_url('admin/home/add_edit_quote/' . $quote['id']); ?>"><?php echo lang('_edit'); ?></a>
                    </td>
                    <td>
                        <a href="<?php echo site_url('admin/home/delete_quote/' . $quote['id']); ?>"><?php echo lang('_delete'); ?></a>
                    </td>
                </tr>
            </table>
        </li>
    <?php } ?>
</ol>

<input type="submit" name="submit" value="<?php echo lang('items_order'); ?>" class="items-order-btn" />
<?php echo form_close(); ?>