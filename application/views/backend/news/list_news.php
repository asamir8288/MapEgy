<a href="<?php echo base_url(); ?>admin/manage_news/add_edit_news" class="new-link"><?php echo lang('news_add_new_news'); ?></a>
<a href="<?php echo base_url() . 'admin/urls_seo?guide=news'?>" class="new-link">URL and SEO</a>

<table cellpadding="0" cellspacing="0">
    <tr>
        <th style="width: 100px;"><?php echo lang('news_image'); ?></th>
        <th style="width: 450px;"><?php echo lang('news_title'); ?></th>        
        <th style="width: 100px;margin-left: 10px;"><?php echo lang('news_date'); ?></th>
        <th style="width: 120px;"><?php echo lang('news_set_in_homepage'); ?></th>
        <th></th>
        <th></th>
    </tr>
</table>
<?php echo form_open($submit_url); ?>
<ol class="simple_with_animation vertical">
    <?php foreach ($activeNews as $news) { ?>
        <li>
            <table cellpadding="0" cellspacing="0">
                <tr>
                    <td style="width: 100px;">
                        <input type="hidden" name="order_flag[]" value="<?php echo $news['id'];?>" />
                        <img style="width: 100px;height: 65px;" src="<?php echo static_url() . 'files/news/' . $news['image']; ?>" />
                    </td> 
                    <td style="width: 450px;">
                        <?php echo $news['title']; ?>
                    </td>                       
                    <td style="width: 100px;">
                        <?php echo date('d M, Y', strtotime($news['news_date']));?>
                    </td>   
                    <td style="width: 120px;text-align: center;">
                        <?php if ($news['set_in_homepage']) { ?>
                        <a style="z-index: 5000;" href="<?php echo base_url() . 'admin/manage_news/set_in_homepage/' . $news['id'] . '/0'; ?>"><img title="Set in Homepage" src="<?php echo static_url(); ?>layout/images/active.png" /></a>
                        <?php } else { ?>
                            <a href="<?php echo base_url() . 'admin/manage_news/set_in_homepage/' . $news['id'] . '/1' ?>"><img title="unset in Homepage" src="<?php echo static_url(); ?>layout/images/inactive.png" /></a>
                        <?php } ?>
                    </td>
                    <td>
                        <a href="<?php echo site_url('admin/manage_news/add_edit_news/' . $news['id']); ?>"><?php echo lang('news_edit'); ?></a>
                    </td>
                    <td>
                        <a href="<?php echo site_url('admin/manage_news/delete_news/' . $news['id']); ?>"><?php echo lang('news_delete'); ?></a>
                    </td>
                </tr>
            </table>
        </li>
    <?php } ?>
</ol>

<input type="submit" name="submit" value="<?php echo lang('items_order'); ?>" class="items-order-btn" />
<?php echo form_close(); ?>