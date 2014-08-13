<a href="<?php echo base_url();?>admin/manage_news/add_edit_news" class="new-link"><?php echo lang('news_add_new_news');?></a>

<table cellpadding="0" cellspacing="0">
    <tr>
        <th style="width: 100px;"><?php echo lang('news_image');?></th>
        <th style="width: 200px;"><?php echo lang('news_title');?></th>        
        <th style="width: 400px;"><?php echo lang('news_description');?></th>
        <th></th>
        <th></th>
    </tr>
    <?php foreach($activeNews as $news){ ?>
    <tr>
        <td>
            <img style="width: 100px;" src="<?php echo static_url() . 'files/news/' . $news['image'];?>" />
        </td> 
        <td>
            <?php echo $news['title'];?>
        </td>                       
        <td>
            <?php echo substr($news['description'], 0, 200);?>
        </td>        
        <td>
            <a href="<?php echo site_url('admin/manage_news/add_edit_news/' . $news['id']);?>"><?php echo lang('news_edit');?></a>
        </td>
        <td>
            <a href="<?php echo site_url('admin/manage_news/delete_news/'. $news['id']);?>"><?php echo lang('news_delete');?></a>
        </td>
    </tr>
    <?php } ?>
</table>