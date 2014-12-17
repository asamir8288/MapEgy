<a href="<?php echo base_url(); ?>admin/event/add_edit_event" class="new-link"><?php echo lang('event_add_new_event'); ?></a>
<a href="<?php echo base_url() . 'admin/urls_seo?guide=events'?>" class="new-link">URL and SEO</a>

<table cellpadding="0" cellspacing="0">
    <tr>
        <th style="width: 120px;"><?php echo lang('event_image'); ?></th>
        <th style="width: 120px;"><?php echo lang('event_date'); ?></th>        
        <th style="width: 120px;"><?php echo lang('event_title'); ?></th>        
        <th style="width: 350px;"><?php echo lang('event_summary'); ?></th>
        <th></th>
        <th></th>
    </tr>
</table>
<?php echo form_open($submit_url); ?>
<ol class="simple_with_animation vertical">
    <?php foreach ($activeEvents as $event) { ?>
        <li>
            <table cellpadding="0" cellspacing="0">
                <tr>
                    <td style="width: 120px;">
                        <input type="hidden" name="order_flag[]" value="<?php echo $event['id'];?>" />
                        <img style="width: 100px;" src="<?php echo static_url() . 'files/events/' . $event['image']; ?>" />
                    </td> 
                    <td style="width: 120px;">
                        <?php echo date('d M, Y', strtotime($event['date'])); ?>
                    </td>                       
                    <td style="width: 120px;">
                        <?php echo $event['title']; ?>
                    </td>                       
                    <td style="width: 350px;padding-right: 50px;">
                        <?php echo substr($event['summary'], 0, 200); ?>
                    </td>        
                    <td>
                        <a href="<?php echo site_url('admin/event/add_edit_event/' . $event['id']); ?>"><?php echo lang('event_edit'); ?></a>
                    </td>
                    <td>
                        <a href="<?php echo site_url('admin/event/delete_event/' . $event['id']); ?>"><?php echo lang('event_delete'); ?></a>
                    </td>
                </tr>
            </table>
        </li>
    <?php } ?>
</ol>

<input type="submit" name="submit" value="<?php echo lang('items_order'); ?>" class="items-order-btn" />
<?php echo form_close(); ?>