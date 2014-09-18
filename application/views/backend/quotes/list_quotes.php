<a href="<?php echo base_url(); ?>admin/home/add_edit_quote" class="new-link"><?php echo lang('_add_new_quote'); ?></a>

<table cellpadding="0" cellspacing="0">
    <tr>
        <th style="width: 100px;"><?php echo lang('quote_logo'); ?></th>               
        <th style="width: 400px;"><?php echo lang('quote_description'); ?></th>
        <th style="width: 200px;"><?php echo lang('quote_author'); ?></th> 
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
                        <input type="hidden" name="order_flag[]" value="<?php echo $quote['id'];?>" />
                        <img style="width: 100px;" src="<?php echo static_url() . 'files/quotes/' . $quote['logo']; ?>" />
                    </td>                              
                    <td>
                        <?php echo substr($quote['description'], 0, 200); ?>
                    </td>  
                    <td>
                        <?php echo $quote['author']; ?>
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