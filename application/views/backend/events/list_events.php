<a href="<?php echo base_url();?>admin/event/add_edit_event" class="new-link"><?php echo lang('event_add_new_event');?></a>

<table cellpadding="0" cellspacing="0">
    <tr>
        <th style="width: 100px;"><?php echo lang('event_image');?></th>
        <th style="width: 200px;"><?php echo lang('event_date');?></th>        
        <th style="width: 400px;"><?php echo lang('event_description');?></th>
        <th></th>
        <th></th>
    </tr>
    <?php foreach($activeEvents as $event){ ?>
    <tr>
        <td>
            <img style="width: 100px;" src="<?php echo static_url() . 'files/events/' . $event['image'];?>" />
        </td> 
        <td>
            <?php echo date('d M, Y', strtotime($event['date']));?>
        </td>                       
        <td>
            <?php echo substr($event['description'], 0, 200);?>
        </td>        
        <td>
            <a href="<?php echo site_url('admin/event/add_edit_event/' . $event['id']);?>"><?php echo lang('event_edit');?></a>
        </td>
        <td>
            <a href="<?php echo site_url('admin/event/delete_event/'. $event['id']);?>"><?php echo lang('event_delete');?></a>
        </td>
    </tr>
    <?php } ?>
</table>