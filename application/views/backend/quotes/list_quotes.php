<a href="<?php echo base_url();?>admin/home/add_edit_quote" class="new-link"><?php echo lang('_add_new_quote');?></a>

<table cellpadding="0" cellspacing="0">
    <tr>
        <th style="width: 100px;"><?php echo lang('quote_logo');?></th>               
        <th style="width: 400px;"><?php echo lang('quote_description');?></th>
        <th style="width: 200px;"><?php echo lang('quote_author');?></th> 
        <th></th>
        <th></th>
    </tr>
    <?php foreach($activeQuotes as $quote){ ?>
    <tr>
        <td>
            <img style="width: 100px;" src="<?php echo static_url() . 'files/quotes/' . $quote['logo'];?>" />
        </td>                              
        <td>
            <?php echo substr($quote['description'], 0, 200);?>
        </td>  
        <td>
            <?php echo $quote['author'];?>
        </td>  
        <td>
            <a href="<?php echo site_url('admin/home/add_edit_quote/' . $quote['id']);?>"><?php echo lang('_edit');?></a>
        </td>
        <td>
            <a href="<?php echo site_url('admin/home/delete_quote/'. $quote['id']);?>"><?php echo lang('_delete');?></a>
        </td>
    </tr>
    <?php } ?>
</table>