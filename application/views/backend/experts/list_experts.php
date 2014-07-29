<table cellpadding="0" cellspacing="0">
    <tr>
        <th style="width: 100px;"><?php echo lang('expert_photo'); ?></th>
        <th style="width: 350px;"><?php echo lang('expert_name'); ?></th>        
        <th style="width: 350px;"><?php echo lang('expert_title'); ?></th>
        <th style="width: 140px;"><?php echo lang('expert_social_networks'); ?></th>
        <th></th>
        <th></th>
    </tr>
    <?php foreach ($experts as $expert) { ?>
        <tr>
            <td>
                <img style="width: 100px;" src="<?php echo static_url() . 'files/experts/' . $expert['photo']; ?>" />
            </td> 
            <td>
                <?php echo $expert['name']; ?>
            </td>                       
            <td>
                <?php echo $expert['title']; ?>
            </td>        
            <td style="padding-left: 40px;">
                <?php if ($expert['germany_social']) { ?>
                    <a href="<?php echo $expert['germany_social']; ?>"><img src="<?php echo static_url(); ?>layout/images/social1.png" width="15" height="15" /></a>
                <?php } ?>
                <?php if ($expert['linkedin']) { ?>
                    <a href="<?php echo $expert['linkedin']; ?>"><img src="<?php echo static_url(); ?>layout/images/linkedin.png" width="18" height="17" /></a>
                <?php } ?>
                <?php if ($expert['twitter']) { ?>
                    <a href="<?php echo $expert['twitter']; ?>"><img src="<?php echo static_url(); ?>layout/images/twitter.png" width="18" height="14" /></a>
                <?php } ?>
                <?php if ($expert['facebook']) { ?>
                    <a href="<?php echo $expert['facebook']; ?>"><img src="<?php echo static_url(); ?>layout/images/facebook.png" width="10" height="17" /></a>                  
                <?php } ?>
            </td>        
            <td>
                <a href="<?php echo site_url('admin/our_experts/add_edit_expert/' . $expert['id']); ?>"><?php echo lang('expert_edit'); ?></a>
            </td>
            <td>
                <a href="<?php echo site_url('admin/our_experts/delete_expert/' . $expert['id']); ?>"><?php echo lang('expert_delete'); ?></a>
            </td>
        </tr>
    <?php } ?>
</table>